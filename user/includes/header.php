<?php 
session_start();
// if(isset($_SESSION['user'])) {
//     return header('location: /project/dashboard/index.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey project</title>
    <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    /* Styling the Body  */
    body {
        background-color: antiquewhite;
        font-family: Verdana;
        text-align: center;
    }

    /* Styling the Form (Color, Padding, Shadow) */
    form {
        background-color: #fff;
        padding: 30px 20px;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }

    </style>
</head>
<!-- 
<body>
    <div class="menu-bar">
        <div class="menu-item">
            <a href="#" class="active">Home</a>
        </div>
        <div class="menu-item">
            <a href="survey_info.php">Surveys</a>
        </div>
        <div class="menu-item">
            <a href="#">Survey Results</a>
        </div>
        <div class="menu-item">
            <a href="#">Contact</a>
        </div>
    </div><br><br> -->

    <!-- header -->
<?php if (1==2){?>
<nav class="bg-light p-3">
    <div class="d-flex justify-content-between">
        <div>
            <h3>SURVEY System</h3>
        </div>
        <div>
            <?php if (!isset($_SESSION['admin_id'])) : ?>
                <a class="text-decoration-none mx-4" href="./index.php"></a>
                <!-- Logout Button -->
                <button class="btn btn-primary" onclick="window.location.href='./index.php'">
                <i class="fa fa-sign-out"></i>
                    Login
                </button>
                <!-- <a class="text-decoration-none mx-4" href="register.php">Register</a> -->
            <?php else : ?>
                <div class="d-flex">
                <p class="mx-4">Working As : <?php print $_SESSION['admin_name']; ?></p>
                <!-- Logout Button -->
                <button class="btn btn-danger" onclick="window.location.href='./logout.php'">
                <i class="fa fa-sign-out"></i>
                    Logout
                </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>
<?php } ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Survey System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        //check if admin_id session is set, if not then show login button
        if (isset($_SESSION['user_id'])) {
        ?>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" aria-current="page" href="./dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="./survey_info.php">Survey Information</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="#">Survey Results</a>
        </li>
      </ul>
      <?php } ?>
      <ul class="navbar-nav ms-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Username
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li> -->
        
        <?php if (!isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
                <!-- Logout Button -->
                <button class="btn btn-primary" onclick="window.location.href='./index.php'">
                <i class="fa fa-sign-out"></i>
                    Login
                </button>
            </li>
                <!-- <a class="text-decoration-none mx-4" href="register.php">Register</a> -->
            <?php else : ?>
                <li class="nav-item mx-4">
                Working As : <?php print $_SESSION['user_name']; ?>
            </li>
            <li class="nav-item">
                <!-- Logout Button -->
                <button class="btn btn-danger" onclick="window.location.href='./logout.php'">
                <i class="fa fa-sign-out"></i>
                    Logout
                </button>
                </li>
            <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<br><br>