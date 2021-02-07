<div class="card ttext-white bbg-info">
  <div class="card-header"><h2 class="text-center">Login Form</h2></div>
  <div class="card-body">
    <form action="processlogin.php" method="post" class="was-validatedd" autocomplete="off">
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required autofocus>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter your username.</div>
      </div>
      <div class="form-group">
        <label for="pswd">Password:</label>
        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-dark float-right" name="login">Login</button>
    </form>
  </div>
  <div class="card-footer bg-success
    <?php echo (isset($_SESSION['login_status'])? $_SESSION['login_status']:false) ? 'danger' : 'success'; ?>">
    <?php
      print_r($_SESSION);
      if(isset($_SESSION['login_status'])){
        if($_SESSION['login_status'] == false)
          echo $_SESSION['login_message'];
      }
    ?>
  </div>
</div>