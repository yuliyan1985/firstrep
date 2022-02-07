<!DOCTYPE html>
<head></head>
<body>

<form action="../index.php" method="GET">
    <button class="formelement" type="submit">delete</button>
</form>
</body>
</html>

<?

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM number_guess WHERE id=$id") or die($conn->error());
}
?>
<a href="index.php">back</a>
