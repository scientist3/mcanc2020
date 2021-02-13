<?php
  session_start();
  
  if( isset( $_SESSION['login_status'] ) && $_SESSION['login_status'] == true ) {
    
    include('dashboard.php');
    include('clear_session.php');
  }else{
    include('header.php');
    include('login_signup_form.php');
    include('footer.php');
    include('clear_session.php');
  } 