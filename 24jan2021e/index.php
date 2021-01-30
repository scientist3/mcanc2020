<?php
  $basicArray = array("element 1", "element 2","element 1", "element 2",23, 45.44);
  /*
  print_r($basicArray);
  var_dump($basicArray);

  if(in_array(45.442,$basicArray)){
    echo "Found";
  }else{
    echo "Not Found";
  }
  // non zero value = true
  //zero or null = false;
  */

  // return total number of elements
 // echo count($basicArray);

  /* 
  $assoArray =  array(
                      "key1" => "value1",
                      "key2" => "value2"
                    );
  print_r( array_keys($assoArray));
  
  */
  /*
  echo "<br>Original array: ";
  print_r($basicArray);
  // Push some element
  array_push($basicArray,"Added Arrary element");
  array_push($basicArray,1000);
  
  echo "<br>After Push Operation: ";
  
  print_r($basicArray);
  // Pop operation


  array_pop($basicArray);

  echo "<br>Pop Operation: ";
                    
  print_r($basicArray);
  */

  // Convert variable to array
  $intVal = 10;
  $y = 20;
  $z = "sting variable";
  $newArray = compact('intVal','y','z');

  //print_r($newArray);

  // array into variables

  $assoArray =  array(
    "key1" => "value1 sdjfhjsdhfkjh",
    "key2" => "value2"
  );

  extract($assoArray);
  
  echo "Key1 value : ".$key1;



?>