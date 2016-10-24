<?php 
  $color1 = array('white', 'green', 'red', 'blue', 'black');
  $color2 = array('grey', 'pink');
  echo "Array 1: ";
  print_r($color1);

  echo "Array 2: ";
  print_r($color2);
  
  $merged_array= array_merge($color1, $color2);
  echo "Merged array: ";
  print_r($merged_array);

  // merging two arrays
 ?>