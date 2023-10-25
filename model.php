<?php
class CartModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getCartItems() {
        $query = "SELECT * FROM 'product_second' ORDER BY id ASC";
        $result = mysqli_query($this->conn, $query);
        $cartItems = array();

        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $cartItems[] = $row;
            }
        }

        return $cartItems;
    }

    public function deleteCartItem($productName) {
        $deleteQuery = "DELETE FROM 'product_second' WHERE description = '$productName'";
        return mysqli_query($this->conn, $deleteQuery);
    }
}
?>
