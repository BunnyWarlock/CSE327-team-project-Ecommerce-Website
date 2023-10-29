<?php
include 'includes/autoloader.inc.php';
include 'classes/ReviewControl.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  referrerpolicy="no-referrer" />  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
 
</head>
<body>


  <section id="header">
    <a href="#"><img src="image/img/logo.png" class="logo" alt="logo"></a>

    <div>
      <ul id="navbar">
      <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

      </ul>
    </div>
  </section>

  <section id="review-header" class="review">
    
    <form method="POST">
    <h2>Leave a Product review</h2>
      <h4>User Name: <input type="text" name="username" id="input-box" placeholder="Enter your name"></h4>
      <h4>Product Name: <input type="text" name="productname"  placeholder="Enter the product name"> </h4>
      <h4 >Review: <input type="text" name="review" id="review" maxlength="150"  placeholder="Write your review here"> <button class="normal">Submit</button> </h4>
    </form>
    <!-- this is where we are fetching the input data and storing into the db  -->
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $userName= $_POST["username"];
    $productName =$_POST["productname"];
    $reviewValue =$_POST["review"];

    $postReviewObj = new postReview();
    $postReviewObj->setReview($userName, $productName, $reviewValue);
    }
    ?>


  </section>





  <footer class="section-p1">
    <div class="col">
      <img class="logo" src="image/img/logo.png" alt="">
      <h4>Contact</h4>
      <p> <strong>Address:</strong> Plot # 15, Dhaka 1229 </p>
      <p> <strong>Phone:</strong> 0123456789</p>
      <p> <strong>Hours:</strong>10:00 - 18:00, Sun - Fri </p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest-p"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>

    
    <div class="col">
      <h4>About</h4>
      <a href="#">About Us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Contact us</a>
    </div>

    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign In</a>
      <a href="#">view Cart</a>
      <a href="#">Wishlist</a>
    </div>

  </footer>

  
</body>
</html>


    