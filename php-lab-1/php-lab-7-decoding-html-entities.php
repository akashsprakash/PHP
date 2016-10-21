<?php
  $string_variable= '&lt;html&gt;&lt;body&gt;Hey!&lt;/body&gt;&lt;/html&gt;';
  $newvariable= html_entity_decode($string_variable);
  echo $newvariable;
  // echo htmlspecialchars_decode($string_variable, ENT_NOQUOTES);
  // htmlspecialchars_decode has less character set as compared to html_entity_decode, security perspective.
  echo "\n";
  // php program to decode html entities
?>