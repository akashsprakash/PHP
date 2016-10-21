<?php
function prime_or_not($number)
{
	if($number == 1){
        return false;
        // 1 is neither prime nor composite
    }
    if($number == 2){
        return true;
        // 2 is a prime
    }
    if($number % 2 == 0) {
        return false;
        // number is divisible by 2.
    }
    for($i = 2; $i <= $number-1 ; $i++) {
        if($number % $i == 0)
            return false;
      // checks divisibilty from 2 to number-1.
    }

}
  echo "Enter the number: \n";
  $number= readline();
  $condition= prime_or_not($number);
  if ($condition === false) {
  	echo "Number is not a prime. \n";
  }
  else
  	echo "Number is prime. \n";
  // checking whether a number is prime
?>