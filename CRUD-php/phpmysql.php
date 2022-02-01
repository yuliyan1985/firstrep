<?php

session_start();
require_once 'edit.php';
require_once 'db.php';
require_once 'phpconnect.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}


if (isset($_POST['save'])){
    $_number = $_POST['number'];
}




$sql = "INSERT INTO `number_guess` (`id`, `user_number`, `computer_number`, `win_loss`) 

VALUES (NULL ," . $_POST ["number"] . "," . $number . "," . (int)$win . ");";

$q = $conn->prepare($sql);
$q->execute();




$sqlselect = "SELECT * FROM number_guess";
$statement = $conn->query($sqlselect);
$number_guess = $statement->fetchAll(PDO::FETCH_ASSOC);


require_once 'phphtml.php';





if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM number_guess WHERE id=$id") or die($conn->error());
}




