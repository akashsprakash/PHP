<?php 
  $input= array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
  $key_sorted_ascending= $input;
  $key_sorted_descending= $input;
  $value_sorted_ascending= $input;
  $value_sorted_descending= $input;

  ksort($key_sorted_ascending);
  echo "Sorted in ascending by key: ";
  print_r($key_sorted_ascending);

  krsort($key_sorted_descending);
  echo "Sorted in descending by key: ";
  print_r($key_sorted_descending);

  sort($value_sorted_ascending);
  echo "Sorted in ascending by value: ";
  var_dump($value_sorted_ascending);

  rsort($value_sorted_descending);
  echo "Sorted in descending by value: ";
  var_dump($value_sorted_descending);  

  // sorting associative array using key & value- ascending and descending

 ?>