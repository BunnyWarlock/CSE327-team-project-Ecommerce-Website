<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  referrerpolicy="no-referrer" />  <link rel="stylesheet" href="style.css">

</head>
<body>

  <section id="header">
    <a href="#"><img src="image/img/logo.png" class="logo" alt="logo"></a>

    <div>
      <ul id="navbar">
      <li><a  href="index.php">Home</a></li>
        <li><a class="active" href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

      </ul>
    </div>
  </section>


  <section id="product-details" class="section-p1">
    <div class="single-pro-img">
      <img src="image/img/products/f1.jpg" width="100%" id= "mainImg" alt="">

      <div class="small-img-group">
        <div class="small-img-col">
          <img src="image/img/products/f1.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
          <img src="image/img/products/f2.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
          <img src="image/img/products/f3.jpg" width="100%" class="small-img" alt="">
        </div>

        <div class="small-img-col">
          <img src="image/img/products/f4.jpg" width="100%" class="small-img" alt="">
        </div>
      </div>
    </div>

    <div class="single-pro-details">
      <h6>Home/ T Shirt</h6>
      <h4>Men's Fashion T Shirt</h4>
      <h2>1280 taka</h2>

      <select >
        <option>Select Size</option>
        <option>SMALL</option>
        <option>XL</option>
        <option>XXL</option>
        <option>LARGE</option>
      </select>
      <input type="number" value="1">
      <button class="normal">Add To Cart</button>
      <h4>Product-Details</h4>
      <span>This T-shirt is made from 100% cotton. Soft to touch and breathable to wear</span>
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
  <!-- image slider -->

  <script>
    var mainImg = document.getElementById("mainImg");
    var small_img = document.getElementsByClassName("small-img");

    small_img[0].onclick = function(){
      mainImg.src = small_img[0].src
    }
    small_img[1].onclick = function(){
      mainImg.src = small_img[1].src
    }
    small_img[2].onclick = function(){
      mainImg.src = small_img[2].src
    }
    small_img[3].onclick = function(){
      mainImg.src = small_img[3].src
    }
  </script>



  <script src="app.js"></script>
</body>
</html>
