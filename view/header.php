
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project Index</title>
    <link href="style.css" rel="stylesheet">
   
</head>
<body class="bodyheader">

    <header>
       
            <div class="logo">
                <img src="view\logo.png" alt="logo">
                <p style="color:maroon;">Cloud Parachuting</p>
            </div>
            <nav class="h-links">  
                <ul >
                    <li><a href="index.php">Home</a>
                    <li><a href="package.php">Packages</a>
                    <li><a href="about.php">About</a>
                    <li><a href="contact.php">Contact</a>
                </ul>
            </nav>
            <?php
            if(isset( $_SESSION['userName'])){
                    echo '<form action="includes/logout.inc.php" method="post" class="hform">
                      <button type="submit" name="logout-submit" >LogOut</button>
                      </form>';
            }else{
                     echo '<form action="./includes/login.inc.php" method="post" class="hform">
                      <input  type="text" name="mailuid" placeholder="User Name">
                      <input   type="password" name="pwd" placeholder="Password" >
                      <button type="submit" name="login-submit">Login</button>
                      <a href="signup.php" class="ah-tag">SignUp</a>
                      </form>';
            }
                ?>
    </header>
   
</body>
</html>