













<html !DOCTYPE>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<form action="array_exercise.php" method="POST">
	<input class="formelement" type="text" name="name" placeholder="цифра">
	<br>
	<input class="formelement" type="text" name="name1"` placeholder="име"> <br>
	<button class="formelement" type="submit" name="submit">submit</button><br>

<?php

// echo strlen("test");
// echo "<br>";
// echo substr("boy",0,1);
// echo "<br>";
// echo substr("apple",0,1);

// count
// strlen
// substr
// rand



// Напиши скрипт - който да взима произволна променлива, цифра м/у 1 и 10 (https://www.php.net/rand ) .
// Да изписва на екран изтеглената цифра - "изтеглихме число Х".
// Ако променливата с цифрата е по-голяма от  5 да изписва на екран "Цифрата е по-голяма от 5" ако е по-малка "Цифрата е по-малка от 5" ако е равна на 5 - да изписва "ти печелиш" -->
$task = rand(0, 10);
if ($task > $_POST["name"]) {
    echo "цифрата е по-малка от $task";
}
if ($task < $_POST["name"]) {
    echo "цифрата е по-голяма от $task";
}
if ($task == $_POST["name"]) {
    echo "<br>";
    echo "ти печелиш";
}
echo "<br>";


echo "<br>";
echo $_POST ["name1"] . " изтегли числото " . $task;
?>


</body>
</html>









