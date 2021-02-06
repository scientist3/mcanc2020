<div class="card ttext-white bbg-success">
  <div class="card-header"><h2 class="text-center">Sign Up Form</h2></div>
  <div class="card-body">
    <form action="processdata.php" class="was-validatedd"  autocomplete="off">
      <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="uname">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>

      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
      </div>
      <button type="submit" class="btn btn-dark float-right" name="signup">Sign Up</button>
    </form>
  </div>
</div>
