<?php
session_start();
unset($_SESSION['locked']);
header('location:users.php');
?>
