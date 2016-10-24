<?php 
  $input= "VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==";
  $decoded_string= base64_decode($input);
  echo "Original string: $input \nDecoded  string: $decoded_string \n";

  // script to decode an base64 encoded string.
 ?>