<?php require_once("includes/header.php") ?>
  <div class="container product-container">
    <div class="row">
      <div class="col s12 m5 product-img">
        <img class="responsive-img" src="http://via.placeholder.com/800x800" alt="">
      </div>
      <div class="col s12 m7">
        <h1 class="product-title">Rubber duck</h1>
        <div class="short-desc">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="input-field inline cart_quantity">
              <input id="quantity" type="number">
              <label for="quantity">Quantity</label>
            </div>
            <a class="waves-effect waves-light btn cart-btt"><i class="material-icons right">add_shopping_cart</i>Add to cart</a>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-tabs">
        <ul class="tabs">
          <li class="tab"><a href="#description">Description</a></li>
          <li class="tab"><a href="#reviews">Reviews</a></li>
        </ul>
      </div>
      <div class="card-content">
        <div id="description">
          <div class="row">
            <div class="col s12 m8">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col s12 m4">
              <p><b>Shipping:</b><br>
              49 kr</p>
              <p><b>Some other fact:</b><br>
              Duuuuck</p>
            </div>
          </div>
        </div>
        <div id="reviews">
          <div class="reviews-top">
            <div class="review-top-txt">
              <h3>Reviews of Rubber duck</h3>
              <p>Here you can read about other peoples opinion about this product. Contribute by writing your review.</p>
            </div>
            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add review</a>
            <!-- Modal Structure -->
            <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>Add your review</h4>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s12 m6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Review title</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Review text</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12 m6">
                        <form class="rating">
                          <label>
                            <input type="radio" name="stars" value="1" />
                            <i class="material-icons small rated">star</i>
                          </label>
                          <label>
                            <input type="radio" name="stars" value="2" />
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                          </label>
                          <label>
                            <input type="radio" name="stars" value="3" />
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                          </label>
                          <label>
                            <input type="radio" name="stars" value="4" />
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                          </label>
                          <label>
                            <input type="radio" name="stars" value="5" />
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                            <i class="material-icons small rated">star</i>
                          </label>
                        </form>
                      </div>
                    </div>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Add review</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Donald Duckfreak</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-action">
                  <div class="stars">
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small">star_border</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">John Duck</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-action">
                  <div class="stars">
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small">star_border</i>
                    <i class="material-icons small">star_border</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card">
                <div class="card-content">
                  <span class="card-title">Jane Duckling</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="card-action">
                  <div class="stars">
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                    <i class="material-icons small rated">star</i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
<?php require_once("includes/footer.php") ?>
