<?php
  include('header.php');
  include('navbar.php'); 
  include('carousel.php'); 
  include('valid_msg.php'); 
?>

<div class="card mb-2 bg-infotext-white">
    <div class="card-header text-center"><h5>Update Contact To Database Table<h5></div>
    <div class="card-body">
      <form class="form-inline form-row was-validated" action="updateContactData.php" method="post">
        <!-- <label for="name" class="mb-2 mr-sm-2 col-sm-2">Name:</label> -->
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
        <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter Contact Name" id="name" name="name" value="<?php echo $_GET['name'];?>" required>
        <!-- <label for="mobile" class="mb-2 mr-sm-2 col-sm-2">Mobile Number:</label> -->
        <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter Phone Number" id="mobile" name="mobile" value="<?php echo $_GET['mobile'];?>" required>
        <button type="submit" class="btn btn-primary mb-2 col-sm-2" name="update_contact">Update</button>
      </form>
    </div>
    <!-- <div class="card-footer"></div> -->
  </div>


<?php 
  include('show_contacts.php');
  include('footer.php');
?>





<?php

// echo "Id is : ".$_GET['id'];
// echo "name is : ".$_GET['name'];
// echo "mobile is : ".$_GET['mobile'];