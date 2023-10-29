<?php 

include "classes/ReviewView.class.php";
require_once "classes/dbh.class.php";

class reviewTest extends \PHPUnit\Framework\TestCase {


   public function testGetReview(){
      
      $reviewView = new Review_view();

      $reviewView->connect();

      $productName = "mouse";
      $review = $reviewView->getReview($productName);

      $this->assertEquals('cheap yet effective', $review);

   }
}