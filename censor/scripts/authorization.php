<?php
unset ($_SESSION['error']);
unset ($_SESSION['locked']);
$username = $_POST['username'];
$password = $_POST['password'];
$log = "SELECT * FROM `censor` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' ";
$statement1 = $conn->query($log);
$login = $statement1->fetchAll(PDO::FETCH_ASSOC);

if (!empty($login)){
    $_SESSION['locked'] = $login[0]['id'];

}

if (empty($login)) {
    $_SESSION['error'] = "incorrect username or password";
}
header("location:index.php");
?>
