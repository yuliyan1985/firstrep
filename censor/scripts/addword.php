<?php
$sq = "INSERT INTO `cens` ( `user_id`, `censor_words` ) 

VALUES ('" . $_SESSION['locked'] . "','" . $_POST['add'] .  "');";

$ql = $conn->prepare($sq);
$ql->execute();
header('location:users.php?action=table');
?>





