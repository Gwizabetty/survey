
<?php include_once './includes/header.php'; ?>
   
<?php
include"database_connection.php";
$usernm = "";
$passwrd = "";
if(isset($_POST['login'])){
    //check if username and password are empty
    if(empty($_POST['username']) || empty($_POST['password'])){
      $_SESSION['error'] = "Username and Password required";
    }else{
      //save username and password in a variable
      $usernm =$_POST["username"];
      $passwrd =$_POST["password"];
    }
    $sql=$connect->query("select * from admin where admin_name='$usernm'");
    if(mysqli_num_rows($sql)>0){
      $data=mysqli_fetch_array($sql);
      if($passwrd==$data['admin_pass']){
        $_SESSION['admin_id'] = $data['admin_id'];
        $_SESSION['admin_name'] = $data['admin_name'];
        //redirect to admin dashboard
        echo "<script>window.location.href='survey_info.php';</script>";
        
      }
      else{
          $_SESSION['error'] = "Incorrect pass";
      }
    }
    else{
        $_SESSION["error"]= " User not found"; 
    }
}
?>
<div class="d-flex justify-content-center align-items-center" style="height: 80vh">
     <!-- login form -->
     <div class="container mt-5 w-25 shadow p-4 rounded">
        <form method="post" action="#" class="d-flex flex-column" novalidate>

          <div align="center">
            <!-- admin login message -->
            <h3 class="text-primary">Create account</h3>
          </div>
          <hr>        
          <!-- include error messages -->
          <?php include 'messages.php'; ?>
          <div class="">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user" aria-hidden="true"></i></span>
              <input name="username" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>

          <div class="">
              <label for="validationCustomUsername" class="form-label">Password</label>
              <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <input name="password" type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
          
          <div class="mt-3">
            <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
          </div>
        </form>
    </div>

   </div>
   <?php include_once './includes/footer.php'; ?>