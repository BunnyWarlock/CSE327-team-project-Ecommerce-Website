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

if (isset($_POST["add"])) {
    $productId = $_GET["id"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuantity = $_POST["quantity"];

    $sql = "INSERT INTO 'product_second' ('description', 'image', 'price', 'quantity') VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
    mysqli_query($conn, $sql);
}

include 'views/index_view.php';
