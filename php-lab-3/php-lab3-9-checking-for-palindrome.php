<?php
  echo "Enter the string: \n";
  $input= readline();
  $check= strrev($input);
  if ( $input == $check) {
  	echo "String is palindrome. \n";
  }
  else
  	echo "String is not palindrome. \n";
?>