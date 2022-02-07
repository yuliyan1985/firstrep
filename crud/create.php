
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title></title>
    <style>
        .formelement {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
        .formelemeent {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
    </style>
</head>
</body>
<form action="index.php" method="POST">

    <input class="formelement" type="text" name="number" placeholder="число">
    <br>
    <button class="formelemeent" type="submit">press</button>

    <br>
</form>
</html>


<?php

$number = rand(0,10);

if ($number > $_POST ["number"]) {
    echo "цифрата е по-малка от $number";
    $win = false;

}
if ($number < $_POST["number"]) {
    echo "цифрата е по-голяма от $number";
    $win = false;
    echo "<br>";
}
if ($number == $_POST["number"]) {
    echo "<br>";
    echo "ти печелиш";
    $win = true;

}


if (isset($_POST['save'])) {
    $number = $_POST['number'];


    $sql = "INSERT INTO `number_guess` (`id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";

    $q = $conn->prepare($sql);
    $q->execute();
}

?>


