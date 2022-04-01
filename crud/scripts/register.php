<?php

$sq = "INSERT INTO `login` ( `username`, `password` ) 

VALUES ('" . $_POST['username'] . "','" . $_POST ["password_1"] . "');";

if ($_POST['password_1'] !== ($_POST['password_2'])){
    header("location:users.php?action=register_forms");

}
else{

    header("location:users.php");
}
$ql = $conn->prepare($sq);
$ql->execute();

?>







