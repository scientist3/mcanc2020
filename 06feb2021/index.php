<?php
echo "COOKIE: <br>";

//print_r($_COOKIE);
if(isset($_COOKIE['v_name'])){
  echo "Cookie is already set.";
}else{
  setcookie("v_name", 'Umer', time()+3600);
  echo "Cookie Created";

}
//print_r($_COOKIE);

echo "Your name is : " . $_COOKIE['v_name'];


//setcookie("v_name", "", time() - 3600);