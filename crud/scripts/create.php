<?php

$number = rand(0, 10);

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

$sel = "SELECT points FROM login WHERE id = '" . $_SESSION['locked']  . "'";
$st = $conn->query($sel);
$databasePoints = $st->fetchColumn();



if ($win == true){
    $points = $databasePoints +1;
}
if ($win == false ){
    $points = $databasePoints -1;
}



$my = "UPDATE login SET points = '" . $points . "' WHERE id ='" . $_SESSION['locked'] . "'";
$q = $conn->prepare($my);
$q->execute();


$sql = "INSERT INTO `number_guess` (`id`, `login_id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_SESSION['locked'] . "," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";

$q = $conn->prepare($sql);
$q->execute();

?>
<a href="index.php">back</a>