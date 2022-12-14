<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stlesheet" href="style.css">
   
</head>
<body style="background-color:#0a73ab">
    <?php include('./view/header.php');?>
    <?php
            if (isset($_GET['error'])) {
               if ($_GET['error']=="emptyfields") {
                echo '<p class="err-contact" style="color:red">Fill in all fields</P>';
               }else if($_GET['error']=="emailinvalid"){
                echo '<p class="err-contact" style="color:red">Email format invalid</P>';
               }elseif($_GET['error']=="skillnotselected"){
                echo '<p class="err-contact" style="color:red">Select skill level</P>';
               }
            }
        ?>

 
       <div class ="contact-form">
        
	        <h1>Contact Information</h1><br><br>
            <form  class="form-signup" action="includes/contact.inc.php" method="post" >
            Enter user name: 
            <input class="iput-c" type="text" id="uname" name="cntName" ><br><br>
            Enter user  email:
            <input  class="iput-c" type="text" id="uemail" name="cntEmail" >

            <div class="skill">Skill Level</div>

            <input class="rb" type="radio" id="rdbInterest" name="skill" value="Beginner"><span class="rb-skill">Beginner</span>
            &nbsp<input class="rb" type="radio" id="rdbInterest" name="skill" value="Intermidiate"><span class="rb-skill">Intermidiate</span> 
            &nbsp<input class="rb" type="radio" id="rdbInterest" name="skill" value="Warrior"><span class="rb-skill">Warrior</span>  <br>

            <button class="subbtn-c"  type="submit" name="contact-submit">Contact</button>
            </form>
     </div>

   
  
    
     <?php include('./view/footer.php');?>
    
</body>
</html>