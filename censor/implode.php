<?php

 $test = "computer";

 function newTask($test) {
 	$length = strlen($test);

 	$start = substr($test, 0, 1);

 	$star = substr($test, -1);
 	for($x=1;$x <= ($length -2);$x++)
 	{
 	   $start = $start.'*';

 	}

 $start = $start.$star;
 	return $start;

 }

 echo newTask($test);