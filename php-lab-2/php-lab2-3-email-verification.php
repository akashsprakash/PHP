<?php
  function email_verification($address)
  {
  	$check_variable=substr($address, -4);
  	$verify= ".com";
  	if (strcmp($check_variable, $verify) == 0) 
  	{
  	  echo "Email address ends with .com";
  	}
  }
  $email="test@test.com";
  email_verification($email);
  echo "\n";
  // function to check if a email ends with .com
?>