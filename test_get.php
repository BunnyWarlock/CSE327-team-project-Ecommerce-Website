<?php

include 'includes/autoloader.inc.php';
include 'classes/dbh.class.php';


class WishlistView extends Dbh {

  public function getWishlist($userName)
  {
    $sql = "select * from wishlist where username = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName]);

    
    echo $userName . "<br>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      
       echo $row['productname'] . "<br>";
      echo "<br>";
  }
}


}
$testObj = new WishlistView() ;
$testObj-> getWishlist("nibir");

