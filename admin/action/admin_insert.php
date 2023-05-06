<?php

include "database_connection.php";
if (isset($_POST["login"])) {
    $usernm =$_POST["user"];
    $maill =$_POST["mail"];
    $passwrd =$_POST["pass"];
    mysqli_query($connect,"INSERT INTO `admin`(`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES ('','$usernm','$maill','$passwrd')");
}
?>