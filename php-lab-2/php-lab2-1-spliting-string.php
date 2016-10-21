<?php
  $text= "Word wrap will split this text up into smaller lines, which makes for easier reading and neater layout.";
  echo wordwrap($text,20);
  echo "\n";
    // split the string and print each line with 20 characters
?>