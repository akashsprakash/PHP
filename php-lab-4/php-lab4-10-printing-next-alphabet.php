<?php
  echo "Enter the alphabet: \n";
  $input= readline();
  $next_ch = ++$input; 
  if (strlen($next_ch) > 1) {
  echo "Next character: $next_ch[0] \n";
  }
  else
  	echo "Next character: $next_ch \n";
  // php script to print next character of a specific character
?>