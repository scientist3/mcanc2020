<?php
session_start();
// When Login Button Is Pressed or Login Form Is subbmited
if(isset($_POST['signup'])){
  
  // Verify the incomming Data form FORM.
  // print_r($_POST);
  // die();
  // Get DB Connection Object
  include_once('dbconnect.php');
  //print_r($conn);

  // Prepare Data from user
  $fname = $_POST['fname']; 
  $lname = $_POST['lname']; 
  $username = $_POST['uname']; 
  $password = md5($_POST['pswd']);

  // Prepare Query
  $sql = "INSERT 
          INTO `login_tbl` 
                  (`id`, `fname`, `lname`, `username`, `password`, `status`) 
          VALUES (NULL, '".$fname."', '".$lname."', '".$username."', '".$password."', '1')";
  
  // Query/Fetch Data =>  Database
  $result = $conn->query($sql);

  // print_r($result);
  if ($conn->query($sql) === TRUE) {
    $_SESSION['signup_status']= 1;
    $_SESSION['signup_msg']= "Sign Up successfully. Please Login";
  }else{
    $_SESSION['signup_status']= 0;
    $_SESSION['signup_msg']= "Sign Up Failed";
  }
  header("Location:index.php");
}else{
  header("Location:index.php");
}