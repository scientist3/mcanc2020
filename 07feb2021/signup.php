<div class="card ttext-white bbg-info">
  <div class="card-header"><h2 class="text-center">Sign Up Form</h2></div>
  <div class="card-body">
    <form action="processsignup.php" method="post" class="was-validatedd" autocomplete="off">
      <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter your first name.</div>
      </div>
      <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" >
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter your last name.</div>
      </div>
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
      <button type="submit" class="btn btn-dark float-right" name="signup">Sign Up</button>
    </form>
  </div>
  <?php if( isset( $_SESSION['signup_status'] )) {?>
  <div class="card-footer text-white text-center
    <?php echo !$_SESSION['signup_status']? 'bg-danger' : 'bg-success'; ?>">
    <?php 
        //print_r($_SESSION);
        //if($_SESSION['signup_status'] == false ) {
          echo $_SESSION['signup_msg'];
        //}
    ?>
  </div>
  <?php }?>
</div>