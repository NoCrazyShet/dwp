<?php
require_once("../includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Duckshop admin area</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/custom/custom.css" />
    <!--Import noUIslider-->
    <link type="text/css" rel="stylesheet" href="../nouislider/nouislider.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body class="admin-area">
    <nav class="grey darken-4 admin-topnav">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Admin area</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="manage-orders.php"><i class="material-icons">shopping_cart</i></a></li>
          <li><a href="manage-products.php"><i class="material-icons">view_list</i></a></li>
          <li><a href="manage-blog.php"><i class="material-icons">subject</i></a></li>
          <li><a href="manage-settings.php"><i class="material-icons">settings</i></a></li>
          <li><a href="manage-user.php"><i class="material-icons">person</i></a></li>
        </ul>
      </div>
    </nav>
