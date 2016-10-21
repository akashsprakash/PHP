<?php 
  $response = array();
  exec('php -v', $response);
  print_r($response[0]);
  echo "\n";
  // using linux commands in php 
 ?>