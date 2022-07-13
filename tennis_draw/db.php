<?php
//без 'db' e
$host = 'db';
$dbname = 'table_tennis_draw';
$username = 'root';
$password = 'password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :".$pe->getMessage());
}



?>