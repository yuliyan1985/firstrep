
<?php

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM number_guess WHERE id=$id") or die($conn->error());
}

header("Location: index.php");
?>

