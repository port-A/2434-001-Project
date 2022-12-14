<?php

if(isset($_POST['signup-submit'])){
               require 'connect.php';
               $username=$_POST['userName'];
               $password=$_POST['userPword'];
               $pwdrepeat=$_POST['re-userPword'];
               
     if( empty($username) || empty($password) || empty($pwdrepeat) ){
          
          header("Location: ../signup.php?error=emptyfields&userName=".$username);
          exit();
     }elseif ($password!==$pwdrepeat) {
          header("Location: ../signup.php?error=passwordNoMatch&userName=".$username);
          exit();
     }else{

          $sql="SELECT username FROM fall2022 where username = ? ";
          $stmt=mysqli_stmt_init($conn);

          if(!mysqli_stmt_prepare($stmt,$sql)){
               header("Location: ../signup.php?error=sqlerror1");
               exit();
          }else{

               mysqli_stmt_bind_param($stmt,"s",$username);
               mysqli_stmt_execute($stmt);
               mysqli_stmt_store_result($stmt);

               $resultcheck=mysqli_stmt_num_rows($stmt);
               if($resultcheck>0){
                    header("Location: ../signup.php?error=usertaken");
                    exit();
               }else{

                    $sql="INSERT INTO fall2022(username,password) VALUES(?,?)";
                    $stmt=mysqli_stmt_init($conn);

                    if(!mysqli_stmt_prepare($stmt,$sql)){
                         header("Location: ../signup.php?error=sqlerror2");
                         exit();

                    }else{

                         $hashedpw=password_hash($password, PASSWORD_DEFAULT);

                         mysqli_stmt_bind_param($stmt,"ss",$username,$hashedpw);
                         mysqli_stmt_execute($stmt);
                         header("Location: ../login.php?signup=success");
                         exit();
                    }
               }

          }
     }
     mysqli_stmt_close($stmt);
     msqli_close($conn);
}else{
     header("Location: ../signup.php");
     exit();
}
?>