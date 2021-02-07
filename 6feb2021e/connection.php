<?php
$servername = "localhost";
//$servername = "127.0.0.1";
$username = "root";
$password = "";
//$database = "students";

// Create connection
$conn = new mysqli($servername, $username, $password);
//$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Sucessfully connected to database server<br>";
}












/*
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  */