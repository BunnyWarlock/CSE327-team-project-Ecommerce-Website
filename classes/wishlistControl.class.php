<?php
include "dbh.class.php";

class WishlistControl extends Dbh {
  public function setWishlist($userName, $productName){
    $sql ="insert into wishlist (username, productname) values (?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName , $productName]);
  }
}