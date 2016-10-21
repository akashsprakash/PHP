<?php
  $number= 123.4;
  setlocale(LC_MONETARY, 'en_US.UTF-8');
  echo money_format('%#1n', $number) . "\n";
  // print number in money format
?>