<div class="container">
  <nav class="navbar navbar-expand-sm bg-light">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>

  </nav>

  <div class="jumbotron">
    <h1 class="text-center">Contact Directory</h1>
    <p class="text-center">Developed by universit of kashmir students North Campus</p>
  </div>
  <?php if(isset($_SESSION['v_status']) && $_SESSION['v_status']== false){ ?>
    <div class="alert alert-danger alert-dismissible">
      <strong>Failed!</strong> <?php echo $_SESSION['v_msg']; ?>.
    </div>
  <?php } ?>
  <?php if(isset($_SESSION['insert_status']) && $_SESSION['insert_status']== true){ ?>
    <div class="alert alert-success alert-dismissible">
      <strong>Success!</strong> <?php echo $_SESSION['insert_msg']; ?>.
    </div>
  <?php } ?>

  <?php if(isset($_SESSION['insert_status']) && $_SESSION['insert_status']== false){ ?>
    <div class="alert alert-danger alert-dismissible">
      <strong>Failed!</strong> <?php echo $_SESSION['insert_msg']; ?>.
    </div>
  <?php } ?>
  <div class="card">
    <div class="card-body">
      <form class="form-inline" action="saveContactData.php" method="post">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="name" name="name">
        <label for="mobile">Mobile Number:</label>
        <input type="text" class="form-control" placeholder="Enter Phone Number" id="mobile" name="mobile">
        <button type="submit" class="btn btn-primary" name="save_contact">Save</button>
      </form>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
          </tr>
        </thead>
        <tbody>
          <?php include('getContactData.php'); ?>
        </tbody>
      </table>
    </div>
  </div>




</div>


<!-- <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table> -->