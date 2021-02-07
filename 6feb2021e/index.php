<?php
  // Connection Established Or Die 
  include_once('connection.php');
  //include_once('operations.php');

  // To Create database
  //include_once('createdb.php');

  // To select Database
  include_once('selectdb.php');

  // To Create Table
  include_once('createdb.php');

  /*
  
  // Connection Object (Functions Or properties)
  $conn;


  // Select database
  $conn->select_db("students");

  // To execute SQL Command
  //$conn->query("SQL COMMANDS");

  // Execute Commands= SQL Commands alternate way with verification
  
  $sql = "";

  if ($conn->query($sql) === TRUE) {
    echo "Sucessfull";
  }else{
    echo "Failed";
  }
*/
  // Close The connection
  $conn->close();
?>