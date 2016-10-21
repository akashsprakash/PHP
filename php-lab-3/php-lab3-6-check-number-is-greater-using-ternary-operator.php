<?php
  echo "Enter a number: " . "\n";
  $number= readline();
  $number_is_less_than= ($number < 30 ? true : false);
  if ($number_is_less_than == "true") {
  	echo "The number is less than 30 \n";
  }
  else
  	echo "The number is greater than 30 \n";
  // php script to check if a number is less than
?>