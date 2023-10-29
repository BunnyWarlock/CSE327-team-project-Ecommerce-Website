<?php
include "dbh.class.php";

class Review_view extends dbh {

  public function getReview($productName){
    $sql = "select * from review where productname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$productName]);
    $names = $stmt->fetchAll();

    foreach($names as $name)
    {
    return $name['review'] ;
    }
  
  }
}
?>
