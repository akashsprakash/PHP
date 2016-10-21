<?php
  $url_name= 'http://www.w3resource.com/php-exercises/php-basic-exercises.php';
  //var_dump( parse_url ($url_name_name) );
  echo "Scheme: ". (parse_url($url_name, PHP_URL_SCHEME)) . "\n";
  echo "Host: ". (parse_url($url_name, PHP_URL_HOST)) . "\n";
  echo "Path: ". (parse_url($url_name, PHP_URL_PATH)) . "\n";  
  // php script to find deatils of url; Scheme, Host, Path
?>