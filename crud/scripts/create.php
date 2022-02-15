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
$sel = "SELECT points FROM login WHERE id = '$id'";
$st = $conn->query($sel);
$login = $st->fetchColumn();

var_dump($login);

if ($win = true){
    $points ++;
}
if ($win = false ){
    $points --;
}
$id = $_POST['id'];
$points = $_POST['points'];
$my = "UPDATE login SET points = '$points' WHERE id = '$id'";


$sql = "INSERT INTO `number_guess` (`id`, `login_id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_SESSION['locked'] . "," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";

$q = $conn->prepare($sql);
$q->execute();

?>
<a href="index.php">back</a>