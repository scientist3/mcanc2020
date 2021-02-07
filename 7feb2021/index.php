<?php
  session_start();
  
  // Include Header
  include('header.php');
  if(isset($_SESSION['login_status']))
  {
    if($_SESSION['login_status']== true){
      include('dashboard.php');
      //echo "Dashboard";
    }else{
      include('form.php');
    }

  }else{
    include('form.php');
  }
  include('footer.php');