<?php 
  echo "Enter the lower limit: \n";
  $min= readline();
  echo "Enter the upper limit: \n";
  $max= readline();
  echo "Random number within ($min,$max): ". rand($min,$max) . "\n";

  // generating a random integer within a range. rand() is used
 ?>