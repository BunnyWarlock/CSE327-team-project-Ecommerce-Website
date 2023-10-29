<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoping Cart</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  referrerpolicy="no-referrer" />  <link rel="stylesheet" href="style.css">
 
</head>
<body>
  
  <section id="header">
    <a href="#"><img src="image/img/logo.png" class="logo" alt="logo"></a>

    <div>
      <ul id="navbar">
      <li><a  href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a class="active" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

      </ul>
    </div>
  </section>

  <section id="page-header" class="about-header">
    
    <h2>#Know Us<h2>
  </section>

  <section id = "cart" class="section-p1">
    <table width="100%">
      <thead>
        <td>Remove</td>
        <td>Image</td>
        <td>Product</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Subtotal</td>
      </thead>
      <tbody>
        <tr>
          <td> <a href="#"> </a><i class="far fa-times-circle"></i></a></td>
          <td><img src="image/img/products/f1.jpg" alt=""></td>
          <td>Cartoon Astronaut T-shirts</td>
          <td>1280 Taka</td>
          <td><input type="number" value="1"></td>
          <td>1280 Taka</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section id="cart-add">
    <div id="subtotal">
      <h3>Cart Total</h3>
      <table>
        <tr>
          <td>Cart Subtotal</td>
          <td>1280 Taka</td>
        </tr>
        <tr>
          <td>Shipping</td>
          <td>free</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>1280 Taka</strong></td>
        </tr>
      </table>
      <button class="Normal">Proceed to Checkout</button>
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

  <script src="app.js"></script>
</body>
</html>