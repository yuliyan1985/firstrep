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

?>


