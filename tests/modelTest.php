<?php

require 'model.php'; 

class modelTest extends \PHPUnit\Framework\TestCase {
    protected $conn; 

    public function setUp(): void {
        parent::setUp();
        
        $this->conn = mysqli_connect("localhost", "root", "", "cse327project");
    }

    public function tearDown(): void {
        parent::tearDown();
        mysqli_close($this->conn);
    }

    public function testGetCartItems() {
        $obj = new modelTest($this->conn); 
        $cartItems = $obj->getCartItems();
       
        $this->assertIsArray($cartItems); 
        $this->assertGreaterThan(0, count($cartItems)); 
    }
}
