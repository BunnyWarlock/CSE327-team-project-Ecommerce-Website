<?php
include 'includes/autoloader.inc.php';
include 'classes/login.class.php';
$userName ="";
$password = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login_style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <title>Login</title>
  
</head>
<body >
  
  <div class="wrapper">
    
  <form method="POST" >
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>

      <div class="remember-forget">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forget password?</a>
      </div>

      <button type="submit" class="btn" name="login_shop">Login</button>

      <div class="register-link">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
    </form>
  </div>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $loginObj = new LoginControl();
    $loginObj->authenticateUser($userName, $password);
  }
  ?>


</body>
</html>