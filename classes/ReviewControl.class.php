<?php
include 'dbh.class.php';

/**
 * postReview
 */
class postReview extends Dbh{

  /**
   * setReview
   *
   * @param  mixed $userName
   * @param  mixed $productName
   * @param  mixed $reviewValue
   * @return void
   */
  public function setReview($userName, $productName, $reviewValue) {

    $sql = "insert into review (username, productname, review) values (?, ?, ?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$userName, $productName, $reviewValue]);


}
}




