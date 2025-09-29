<?php
session_start();

// redirect if not logged in
$userprofile = $_SESSION['email'];
if($userprofile == true)
{

}
else
{
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Main Page</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body class="main-body">

    <div class="container">
        <header class="page-header">
            <h1 class="main-heading">Welcome to the Main Page</h1>
        </header>

        <section class="user-info">
            <p class="greeting-text">
                Hello, <b><?php echo htmlspecialchars($_SESSION['email']); ?></b>!
            </p>
            <p class="logout-section">
                <a href="logout.php" class="logout-button">Logout</a>
            </p>
        </section>
    </div>

    <footer class="site-footer">
        <div class="footer-work">Work: PHP_SESSION (checking by an email)</div>
        <div class="footer-dev">Developed by: Muhammad Shoaib</div>
    </footer>

</body>
</html>

