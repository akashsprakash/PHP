<?php 
  $color = array('white', 'green', 'red', 'blue', 'black');
  print_r($color);
  $position= array_search('red', $color);
  // unset($color[$position]);
  // unset function doesnot reindex the array after removal
  array_splice($color,$position,1);
  // array_splice(input, offset) reindexes the array after removal. Third index for not slicing array after removal
  print_r($color);
  // removing an array element
 ?>