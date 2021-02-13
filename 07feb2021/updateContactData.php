<?php
session_start();
// When Save Button Is Pressed
if(isset($_POST['update_contact'])){
  
  // Verify the incomming Data form FORM.
  // print_r($_POST);
  // die();
  // Get DB Connection Object
  include_once('dbconnect.php');
  //print_r($conn);

  // Prepare Data from user
  $cid = $_POST['id']; 
  $cname = $_POST['name']; 
  $cmobile = $_POST['mobile'];
  //$cstatus = $_POST['status'];

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
  // `status`  = '".$cstatus."',
  if($_SESSION['v_status']== true){
    // Prepare Query
    $sql = "UPDATE `contact` 
            SET `name`    = '".$cname."',
                `mobile`  = '".$cmobile."',
                    
                `dou`     = CURRENT_DATE() 
            WHERE `contact`.`id` = ".$cid;

    if ($conn->query($sql) === TRUE) {
      $_SESSION['update_status']= true;
      $_SESSION['update_msg']= "Record Updated successfully";
    }else{
      $_SESSION['update_status']= false;
      $_SESSION['update_msg']= "Error Updating Data.";
    }
  }
  header("Location:index.php");
}else{
  header("Location:index.php");
}