<?php
require_once 'dbt.php';

$ajax_input = $_POST['ajax_input'];

$ajax_input  = (int)$ajax_input + 1;






$table = "UPDATE counted SET numbers = '" . $ajax_input .  "'";
$q = $conn->prepare($table);
$q->execute();
echo $ajax_input;
?>