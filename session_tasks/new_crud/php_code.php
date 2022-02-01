<?php
session_start();
require_once ('index.php');
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$host = 'db';
$dbname = 'task1';
$username = 'root';
$password = 'password';


if (isset($_POST['save'])) {
    $number = $_POST['number'];


    $sql = "INSERT INTO `number_guess` (`id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";
    $q = $conn->prepare($sql);
    $q->execute();
}


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

