<?php
require_once 'db.php';

$bagWithballs = array_diff(scandir('images'), array('..', '.'));

$sql = "SELECT `name` FROM `files`";
$statement = $conn->query($sql);
$bagWithBoxAndBalls = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($bagWithballs as $balls) {
        $shouldInsert = true;

        foreach ($bagWithBoxAndBalls as $row) {

            if (in_array($balls, $row)) {

                $shouldInsert = false;
                break;
            }
        }
        if ($shouldInsert === true) {
        $query = "INSERT  INTO `files` ( `name` )
         VALUES ('" . $balls . "');";
        $query_run = $conn->prepare($query);
        $query_run->execute();

    }
}



?>










