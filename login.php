<?php
session_start();

include("connection.php");

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM form1 WHERE email='$email' && password='$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    
    if($total == 1)
    {
        $_SESSION['email'] = $email;
        header('location: index.php');
        exit;
    }
    else{
        echo "Login Failed";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>

  <p class="login-info-text">
    If already registered via e-mail then <b>login</b>.
  </p>

  <form method="post" class="login-box">
    <h2 class="login-title">Login</h2>

    <div class="login-field">
      <label class="login-label">Email:</label>
      <input type="text" name="email" required class="login-input" placeholder="username">
    </div>

    <div class="login-field">
      <label class="login-label">Password:</label>
      <input type="password" name="password" class="login-input" placeholder="password">
    </div>

    <input type="submit" value="Login" name="login" class="login-btn">

    <div class="signup">
      New Member ? <a href="signup.php" class="link">Sign Up Here</a>
    </div>
  </form>

  <footer class="site-footer">
    <div class="footer-work">Work: PHP_SESSION (checking by an email)</div>
    <div class="footer-dev">Developed by: Muhammad Shoaib</div>
  </footer>

</body>
</html>

