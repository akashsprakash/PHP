<?php 
  $studentMarks= array(
  	68,70,72,49,60,79,82,73,75,77,73,58,63,79,78,
  	68,72,73,80,34,68,72,56,23,73,45,24,85,89,83);
  $count= count($studentMarks);
  echo "Total number of students: $count \n";
  $average= array_sum($studentMarks) / $count ;
  echo "Average marks: $average \n";
  $highest= max($studentMarks);
  echo "Highest score: $highest \n";
  $lowest= min($studentMarks);
  echo "Lowest score: $lowest \n";
  $modified_marks= $studentMarks;
  sort($modified_marks);
  $least_five = array_slice($modified_marks, 0, 5);
  echo "Top 5: \n";
  print_r($least_five);
  $largest_five= array_slice($modified_marks, $count-5, $count);
  echo "Least 5: \n";
  print_r($largest_five);
  echo "Marks less than 50: ";
  for ($i=0; $i < $count; $i++) { 
  	if ($modified_marks[$i]<50) {
  		echo $modified_marks[$i] . " ";
  	}
  	else
  		break;
  }
  echo "\n";

 ?>