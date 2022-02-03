<!DOCTYPE html>
<html>
<head></head>
<body>

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
?>

<form action="phpmysql.php" method="POST">
    <input type="text"  name="id" value="<?php echo (isset($a))?$a:'';?>">
    <input type="text"  name="user_name" value="<?php echo (isset($b))?$b:'';?>">
    <input type="text"  name="computer_name" value="<?php echo (isset($c))?$c:'';?>">
    <input type="text"  name="win_loss" value="<?php echo (isset($d))?$d:'';?>">
    <button type="submit" name="update" class="btn btn-primary">update</button>
</form>




