<?php
/**
 * Class CartModel
 * This class provides methods for managing shopping cart items in a database.
 */
class CartModel {
    /**
     * @var mysqli The database connection.
     */
    private $conn;

    /**
     * CartModel constructor.
     * @param mysqli $conn The database connection to be used by the model.
     */
    public function __construct($conn) {
        $this->conn = $conn;
    }

    /**
     * Get the list of items in the shopping cart.
     * @return array An array containing the cart items.
     */
    public function getCartItems() {
        $query = "SELECT * FROM `product_second` ORDER BY id ASC";
        $result = mysqli_query($this->conn, $query);
        $cartItems = array();

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $cartItems[] = $row;
            }
        }

        return $cartItems;
    }

    /**
     * Delete a cart item based on its product name.
     * @param string $productName The name of the product to delete from the cart.
     * @return bool True if the item was successfully deleted, false otherwise.
     */
    public function deleteCartItem($productName) {
        $deleteQuery = "DELETE FROM `product_second` WHERE description = '$productName'";
        return mysqli_query($this->conn, $deleteQuery);
    }
}
?>
