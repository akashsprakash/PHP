<?php 
  $cities= array(
  	"Itanagar",
  	"Dispur",
  	"Patna",
  	"Panaji",
  	"Raipur",
  	"Gandhinagar",
  	"Srinagar",
  	"Banglore"
  	);
  $count= count($cities);
    for ($i=0; $i < $count; $i++)
    { 
  	 if($i != $count-1)
  	 {
   	 print_r($cities[$i]);
  	 echo ", ";
     }
    else
     {
  	 print_r($cities[$i]);
  	 echo ".";
     }
    }
  echo "\n";
  array_push($cities,"Thiruvananthapuram","Bhopal","Mumbai","Banglore","Raipur");
  $cities= array_unique($cities);
  sort($cities);
    $count= count($cities);
    for ($i=0; $i < $count; $i++)
    { 
  	 if($i != $count-1)
  	 {
  	 print_r($cities[$i]);
  	 echo ", ";
     }
    else
     {
  	 print_r($cities[$i]);
  	 echo ".";
     }
    }
  echo "\n";
  // printing loop variables sperated by comma, pushing new entries to array, ignoredulpicates, sort the new array.
 ?>