<?php
//$rand = rand(0, 10);
//
//
//if ($rand < 5){
//$name = "юли";
//}else {
//    $name = "спиро";
//}
//
//echo  $name . " е пич ";
$array = [1,2,3,4,238, 7, 86, 79, 55, 92, 55, 7, 254, 9, 75, 238, 89, 238];
$values = array_count_values($array);
arsort($values);
$popular = array_slice(array_keys($values), 0, 1, true);
var_dump($popular);
?>