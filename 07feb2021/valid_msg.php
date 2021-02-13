  <?php if(isset($_SESSION['v_status']) && $_SESSION['v_status']== false){ ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Failed!</strong> <?php echo $_SESSION['v_msg']; ?>.
    </div>
  <?php } ?>

  <?php if(isset($_SESSION['insert_status']) && $_SESSION['insert_status']== true){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> <?php echo $_SESSION['insert_msg']; ?>.
    </div>
  <?php } ?>

  <?php if(isset($_SESSION['insert_status']) && $_SESSION['insert_status']== false){ ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Failed!</strong> <?php echo $_SESSION['insert_msg']; ?>.
    </div>
  <?php } ?>

  <?php if(isset($_SESSION['update_status']) && $_SESSION['update_status']== true){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> <?php echo $_SESSION['update_msg']; ?>.
    </div>
  <?php } ?>


<?php if(isset($_SESSION['delete_status']) && $_SESSION['delete_status']== true){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Success!</strong> <?php echo $_SESSION['delete_msg']; ?>.
    </div>
  <?php } ?>



















  <!--     <script>
  // swal ( "Oops" ,  "Something went wrong!" ,  "error" );

  swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
  });
</script> -->