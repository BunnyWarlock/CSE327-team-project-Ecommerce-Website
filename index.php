<?php
include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  referrerpolicy="no-referrer" />  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body>

  <section id="header">
    <a href="#"><img src="image/img/logo.png" class="logo" alt="logo"></a>

    <div>
      <ul id="navbar">
        <li><a href="addAuctionItem.php">Create Auction</a></li>
        <li><a href="browseAuctionItems.php">Browse Auction</a></li>
        <li><a href="createLottery.php">Create Lottery</a></li>
        <li><a href="createTiers.php">Create Tiers</a></li>
        <li><a href="playLottery.php">Lottery</a></li>
        <li><a class='active' href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="admin_area/index.php">Admin</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

      </ul>
    </div>
  </section>

  <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super Value Deals</h2>
    <h1>On all products</h1>
    <p>save more with coupons & up to 70% off!</p>
    <button>Shop Now</button>
  </section>

  <section id="feature" class="section-p1">
    <div class="featureBox">
      <a href="views/cart_view.php"><img src="image/img/features/f1.png" alt=""> </a>
      <h6>Shipping Cart</h6>
    </div>
    <div class="featureBox">
      <a href="views/index_view.php"> <img src="image/img/features/f2.png" alt=""> </a>
      <h6>Index View</h6>
    </div>
    <div class="featureBox">
       <a href="wishlist.php"> <img src="image/img/features/f3.png" alt=""> </a>
      <h6>Make a Wishlist</h6>
    </div>
    <div class="featureBox">
      <a href="return_product.php"> <img src="image/img/features/f4.png" alt=""> </a>
      <h6>Return Product</h6>
    </div>
    <div class="featureBox">
       <a href="posted_reviews.php"><img src="image/img/features/f5.png" alt=""></a>
      <h6>Posted Reviews</h6>
    </div>
    <div class="featureBox">
      <a href="review.php"><img src="image/img/features/f6.png" > </a>
      <h6>Product Review</h6>
    </div>
  </section>

  <section id="product1" class="section-p1">
    <h2>Feature Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
      <div class="pro">
        <img src="image/img/products/f1.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Cartoon Astronaut T-Shirts</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>1280 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f2.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Floral T-Shirts</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>780 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f3.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Pattern Floral T-Shirts</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>780 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f4.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Cherry Drop design hawaiwan Shirt </h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>1080 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f5.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Basic Shirts</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>1080 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f6.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Full Sleeve Shirts</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>1580 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f7.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Easyware Khaki Pants</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>1180 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

      <div class="pro">
        <img src="image/img/products/f8.jpg" alt="">
        <div class="description">
          <span>addidas</span>
          <h5>Urban Garment</h5>
          <div class="Star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4>580 Taka</h4>
        </div>
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
      </div>

    </div>

  </section>

  <section id="banner" class="section-m1">
    <h4>Repair Service</h4>
    <h2>Up to <span> 70% Off </span> - All t-shirts & Accessories</h2>
    <button class="normal">Explore More</button>
  </section>

  <section id="sm-banner" class="section-p1">
    <div class="banner-box">
      <h4>crazy Deals</h4>
      <h2>Buy 1 Get 1 Free</h2>
      <span>The best classic dress is on sale</span>
      <button class="white">Learn More</button>
      </div>

      <div class="banner-box banner-box-2">
        <h4>crazy Deals</h4>
        <h2>Buy 1 Get 1 Free</h2>
        <span>The best classic dress is on sale</span>
        <button class="white">Collection</button>
        </div>
  </section>

  <section id="banner-3">
    <div class="banner-box">
    <h2>Seasonal sale</h2>
      <button class="white">Collection</button>
      </div>

      <div class="banner-box banner2">
        <h2>Seasonal sale</h2>
        <h3>Winter collection</h3>
          <button class="white">Collection</button>
          </div>

      <div class="banner-box banner3">
        <h2>Seasonal sale</h2>
          <h3>Female clothing collection</h3>
          <button class="white">Collection</button>
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
