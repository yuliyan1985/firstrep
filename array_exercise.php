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
    <input class="formelement" type="text" name="number" placeholder="цифра">
    <br>
    <input class="formelement" type="text" name="name" placeholder="име"> <br>
    <button class="formelement" type="submit">press</button>
    <br>

    <?php


    $task = rand(0, 10);

    echo "<br>";
    echo $_POST ["name"] . " изтегли числото " . $task;
    echo "<br>";

    if ($task > $_POST ["number"]) {
        echo "цифрата е по-малка от $task";
    $az_pechelq =false;

    }
    if ($task < $_POST["number"]) {
        echo "цифрата е по-голяма от $task";
    $az_pechelq =false;
    echo"<br>";
    }
    if ($task == $_POST["number"]) {
        echo "<br>";
        echo "ти печелиш";
    $az_pechelq =true;

    }
    if ($az_pechelq ) {
        $_SESSION["player"] = $_SESSION["player"] +1;
    }
    else {
        $_SESSION["pc"] = $_SESSION["pc"] +1;
    }
    echo"<br>";
    echo  " играч печели " . $_SESSION["player"];
    echo"<br>";
    echo " компютър печели " . $_SESSION["pc"];









    ?>

</body>
</html>

