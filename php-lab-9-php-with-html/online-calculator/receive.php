<?php

$number1= $_POST['firstnumber']; 
$number2= $_POST['secondnumber'];
$operation= $_POST['calculation'];
if (is_numeric($number1) && is_numeric($number2)) {
	if ($operation == "add") {
		$result= $number1 + $number2;
	}
	if ($operation == "subtract") {
	    $result= $number1 - $number2;
	}
	if ($operation == "multiply") {
		$result= $number1 * $number2;
	}
	if ($operation == "divide" && $number2 != 0) {
		$result= $number1 / $number2;
	}
	else
	{
		echo "Division by zero not possible.\n";
	}
	echo "Result: $result\n";
 } 
 else
 	echo "Enter an integer.\n";
?>