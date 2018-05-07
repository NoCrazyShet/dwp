<?php
session_start();
if (isset($_POST["submitcart"])) {
    addtocart($_GET["item"], $_POST["amount"]);
}

//unset($_SESSION["cart"]);

function addtocart($item, $amount) {
  $amount = (int)$amount;
  if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array($item => $amount);
  } else {
    if (!isset($_SESSION["cart"][$item])) {
      array_push_assoc($_SESSION["cart"], $item, $amount);
    } else {
      addmoreitems($_SESSION["cart"], $item, $amount);
    }

  }
}

function array_push_assoc(&$array, $key, $value){
$array[$key] = $value;
return $array;
}

function addmoreitems(&$array, $key, $value){
$oldvalue = $array[$key];
$array[$key] = $oldvalue + $value;
return $array;
}

// DB Connection
require_once("../includes/connection.php");

// Function to get the current item on single productpage
function getCartProduct($itemNumber) {
  global $connection;

  $query = "SELECT * FROM Product INNER JOIN ProductImg ON Product.ItemNumber = ProductImg.ItemNumber INNER JOIN ImgGallery ON ProductImg.ImgID = ImgGallery.ImgID WHERE Product.ItemNumber = $itemNumber AND ProductImg.IsPrimary = true";
  // $query = "SELECT * FROM Product WHERE ItemNumber = $itemNumber";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);
  return $row;
}

// remove from cart
if(isset($_GET["remove"])) {
  unset($_SESSION["cart"][$_GET["remove"]]);
}

if(isset($_POST["updatecart"])) {
  foreach($_SESSION["cart"] as $key => $value) {
    array_push_assoc($_SESSION["cart"], $key, $_POST["$key"]);
  }
}

// DOOOOO
if(isset($_POST["submitshipping"])) {
  $_SESSION["street"] = $_POST["street"];
  $_SESSION["house"] = $_POST["house"];
  $_SESSION["zipcode"] = $_POST["zipcode"];
  $_SESSION["city"] = $_POST["city"];
  $_SESSION["saveaddress"] = $_POST["saveaddress"];
  $_SESSION["shippingoption"] = $_POST["shippingoption"];
  if(isset($_POST["ordermessage"])) {
    $_SESSION["ordermessage"] = $_POST["ordermessage"];
  }
}
?>
