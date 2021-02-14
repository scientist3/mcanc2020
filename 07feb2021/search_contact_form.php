<div class="card mb-2 bg-infotext-white">
    <div class="card-header text-center"><h5>Search Contact<h5></div>
    <div class="card-body"> <!-- action="searchContactData.php"-->
      <form class="form-inline form-row wwas-validated"  method="post" onkeydown="return event.key != 'Enter';">
        <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter name or number" id="search" name="search" required>
        <button type="button" class="btn btn-primary mb-2 col-sm-2" id="search_contact" name="search_contact">
          <span class="spinner-border spinner-border-sm d-none" id="spinner"></span>
          Search
        </button>
      </form>
    </div>
    <!-- <div class="card-footer"></div> -->
  </div>

<script>
  $(document).ready(function(){
    // Search Request
    $("#search_contact").click(
      function(){
        // Jquery AJAX Request
        $.post("searchContactData.php",
        {
          keyword: $('#search').val(),
          search_contact: true
        },
        function(data,status){
          $("#spinner").removeClass("d-none");
          $('#contact_list').html(data);
          //console.log($('#contact_list').html(data));
          // console.log(data);
          // console.log(status);
          //alert("Data: " + data + "\nStatus: " + status);
        });
      }
    );

  });
</script>