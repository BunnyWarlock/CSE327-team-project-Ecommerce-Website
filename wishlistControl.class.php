<?php
include "dbh.class.php";

/**
 * WishlistControl
 */
class WishlistControl extends Dbh {
  /**
   * setWishlist
   *
   * @param  mixed $userName
   * @param  mixed $productName
   * @return void
   */
  public function setWishlist($userName, $productName){
    /** @var mixed $sql query */
    $sql ="insert into wishlist (username, productname) values (?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName , $productName]);
  }
}