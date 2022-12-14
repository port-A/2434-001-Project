<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="body-background-index">
	
<?php include('./view/header.php');?>

<section class="flex-index-i">

    <div>
        <h1 class="heading-index">Welcome to the Clouds</h1>
    </div>

    <div class="container-index">  
        <div class="slider-index"> 
            <img src="./images/sunset1.png"  class="img1">
            <img src="./images/steer1.jpg"   class="img2">
            <img src="./images/two1.jpg"     class="img3">
            <img src="./images/float1.jpg"   class="img4">
            <img src= "./images/sunset1.png" class="img5">
        </div> 
   </div>

   <div class="slogan">
        <h2 class="gradient heading-index">Parchuting Is Fun!&nbsp<h2>
   </div>

   <div class="gallery">
   <a href="./divergallery/slider.php"><i>Gallery</i></a>
   </div>


   <div class="navbar-index">
     <ul class="navul-index">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="package.php">Packages</a></li>
        <li><a href="signup.php">SignUp</a></li>
        <li><a href="contact.php">Contact</a></li>
     </ul>
  </div>
  <?php
  if(isset( $_SESSION['userName'])){
    echo '<p>'.$_SESSION['userName'].' '.'you are logged in</p>';
  }else{
    echo '<p>logged out</p>';
  }
    ?>
</section>
    
	<!-- <script src="./JS/appJS.js"></script> -->

  <?php include('./view/footer.php');?>
</body>
</html>
