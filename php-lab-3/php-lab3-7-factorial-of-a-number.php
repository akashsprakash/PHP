<?php
  function factorial_calculation($number)
  {  
    $factorial=1;
  	for ($i= $number; $i >=1 ; $i--) { 
  		$factorial= $factorial * $i;
  	}
  	return($factorial);
  }
  echo "Enter a number: \n";
  $number= readline();
  $answer= factorial_calculation($number);
  echo "Factorial of $number: $answer \n";
  //factorial of a non-negative number
?>