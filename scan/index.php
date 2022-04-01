<?php
require_once 'db.php';

$pics = array_diff(scandir('images'), array('..', '.'));

$sql = "SELECT `name` FROM `files`";
$statement = $conn->query($sql);

$table = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($table)) {
        $query = "INSERT  INTO `files` ( `name` )
        VALUES ('" . implode("'),('",$pics) . "');";
        $query_run = $conn->prepare($query);
        $query_run->execute();
    }


if (!empty($table)) {
    foreach ($table as $row) {
        if (in_array($row['name'], $pics)) {
            $pics = array_diff($pics, array($row['name']));
        }
    }
    if (!empty($pics)) {
        $query = "INSERT  INTO `files` ( `name` )
        VALUES ('" . implode("'),('", $pics) . "');";
        $query_run = $conn->prepare($query);
        $query_run->execute();
    }
}

?>










