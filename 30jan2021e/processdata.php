<?php
session_start();
//print_r($_GET);
//print_r($_POST);
$dataFromDatabase = array(
   "uname" => "fazil",
   "pass" => "1234" 
);

$uname = validate($_POST["uname"]);
$pswd = validate($_POST["pswd"]);


// echo "Your Username : ".$uname;
// echo "Your Password : ".$pswd;

if($uname == $dataFromDatabase["uname"] && 
  $pswd == $dataFromDatabase['pass']){
   //echo "Login Sucessfull.";
  $_SESSION['message'] = "Login Sucessfull.";
  $_SESSION['error'] = false;

  header("Location:dashboard.php");

}else{
  //echo "Login Failed.";
  $_SESSION['message'] = "Login Failed/ Username or password is incorrect." ;
  $_SESSION['error'] = true;

  header("Location:index.php");
}

//header("Location:index.php");

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}