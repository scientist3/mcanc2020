<?php
session_start();
// When Save Button Is Pressed
if(isset($_POST['save_contact'])){
  
  // Verify the incomming Data form FORM.
  // print_r($_POST);
  // die();
  // Get DB Connection Object
  include_once('dbconnect.php');
  //print_r($conn);

  // Prepare Data from user
  $cname = $_POST['name']; 
  $cmobile = $_POST['mobile'];

  $_SESSION['v_status'] = true;
  $_SESSION['v_msg'] = null;

  /// Validation Section
  if(empty($cname)){
    $_SESSION['v_status'] = false;
    $_SESSION['v_msg'] = "Please Enter Your name";
  }

  if(empty($cmobile)){
    $_SESSION['v_status'] = false;
    $_SESSION['v_msg'] = "Please Enter Your mobile";
  }

  if($_SESSION['v_status']== true){
    // Prepare Query
    $sql = "INSERT INTO `contact` 
                (`id`, `name`, `mobile`, `doc`, `dou`, `status`) 
          VALUES (NULL, '".$cname."', '".$cmobile."', current_timestamp(), NULL, '1')";
    
    if ($conn->query($sql) === TRUE) {
      $_SESSION['insert_status']= true;
      $_SESSION['insert_msg']= "New record created successfully";
    }else{
      $_SESSION['insert_status']= false;
      $_SESSION['insert_msg']= "Error Inserting Data.";
    }
  }
  header("Location:index.php");
}else{
  header("Location:index.php");
}