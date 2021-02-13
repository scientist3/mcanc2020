  <div class="card mb-2 bg-infotext-white">
    <div class="card-header text-center"><h5>Add Contact To Database Table<h5></div>
    <div class="card-body">
      <form class="form-inline form-row was-validated" action="saveContactData.php" method="post">
        <!-- <label for="name" class="mb-2 mr-sm-2 col-sm-2">Name:</label> -->
        <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter Contact Name" id="name" name="name" required>
        <!-- <label for="mobile" class="mb-2 mr-sm-2 col-sm-2">Mobile Number:</label> -->
        <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter Phone Number" id="mobile" name="mobile" required>
        <button type="submit" class="btn btn-primary mb-2 col-sm-2" name="save_contact">Save</button>
      </form>
    </div>
    <!-- <div class="card-footer"></div> -->
  </div>