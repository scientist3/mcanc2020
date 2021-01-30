<?php
  $intNum = 9;

  // Simple if statement.
  /*
  echo "Condtion start.<br>";

  if($intNum<0)
  {
    echo "Number is less than zero<br>"; 
  }
  echo "Condtion End.<br>"
  */
  // If else

  /*
  if($intNum%2 == 0){ // 
    // Executed on true condition
    echo "Number is even.";
  }else{
    // executed on false condition
    echo "Number is odd.";
  }
  */

  // ---------------------------------------------------
  /*
  $intVal= 1;
  // Switch
  switch ($intVal) {
    case 1:
      echo "One";
      break;
    case 2:
      {
        echo "Two";
        break;
      }  
    case 3:
      echo "Three";
      break;
    case 4:
      echo "Four";
      break;

    default:
      echo "Invalid"; 
      break;
  }
  */
  // 123 = one two three
  // input  = 153
  // output = one five three
  // ----------------------------------------------------------------

  // Program to display number to its words
  function revNum($num){
    
    $revNumm =0;
    //echo $num;  
    while ($num > 0)  
    {
      // echo $num;
      $rem = ($num%10);
      $revNumm = $revNumm*10+$rem;
      $num = intval($num/10);
      //echo $remNum;
    }

    return $revNumm;
  }

  function digitToWord($intNewNum){
    echo "Given Number is : ".$intNewNum."<br>";
    $NewNumRev = revNum($intNewNum);
    while($NewNumRev>0){
      $reminder = $NewNumRev%10;
      switch ($reminder) {
        case 1:
          echo "One ";
          break;
        case 2:
          {
            echo "Two ";
            break;
          }  
        case 3:
          echo "Three ";
          break;
        case 4:
          echo "Four ";
          break;
        case 5:
          echo "Five ";
          break;
        default:
          echo "Invalid"; 
          break;
      }
      $NewNumRev = intval($NewNumRev/10);
    }
  }

  // ----------------------------------------------------------------
  // Function Call
  digitToWord(152);

?>
