<?php
require_once("../includes/sessionstart.php");
require_once('../includes/header.php');
require_once("../model/blogDAO.php");
require_once("../model/productDAO.php");
$post = $_GET["post"];
$postData = getPost($post);
$related = getRelatedProducts($postData["RelatedProducts"]);
$breadcrumbCat = getBlogCategory($postData["BlogCategoryID"]);
$author = getAuthor($postData["UserEmail"]);
?>
  <div class="container post-container">
      <nav class="breadcrumb-nav">
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="blog.php" class="breadcrumb">Bluck</a>
            <a href="blog.php?cat=<?php echo $postData["BlogCategoryID"]; ?>" class="breadcrumb"><?php echo $breadcrumbCat["CategoryName"]; ?></a>
            <a href="#!" class="breadcrumb"><?php echo $postData["Title"]; ?></a>
          </div>
        </div>
      </nav>
      <div class="row">
        <div class="col s12">
          <div class="card">
            <div class="card-image">
                <img src="<?php if($postData["URL"] != "") {
                    echo $postData["URL"];
                } else echo "http://via.placeholder.com/1920x1080"; ?>">
              <span class="card-title"><?php echo $postData["Title"]; ?></span>
            </div>
            <div class="card-content">
              <i>Posted on <b><?php echo $postData["BlogDate"]; ?></b> by <b><?php echo $author["FirstName"]; ?></b> in <b><?php echo $breadcrumbCat["CategoryName"]; ?></b></i>
              <p><?php echo $postData["BlogContent"]; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php if(isset($postData["RelatedProducts"])) { ?>
          <div class="carousel product-slider">
      			<h4>Related producks!</h4>
            <?php
              while($row = mysqli_fetch_array($related)) {
                ?>
                  <a class='carousel-item' href='product.php?item=<?php echo $row["ItemNumber"]; ?>'>
                      <div class='card'>
                        <div class='card-image'>
                          <img src='http://via.placeholder.com/400x400'>
                          <span class='card-title'><?php echo $row["ProductName"]; ?></span>
                        </div>
                        <div class='card-action'>
                          <p class='price'>$<?php echo $row["Price"]; ?></p>
                          <div class='stars right'>
                            <i class='material-icons tiny rated'>star</i>
                            <i class='material-icons tiny rated'>star</i>
                            <i class='material-icons tiny rated'>star</i>
                            <i class='material-icons tiny rated'>star</i>
                            <i class='material-icons tiny'>star_border</i>
                          </div>
                        </div>
                      </div>
                  </a>
                <?php
              }
            ?>
          </div>
        <?php } ?>
        <h4>Related Bluckposts!</h4>
        <?php
          $blogResult = getAllRelatedPosts($postData["BlogCategoryID"], $post);
          while($row = mysqli_fetch_array($blogResult)) {
            ?>
            <div class="col s12 m6">
              <div class="card">
                <div class="card-image">
                  <img src="http://via.placeholder.com/1920x1080">
                  <span class="card-title"><?php echo $row["Title"]; ?></span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="post.php?post=<?php echo $row["BlogPostID"] ?>">Read more</a>
                </div>
              </div>
            </div>
          <?php
          }
        ?>
      </div>
  </div>
<?php require_once('../includes/footer.php') ?>
