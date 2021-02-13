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
  <?php if( isset( $_SESSION['login_status'] )) {?>
  <div class="card-footer text-white text-center
    <?php echo !$_SESSION['login_status']? 'bg-danger' : 'bg-success'; ?>">
    <?php 
        if($_SESSION['login_status'] == false ) {
          echo $_SESSION['login_message'];
        }
    ?>
  </div>
  <?php }?>
</div>