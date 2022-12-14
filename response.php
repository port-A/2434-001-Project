
<?php include_once "includes/connect.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>Response Assignment 1</title>

	<link rel="stylesheet" href="style.css">
</head>
<body class="rbody">
		
<?php include('./view/header.php');?>
<div class='tablecontainer'>
<table>
	<caption>Registered Skydivers</caption>
	<tr>
		<th>ID</th>
		<th>Name</th>
	</tr>
		<?php
			$sql="SELECT * FROM fall2022;";
			$results=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($results);
			if($resultcheck > 0){
				while($row = mysqli_fetch_assoc($results)){
					
			      echo '<tr>
						  <td>'.$row['ID'].'</td>
						  <td>'.$row['username'].'</td>
					    </tr>'; 
					
				}
			}
		?>
		   <?php
				if(isset( $_SESSION['userName'])){
					echo '<p class="presponse">Welcome '.$_SESSION['userName'].' '.'you are logged in</p>';
				}
    	    ?>
		
			
		</table>
	</div>	


		<?php include('./view/footer.php');?>
</body>
</html>

