<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse327project";
$port = 4306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    echo "Failed to Connect";
}

include 'model.php';

$cartModel = new CartModel($conn);

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    $productName = $_GET["name"];
    $cartModel->deleteCartItem($productName);
}

include 'views/cart_view.php';
