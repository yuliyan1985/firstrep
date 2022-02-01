<!DOCTYPE html>
<html>
<head></head>
<body>
<input type="result_a" type="text" name="number" placeholder="число"<?php echo $a?>>
<input type="result_b" type="text" name="number" placeholder="число"<?php echo $b?>>
<input type="result_c" type="text" name="number" placeholder="число"><?php echo $c?>>
<input type="result_d" type="text" name="number" placeholder="число"><?php echo $d?>>

<?php
require_once 'db.php';
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;
    $result = $conn->prepare('SELECT * FROM number_guess where id = :id');
    $result->bindParam('id', $id, PDO::PARAM_INT);
    $result->execute();
    $result = $result->fetch();

    if (!empty($result)) {
        $a = $result['id'];
        $b = $result['user_number'];
        $c = $result['computer_number'];
        $d = $result['win_loss'];





    }
}






