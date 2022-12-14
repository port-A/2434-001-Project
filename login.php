<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link  rel="stylesheet" href="style.css"> 
	
</head>
<body style="background-color:#0a73ab">
<?php include('./view/header.php');?>
	
  <div class ="p-div">
	<h1 class="h-posit"><strong>Login</strong></h1>
	
	<?php     if (isset($_GET['error'])) {
				if ($_GET['error']=="emptyfields1") {
					echo '<p class="err-msg">Fill in all fields</P>';
					}elseif($_GET['error']=="nouser"){
					echo '<p class="err-msg">No user found</P>';
					}else if($_GET['error']=="WrongPwd"){
					echo '<p class="err-msg">Invalid Password</P>';
					}else if($_GET['error']=="sqlerror"){
					echo '<p class="err-msg">Sql error</p>';
					}else if($_GET['error']=="sqlerror"){
					echo '<p class="err-msg">Sql error</p>';
					}else{
					echo '<p class="err-msg">Welcome</p>';
					}
			}
	?>
				<form class="f-posit" action="./includes/login.inc.php" method="post" >
				<p>Enter user name: <input type="text" name="mailuid" ></p><br>
				<p> Enter Password: <input type="password" name="pwd"></p><br>
				<button input type="submit" name="login-submit" class="btnlog">Login</button>
				</form>	
				<span class="span-log">Not Registered</span>
				<a class="log-signup" href="signup.php">SignUp</a>
    </div>
	

  
  <?php include('./view/footer.php');?>
  
  
	 
</body>

</html>