<?php
   $string1= "football";
   $string2= "footboll";
   $change_at= strspn($string1,$string2);
   echo "First difference between two strings at postion $change_at: ";
   echo $string1[$change_at] ." vs ". $string2[$change_at] . ".\n";
// php script to find first character difference in two scriptss
?>