<?php
session_start();
include"database_connection.php";
$usernm = "";
$passwrd = "";
if(isset($_POST['create_account'])){
    //check if username and password are empty
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
      $_SESSION['error'] = "Username,email and Password required";
    }else{
      //save username and password in a variable
      $usernm =$_POST["username"];
      $passwrd =$_POST["password"];
      $email =$_POST["email"];
    }
    //inser into database usename,email,and passowrd
    $sql=$connect->query("insert into users(user_name,user_email,user_pass) values('$usernm','$email','$passwrd')");
    if($sql){
      //alert account created 
        echo "<script>alert('Account created successfully');</script>";
        // redirect to ../creatre_account.php
        echo "<script>window.location.href='../create_account.php';</script>";
    }
    else{
        $_SESSION["error"]= " User not found"; 
        
        echo "<script>alert('User not found');</script>";
        echo "<script>window.location.href='../create_account.php';</script>";
    }
}
?>