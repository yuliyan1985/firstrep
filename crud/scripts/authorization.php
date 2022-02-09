<?php
session_start();
require_once '../db.php';


$username = $_POST['uname'];
$password = $_POST['pwd'];
$log = "SELECT * FROM `login` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' ";
$statement1 = $conn->query($log);
$login = $statement1->fetchAll(PDO::FETCH_ASSOC);

if (!empty($login)) {
    $_SESSION['locked'] = "nishto";
}

if (empty($login)) {
    $_SESSION['error'] = "incorrect username or password";
}
header("location:../index.php");