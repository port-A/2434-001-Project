<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link href="style.css" rel="stylesheet" >
   
</head>
<body  style="background-color:#0a73ab">
<?php include('./view/header.php');?>

    
   <main class="registration-container">
       
    <div class ="registration-form">
    <br><br><br>
	    <h1><strong>Registration Form</strong></h1>
        <?php
            if (isset($_GET['error'])) {
               if ($_GET['error']=="emptyfields") {
                echo '<p style="color:red">Fill in all fields</P>';
               }else if($_GET['error']=="passwordNoMatch"){
                echo '<p style="color:red">Passwords do not match</P>';
               }else if($_GET['error']=="usertaken"){
                echo '<p style="color:red"> User already registered</p>';
               }else if($_GET['error']=="sqlerror"){
                echo '<p style="color:red">Sql error</p>';
               }
            }
        ?>
	  <form  class="form-signup" action="./includes/signup.inc.php" method="post" >
	    <p>Enter user name:</p> 
        <input type="text" id="uname" name="userName" class="signupinput">
	    <p> Enter Password:</p>
        <input type="password" id="pword" name="userPword" class="signupinput" >
        <p> Re-Enter Password:</p>
        <input type="password" id="pword-repeat" name="re-userPword" class="signupinput"><br>
	    <button type="submit" name="signup-submit">Registration</button>
	  </form>
      
     
   </div>
   
    </main>
   
    <?php include('./view/footer.php');?>
    
</body>
</html>