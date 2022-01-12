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


<form action="testarray.php" method="POST">
    <input class="formelement" type="text" name="number" placeholder="цифра">
    <br>
    <input type="text" id="fname" name="fname" value="Yuliyan"><br>

    <button class="formelement" type="submit">press</button>
    <br>
    <?php
    $randomNumber = rand(0, 10);

    echo "<br>";
    echo $_POST["name"] . " изтегли числото " . $randomNumber;
    echo "<br>";
    $name="name";

    if ($randomNumber > $_POST["number"]) {
        echo "изтегленото число е по-голямо от $randomNumber";
        echo "<br>";
        $win = false;

    }
    if ($randomNumber < $_POST["number"]) {
        echo "изтегленото число е по-малко от $randomNumber";
        echo "<br>";
        $win = false;


    }

    if ($randomNumber == $_POST["number"]) {
        echo "ти печелиш";
        echo "<br>";
        $win = true;


    }

    if ($win) {
        $_SESSION["играч"] = $_SESSION["играч"] + 1;
    } else {
        $_SESSION["лаптопа"] = $_SESSION["лаптопа"] + 1;
    }
    echo "<br>";
    echo " играча печели " . $_SESSION["играч"];
    echo "<br>";
    echo " лаптопа печели " . $_SESSION["лаптопа"];

    $_SESSION["name"] = $_SESSION["name"] + 1;
    echo $_SESSION["name"];

    ?>
</html>
