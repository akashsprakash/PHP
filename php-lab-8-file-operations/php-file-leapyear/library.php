<?php 
   // Invoked by leapyear.php
  function is_leap_year($year)
   {
	return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
   } 
   // function checks to check wether the year is leap year. Returns 0 if not leap year and 1 if leap year.
   $input= $argv[1];
   // input passed as command line argument
   $leap= is_leap_year($input);
   if ($leap == 0) {
   	echo "$input is not a leap year.\n";
   }
   else
   	echo "$input is a leap year.\n";
 ?>