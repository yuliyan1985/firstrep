<?php 
// $table = 11;

// for($x = 1; $x <= 10; $x++ ) {



// 	echo $x*$table;
// 	echo "<br>";

// 	if($table == 11) {
// 		if($x == 5) {
// 			break;	
// 		}
// 	}

// }

// $test = 0;

// for ($i=1; $i <= 10 ; $i++) { 
	
// 	$test += $i;
	
// }

// echo $test;
// echo "<br>";


// $start = '*';
// for($x=1;$x<=5;$x++)
// {
//    echo $start;
//  echo "<br>";
//    $start = $start.'*';
// }



// for($x=1;$x<=5;$x++)
// {
//    for ($y=1;$y<=$x;$y++)
// 	{
// 	   echo "*";
// 	}
//  echo "<br>";
// }



// function addNUmbers(int $a) {
// 	return $a + 5;
// }
// echo addNUmbers(5);

	
	
// function addNUmbers(int $a) {
// 	for ($i=1; $i <= $a; $i++) { 
// 		echo '*';
// 	}
	
// }






// for ($i=1; $i <= 5; $i++) { 
// 	addNUmbers($i);
// 	echo "<br>";
// }





 
functio n check($a,$b) {
	if ($a==$b) {
		return $a * 3;
	}else{ 
		return $a + $b;
	}
}
echo check(1,2);
echo "<br>";
echo check(2,2);
echo "<br>";
echo check(5,7);
echo "<br>";
echo check(5,5);
echo "<br>";




// function task($a) {
// 	return $a - 50;
// }

// echo task(55);
// echo "<br>";

// echo task(150);
// echo "<br>";

// echo task(20);
// echo "<br>";


// echo task(-1);
// echo "<br>";







function newTask($a) {
	if($a % 2  == 0) {
		return true;
	}
	else{
		return false;
	}
	// return ($a % 2  == 0);
}
var_dump(newTask(2));
var_dump(newTask(3));
var_dump(newTask(11));
var_dump(newTask(100));



  // function nameTest($test) {
 	//echo strlen($test)."<br/>";
}
	//nameTest("test");



function task($apple) {
	echo substr ($apple,0,1);

}
	task("apple");
	task("boy");
