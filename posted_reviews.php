<?php
include 'includes/autoloader.inc.php';
include 'classes/ReviewView.class.php';
 $result="";
 $productName="";
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

<section id="posted-review">
  <h2>Reviews</h2>
    <div id="review-total">
      <form method="POST">
      <label id="searched_product">Enter the product name:</label>
      <input type="text" name="searched_product">
      <button class="normal">Submit</button>
      </form>


      <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $productName = $_POST["searched_product"];

      $getreviewobj = new Review_view();
      $result = $getreviewobj->getReview($productName);
    } 
      
      ?>

    <table id="posted-review-table">
    <thead>
      <tr>
        <td>Product Name</td>
        <td>Review</td>
      </tr>
      <tr>
        <?php echo "<td>" . $productName ."</td>" ?>
        <?php echo "<td>" . $result ."</td>" ?>
      </tr>
      

    </thead>

  </table>
    </div>
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
