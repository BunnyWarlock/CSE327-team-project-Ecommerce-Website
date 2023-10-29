<?php
include "dbh.class.php";

/**
 * ReturnProductControl
 */
class ReturnProductControl extends Dbh {

  /**
   * setReturnProduct
   *
   * @param  mixed $userName
   * @param  mixed $productName
   * @param  mixed $returnReason
   * @return string
   */
  public function setReturnProduct($userName, $productName, $returnReason){
    $sql = "insert into return_product (username, productname, returnReason) values (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName, $productName, $returnReason]);
  }
}