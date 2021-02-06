<div class="card ttext-white bbg-info">
  <div class="card-header"><h2 class="text-center">Login Form</h2></div>
  <div class="card-body">
    <form action="processdata.php" method="post" class="was-validatedd" autocomplete="off">
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required autofocus>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please enter your username.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-dark float-right" name="login">Login</button>
    </form>
  </div>
  <div class="card-footer bg-success
    <?php echo ($_SESSION['error']) ? 'danger' : 'success'; ?>">
    <?php
      if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
      }
    ?>
  </div>
</div>
<script>
  // 1: bootstrap
  // 2: html5
  // 3: js validationn
  // 4: Server validation
</script>