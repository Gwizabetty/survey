<?php

include "database_connection.php";
if (isset($_POST["submit"])) {
    $usernm =$_POST["user"];
    $tele =$_POST["tel"];
    $maill =$_POST["mail"];
    $passwrd =$_POST["pass"];
    $sql= mysqli_query($connect,"INSERT INTO `users`(`user_id`, `user_name`, `user_tel`, `user_email`, `user_pass`) VALUES ('','$usernm','$tele','$maill','$passwrd')");
    // if($sql) {
    //   echo "inserted";  
    // }
    // else{
    //     echo " not inserted"; 
    // }
    header("location:user_login.php");
    

}
?>