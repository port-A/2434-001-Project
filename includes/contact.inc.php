<?php 

   if(isset($_POST['contact-submit'])){
   
    require 'connect.php';
    $name=$_POST['cntName'];
    $email=$_POST['cntEmail'];
    $skill=$_POST['skill'];
    echo $skill;
    
    if(empty($name) || empty($email)){
        header("Location: ../contact.php?error=emptyfields");
        exit();
    }elseif(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
        header("Location: ../contact.php?error=emailinvalid");
        exit();
    }elseif(empty($skill)){
        header("Location: ../contact.php?error=skillnotselected");
        exit();
    }else{
        $sql="INSERT INTO contact(name,email,skillset) VALUES(?,?,?)";
        $stmt=mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,'sss',$name,$email,$skill);
        mysqli_stmt_execute($stmt);
        header("Location: ../confirmcontact.php?success=contactentered");
        exit();
    }
        
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  
}else{
    header("Location: ../contact.php?warning=contactnotentered");
    exit();
}