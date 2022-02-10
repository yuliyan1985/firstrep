<!DOCTYPE html>
<html>
<head>
    <style>
        .hide{
            display: none;
        }
    </style>
</head>
<body>

<?php
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;

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

<form action="index.php?action=update" method="POST">
    <label for="text">user_number</label>
    <input type="text" name="user_number" value="<?php echo (isset($b)) ? $b : ''; ?>">
    <label for="text">computer_number</label>
    <input type="text" name="computer_number" value="<?php echo (isset($c)) ? $c : ''; ?>">
    <label for="text">win_loss</label>
    <select id="win_loss" name="win_loss">

        <option value="0" <?php if (!$d) echo 'selected'; ?>>0</option>
        <option value="1"<?php if ($d) echo 'selected'; ?>>1</option>
    </select>

    <input type="text" name="id" class="hide" value="<?php echo (isset($a)) ? $a : ''; ?>">

    <button type="submit" name="update" class="btn btn-primary">update</button>
</form>

