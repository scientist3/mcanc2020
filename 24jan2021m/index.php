<?php
declare(strict_types = 1);
$strVar = "wertyu 1234567 !@#$%^&*(";

//echo $strVar;

// Function on strings
// length of a string

/*
echo "<br>";
echo strlen($strVar);

echo "<br>";
echo strlen("Fazil");

echo "<br> Word count: ";
echo str_word_count("hedhfdsllo world hey their");

echo "<br> Word Reverse: ";
echo strrev("Hello world!");

$str = "123.456.789.000";
var_dump( str_split("Hello world",1));

$x= 10;
*/
// Fucntions
// array
// loop
// ==

/*
function mystrsplit($str,$splitChar){
  $indValArr = str_split($str,1);
  $newArr = array();
  $index = 0;
  foreach($indValArr as $char){
    if($char==$splitChar){
      $index++;
    }else{
      $newArr[$index] = $newArr[$index].$char;
    }
  }  
  return $newArr;
}

print_r(mystrsplit("hello wor ld","o"));
*/

// Array functions

// Defining array
// types - indexed , associative , multi dimentional

$newArr =  [2,4,6,8];
$arrnew = array(1,3,5,7);

//var_dump($newArr);


// Associative
$oneMoreArrAsso = array( 'name' => 'Fazil',
                    'phoneno' => '9797451278'
);

//var_dump($oneMoreArrAsso);

//echo $oneMoreArrAsso['phoneno'];

// Multi dimentiona array

$multiDimArray = [
                    [1,2,3],
                    124,
                    "Sting"
];

$multid =array(array(1,2,3),"This is string element!",array("hi", "bye"));
//print_r($multiDimArray);
print_r($multid);

?>