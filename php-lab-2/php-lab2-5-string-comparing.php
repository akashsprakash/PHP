<?php
  function string_check($string1, $string2)
  {
  	return(substr_compare($string1, $string2,0));
  }
  $string1= 'Hello world';
  $string2= 'Hello world';
  $a= string_check($string1,$string2);
  echo $a;
  echo "\n";
  // function to compare above two strings are equal and return boolean result
?>