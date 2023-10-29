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

/**
 * Include the 'model.php' file for database interaction.
 */
include 'model.php';

/**
 * Create an instance of the CartModel class for managing the shopping cart.
 * @var CartModel $cartModel An instance of the CartModel class.
 */
$cartModel = new CartModel($conn);

if (isset($_GET["action"]) && $_GET["action"] == "delete") {
    /**
     * Get the product name from the GET request to delete a cart item.
     * @var string $productName The name of the product to be deleted from the cart.
     */
    $productName = $_GET["name"];
    
    // Call the deleteCartItem method to remove the specified product from the cart.
    $cartModel->deleteCartItem($productName);
}

/**
 * Include the 'cart_view.php' file to display the shopping cart.
 */
include 'views/cart_view.php';

