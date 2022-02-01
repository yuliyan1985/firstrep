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




<?php 
 
function check($a,$b) {
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





function acc($a) {
 	if(is_int($a)){
 		return $a * 10;
 	}
		
	if(is_array($a)){
	 	return array_sum($a);

	 	// $sum = 0;
	 	// foreach ($a as $key => $value) {
	 	// 	$sum = $sum + $value;
	 	// }
	 	// return $sum;
	}
}
var_dump(acc(5));
var_dump(acc([1,2,3]));






// function check30($a,$b){
	// if(
		// ($a == 30) 
		// or ($b == 30) 
		// or (($a + $b) == 30)
	// )
	// {
		// return true;
	// }
	// else{
		// return false;
	// }

// }

// var_dump (check30(30,0));
// var_dump (check30(25,5));
// var_dump (check30(20,30)); 
// var_dump (check30(20,25)); 



function check40($a){
	if(
		($a < 50)
		or (($a > 100) && ($a < 200))
	   )
	   {
	   return true;
	   }
	   {
	   return false;
	   }
}

	var_dump(check40(1));
	var_dump(check40(55));
	var_dump(check40(88));
	var_dump(check40(106));








// $test = 20;
// $test2 = 20;


// if($test > $test2) {
// 	$test3 = "iuli";
// } else {
// 	$test3 = false;
// }

// if($test == $test2){
// 	$test3 = $test;
// }
		
	
// var_dump($test3);








$test = 10;
$test2 = 20;


if($test > $test2) {
	$test3 = "iuli";
} 
else {
	$test3 = false;
}

if($test == $test2){
	$test3 = $test;
}
		



		

$try1 = [
	"var1" => $test,
	"var2" => $test2,
	"var3" => $test3
];


	
var_dump($try1);



// $test = "computer";
	
// function newTask($test) {
// 	$length = strlen($test);
	
// 	$start = substr($test, 0, 1);
// 	$star = 'k';
// 	$star = substr($test, -1);
// 	for($x=1;$x <= ($length -2);$x++)
// 	{
// 	   $start = $start.'*';	

// 	}

// $start = $start.$star;
// 	return $start;
	
// }

// echo newTask($test);



$test = "iuli";

function test($test)
{
	$length = strlen($test);
	if($length <= 3)
	{
		return [$test];
	}

	if($length % 2)
	{
		$firstPart = substr($test, 0, ($length / 2));
		$lastPart = substr($test, ($length / 2));
		return [$firstPart, $lastPart]
	}
	else
}

// $a = "**";
// $b = "k";
// $c = $a . $b;
// $e = $c;

// echo $e;



$task = rand(1,10);

   if($task > 5){
	echo  "цифрата е по-голяма от 5";
   } else {
   	echo "цифрата е по-малка от 5";
   }
	if($task == 5){
	echo"ти печелиш";
	}
	echo "<br>";
echo $task;


