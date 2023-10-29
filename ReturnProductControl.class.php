<?php
// Include the database connection class
include "dbh.class.php";

/**
 * Class ReturnProductControl
 * This class is responsible for handling the insertion of returned products into the database.
 */
class ReturnProductControl extends Dbh {
  
  /**
   * Insert return product information into the database.
   *
   * @param string $userName The name of the user returning the product.
   * @param string $productName The name of the product being returned.
   * @param string $returnReason The reason for returning the product.
   */
  public function setReturnProduct($userName, $productName, $returnReason){
    $sql = "INSERT INTO return_product (username, productname, returnReason) VALUES (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName, $productName, $returnReason]);
  }
}
?>
