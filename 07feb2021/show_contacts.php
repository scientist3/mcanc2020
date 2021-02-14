<div class="card mb-2 bg-dark text-white">
    <div class="card-header text-center"><h5>Contacts List<h5></div>
    <div class="card-body p-0">
      <table class="table table-dark table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="contact_list">
          <?php include('getContactData.php'); ?>
        </tbody>
      </table>
    </div>
  </div>