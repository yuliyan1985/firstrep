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

$sel = "SELECT points FROM login WHERE id ='$_SESSION'['locked']";
$st = $conn->query($sel);
$login = $st->fetchColumn();



if ($win = true){
    $points = $_SESSION['locked'] +1;
}
if ($win = false ){
    $points = $_SESSION['locked'] -1;
}
$id = $_POST['id'];

$my = "UPDATE login SET points = '$points' WHERE id = '$_SESSION'['locked']";


$sql = "INSERT INTO `number_guess` (`id`, `login_id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_SESSION['locked'] . "," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";

$q = $conn->prepare($sql);
$q->execute();

?>
<a href="index.php">back</a>