<?php
session_start();
// When Login Button Is Pressed or Login Form Is subbmited
if(isset($_POST['login'])){
  
  // Verify the incomming Data form FORM.
  //print_r($_POST);
  //die();
  // Get DB Connection Object
  include_once('dbconnect.php');
  //print_r($conn);

  // Prepare Data from user
  $username = $_POST['uname']; 
  $password = md5($_POST['pswd']);

  // Prepare Query
  $sql = "SELECT *
          FROM `login_tbl` 
          WHERE 
            `username` = '".$username."' AND 
            `password` = '".$password."' 
          ";
  
  // Query/Fetch Data =>  Database
  $result = $conn->query($sql);

  // print_r($result);

  // Checking and Verifying the result
  if ($result->num_rows == 1){
    $row = $result->fetch_assoc();
    //print_r($row);
    //die();
    $_SESSION['login_status'] = true;
    $_SESSION['login_message']="Login Sucessful";
    $_SESSION['login_user_data'] = $row;
    header("Location:index.php");
  }else{
    $_SESSION['login_status'] = false;
    $_SESSION['login_message']="Login Failed. Username or password is incorrect.";
    header("Location:index.php");
  }
}else{
  header("Location:index.php");
}