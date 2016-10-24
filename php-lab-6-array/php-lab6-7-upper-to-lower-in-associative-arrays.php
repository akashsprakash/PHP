<?php 
  $color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
  $upper_case_array= array_map('strtoupper', $color);
  // array map is used to map a user defined function in array.
  $lower_case_array= array_map('strtolower', $color);

  echo "Values in upper case: \n";
  print_r($upper_case_array);

  echo "Values in lower case: \n";
  print_r($lower_case_array);

  // converting values in associative arrays to upper case and lower case
 ?>