<?php

$id = $_POST['id'];
$user_name = $_POST['user_number'];
$computer_name = $_POST['computer_number'];
$win_loss = $_POST['win_loss'];

$query = "UPDATE number_guess SET  user_number = '$user_name', computer_number = '$computer_name' ,win_loss = '$win_loss'  WHERE id='$id' ";

$query_run = $conn->prepare($query);

if ($query_run->execute() === TRUE) {
    echo "Record updated successfully";
} else {
    echo " updated  successfully: " . $query_run->errorInfo();
}


?>
<a href="index.php">back</a>