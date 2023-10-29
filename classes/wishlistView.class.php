<?php
include "dbh.class.php";

/**
 * WishlistView
 */
class WishlistView extends Dbh {

  /**
   * getWishlist
   *
   * @param  mixed $userName
   * @return void
   */
  public function getWishlist($userName){
        $sql = "select * from wishlist where username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userName]);


        echo "User Name:" . $userName . "<br> <br>";
        echo "Wishlist Items: <br> <br>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

           echo $row['productname'] . "<br>";
          echo "<br>";
      }
    }




}