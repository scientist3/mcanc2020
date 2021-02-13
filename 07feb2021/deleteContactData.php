<?php
session_start();
include('clear_session.php');
// When Save Button Is Pressed
if(isset($_GET['id'])){
  
  // Verify the incomming Data form FORM.
  // print_r($_GET);
  // die();
  // Get DB Connection Object
  include_once('dbconnect.php');
  //print_r($conn);

  // Prepare Data from user
  $cid = $_GET['id'];

  // Prepare Query
  $sql = "DELETE FROM `contact` 
          WHERE `contact`.`id` =".$cid;
 
  if ($conn->query($sql) === TRUE) {
    $_SESSION['delete_status']= true;
    $_SESSION['delete_msg']= "Record Deleted successfully";
  }else{
    $_SESSION['delete_status']= false;
    $_SESSION['delete_msg']= "Error Deleting Data.";
  }
  header("Location:index.php");
}else{
  header("Location:index.php");
}