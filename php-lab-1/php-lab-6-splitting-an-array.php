<?php
  $string_variable= '"PHP is a widely-used open source general-purpose scripting language."';
  $splits_array = explode(" ", $string_variable);
  print_r(array_values($splits_array));
  //var_dump(array_values($splits_array));
  echo "\n";
  // php program to split elements in an array and print the entire array
?>