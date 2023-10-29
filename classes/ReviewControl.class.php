<?php
include 'dbh.class.php';

class postReview extends Dbh{
 
  public function setReview($userName, $productName, $reviewValue) {

    $sql = "insert into review (username, productname, review) values (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName, $productName, $reviewValue]);
    
    
}
}




