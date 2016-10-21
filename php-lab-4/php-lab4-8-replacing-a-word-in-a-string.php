<?php
  $count= 1;
  $input= "the quick brown fox jumps over the lazy dog.";
  print_r(preg_replace('/the/','That',$input, $count));
  echo "\n";
  // php script to replace first the in the sentence
?>