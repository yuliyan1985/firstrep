<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<form action="array_exercise.php" method="POST">
    <input class="formelement" type="text" name="name" placeholder="цифра">
    <br>
    <input class="formelement" type="text" name="name1" placeholder="име"> <br>
    <button class="formelement" type="submit" name="submit">submit</button>
    <br>

    <?php


    $task = rand(0, 10);

    echo "<br>";
    echo $_POST ["name1"] . " изтегли числото " . $task;
    echo "<br>";

    if ($task > $_POST ["name"]) {
        echo "цифрата е по-малка от $task";


    }
    if ($task < $_POST["name"]) {
        echo "цифрата е по-голяма от $task";

    }
    if ($task == $_POST["name"]) {
        echo "<br>";
        echo "ти печелиш";


    }

    $_SESSION['player'] = $_POST["name"];
    $_SESSION['ps'] = $_POST["name1"];
    echo "<br>";
    echo $_SESSION["player"];
    echo $_SESSION["ps"];


    ?>

</body>
</html>

