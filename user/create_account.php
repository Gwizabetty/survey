<?php include_once './includes/header.php'; ?>
   <div class="d-flex justify-content-center align-items-center" style="height: 80vh">
     <!-- login form -->
     <div class="container mt-5 w-25 shadow p-4 rounded">
        <form method="post" action="action/create_account.php" class="d-flex flex-column" novalidate>

          <div>
            <!-- admin login message -->
            <h3 class="text-primary">Create Account</h3>
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
              <label for="validationCustomUsername" class="form-label">Email</label>
              <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <input name="email" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose an email.
              </div>
            </div>
          </div>
          
          <div class="">
              <label for="validationCustomUsername" class="form-label">Password</label>
              <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  <input name="password" type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Please choose a password.
              </div>
            </div>
          </div>
          <div class="mt-3">
            <button class="btn btn-primary w-100" type="submit" name="create_account">Create</button>
          </div>
        </form>
    </div>

   </div>
   <?php include_once './includes/footer.php'; ?>