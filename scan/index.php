<?php
require_once 'db.php';

$files = array_diff (scandir('images'), array('..', '.'));
foreach($files as $file) {
        $query = "INSERT IGNORE INTO `files` ( `name` )
        VALUES ('" . $file .  "');";
        $query_run = $conn->prepare($query);
        $query_run ->execute();
}

?>

