<?php
/**
 * Start or resume a session.
 */
session_start();

/**
 * The server details for the database connection.
 * @var string $servername The server name.
 * @var string $username The username to connect to the database.
 * @var string $password The password to connect to the database.
 * @var string $dbname The name of the database to connect to.
 * @var int $port The port to use for the database connection.
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse327project";
$port = 4306;

/**
 * Attempt to establish a database connection using mysqli.
 * @var mysqli|false $conn The database connection object or false if connection fails.
 */
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    echo "Failed to Connect";
}

if (isset($_POST["add"])) {
    /**
     * Get the product details from the form when adding an item to the cart.
     * @var int $productId The unique identifier of the product.
     * @var string $productName The name of the product to add to the cart.
     * @var string $productImage The image URL of the product.
     * @var float $productPrice The price of the product.
     * @var int $productQuantity The quantity of the product to add to the cart.
     */
    $productId = $_GET["id"];
    $productName = $_POST["hidden_name"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuantity = $_POST["quantity"];

    /**
     * SQL query to insert the selected product into the 'product_second' table.
     */
    $sql = "INSERT INTO 'product_second' (`description`, `image`, `price`, `quantity`) VALUES ('$productName', '$productImage', '$productPrice', '$productQuantity');";
    
    // Execute the SQL query to add the product to the cart.
    mysqli_query($conn, $sql);
}

/**
 * Include the 'index_view.php' file to display the index page.
 */
include 'views/index_view.php';
