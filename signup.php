<?php
session_start();

include("connection.php");
error_reporting(0);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $address=$_POST["address"];

    // insert user into database
    $sql="INSERT INTO form1 (firstname,lastname,gender,email,password,address) VALUES ('$firstname','$lastname','$gender','$email','$password','$address')";
    if ($conn->query($sql) === TRUE) {
        // auto login after signup
        $_SESSION['email'] = $email;
        header("Location: index.php");
      exit;
    } else{
        echo "Sign up falied:" . $conn->error;
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Form</title>
  <link rel="stylesheet" href="./css/signup.css">
</head>
<body>

  <form method="post" class="signup-box">
    <h2 class="signup-title">Signup FORM</h2>

    <div class="signup-field">
      <label class="signup-label">First Name</label>
      <input type="text" name="firstname" class="signup-input">
    </div>

    <div class="signup-field">
      <label class="signup-label">Last Name</label>
      <input type="text" name="lastname" class="signup-input">
    </div>

    <div class="signup-field">
     <label class="signup-label">Gender</label> 
     <select name="gender" class="signup-input">
       <option>Select</option>  
       <option value="Male">Male</option>
       <option value="Female">Female</option>
       <option value="Not to say">Not to say</option>
     </select>
    </div>

    <div class="signup-field">
      <label class="signup-label">Email</label>
      <input type="text" name="email" class="signup-input" required>
    </div>

    <div class="signup-field">
      <label class="signup-label">Password</label>
      <input type="password" name="password" class="signup-input" required>
    </div>

    <div class="signup-field">
      <label class="signup-label">Address</label>
      <textarea name="address" class="signup-input"></textarea>
    </div>   

    <input type="submit" value="Signup" class="signup-btn">

    <p class="signup-login-text">
      If already signed up, <a href="login.php" class="signup-login-link">Login</a>
    </p>
  </form>

  <footer class="site-footer">
    <div class="footer-work">Work: PHP_SESSION (checking by an email)</div>
    <div class="footer-dev">Developed by: Muhammad Shoaib</div>
  </footer>

</body>
</html>


