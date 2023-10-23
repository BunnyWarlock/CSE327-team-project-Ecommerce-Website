<?php
include "dbh.class.php";

class ReturnProductControl extends Dbh {

  public function setReturnProduct($userName, $productName, $returnReason){
    $sql = "insert into return_product (username, productname, returnReason) values (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName, $productName, $returnReason]);
  }
}