<?php
  $mailid= "rayy@example.com";
  $name= preg_split("(@)", $mailid);
  print_r($name[0]);
  echo "\n";
  //extracting username from an email id
?>