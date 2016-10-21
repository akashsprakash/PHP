<?php
  $filename= 'my_upgrade(1).zip';
  $match= 'my_upgrade';
  if (substr_compare($filename, $match, 0) == 0) {
  	echo "Found\n";
  	break;
  }
  // end script on match found
?>