<?php

session_start();

require_once 'db.php';
require_once 'phpconnect.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}


if (isset($_POST['save'])) {
    $number = $_POST['number'];

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


var_dump($_POST)['update'];

if (isset($_POST['update'])) {


    $id = $_POST['update'];

    $id = $_POST['id'];
    $user_name = $_POST['user_name'];
    $computer_name = $_POST['computer_name'];
    $win_loss = $_POST['win_loss'];

    $query = "UPDATE number_guess SET  id = '$id' ,user_number = '$user_name', computer_number = '$computer_name' ,win_loss = '$win_loss'  WHERE id='$id' ";
    $query_run = $conn->prepare($query);
    $query_run->execute();

}


?>

