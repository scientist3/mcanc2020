<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  $_SESSION['db_status']= false;
  $_SESSION['db_msg'] = "Connection failed";
  $_SESSION['db_error'] = $conn->connect_error;
  die("Connection failed: " . $conn->connect_error. "<br>");
}else{
  //echo "Sucessfully connected to database server <br>";
  $_SESSION['db_status']= true;
  $_SESSION['db_msg'] = "Connection Sucessful Database";
  $_SESSION['db_error'] = "";
}
