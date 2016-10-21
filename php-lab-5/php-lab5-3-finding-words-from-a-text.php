<?php 
  $text= "There is no installation needed to use these functions: they are part of the PHP core";
  echo "Enter search key : \n";
  $key= readline();
  $result= stripos($text, $key);
  if ($result !== false) {
  	echo "$key found.\n";
  }
  else
  	echo "$key not found!\n";
  // searching a key in a text
?>