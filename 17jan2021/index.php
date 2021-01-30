<?php
  /*
  echo "Output of While Loop<br>";
  echo "------------------------------<br>";
  $varI = 0;
  // Output : 0 - 10

  while($varI<=10){
    echo $varI."<br>";
    $varI++;
  }
  
  //$newVal = $varI++; // Post Increment
  // $newVal = ++$varI; // Pre Increment
  
  echo "------------------------------<br>";
  echo "Output of Do While Loop<br>";

  // var Init
  $doWhileVar = 10;
  
  do{
    echo $doWhileVar."<br>";
    // Updation
    $doWhileVar -= 1;
  }while($doWhileVar>=0); // Check

  echo "------------------------------<br>";
  echo "Output of For Loop<br>";

  // Even
  for (
        $forLoopVar=2; // Init
        $forLoopVar < 20 ; // Check/ Cond
        $forLoopVar += 2 // Updation
      ) { 
        echo $forLoopVar."<br>";
      }

  // Example of infinite loop.
  // for(;true;){
  //   echo "Hi";
  // }
  */
  $arrayVar  = [12,23,45,78];
  $arrayVar1 = array("H","ELL","O");

  // to traverse the array we have 

          // Arra as index => $variable
  foreach ($arrayVar as $value) {
    echo $value."<br>";
  }
  echo "<br>";
  // varient
  foreach ($arrayVar as $key => $value) {
    echo "Key[".$key."] : ".$value."<br>";
  }

  foreach($arrayVar1 as $value){
    echo $value;
  }

  $x = 5;
  $y = "10";

  var_dump($x);
  var_dump($y);
?>