<?php
 if(isset($_POST["login-submit"])){

    require 'connect.php';
   
    $username=$_POST["mailuid"];
    $pwd=$_POST["pwd"];
    echo 'getting logged in';

    if(empty($username) || empty($pwd)){
        header("Location: ../login.php?error=emptyfields1&$username");
        exit();
    }
    else{
        $sql="SELECT * FROM fall2022 WHERE username=?;";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){

               $pwdcheck=password_verify($pwd,$row['password']);
                if($pwdcheck == false){
                    header("Location: ../login.php?error=WrongPwd");
                    exit();
                }
                else if($pwdcheck == true){
                    session_start();
                    $_SESSION['userid']=$row['ID'];
                    $_SESSION['userName']=$row['username'];
                    header("Location: ../response.php?login=Success");
                    exit();
                }
                else
                {
                    header("Location: ../index.php?error=wrongPwd");
                    exit();
                }
            }
            else
            {
                header("Location: ../login.php?error=nouser");
                exit();
            }
        }

    }
}
else
{
    header("Location: ../index.php");
    exit();
}
?>