<?php
require_once '../db.php';
$changePlayer = $_POST['changePlayer'];
$newPlayerId = $_POST['id'];

$updatePl = "UPDATE `players_table` SET players =  '$changePlayer' WHERE id = '$newPlayerId'";
$updatePlayer = $conn->prepare($updatePl);
$updatePlayer -> execute();


header('location:http://php.local/tennis_draw/script/tennis_table.php');

?>

