<?php






require_once 'db.php';

$bagBalls = array_diff(scandir('images'), array('..', '.'));

$sql = "SELECT `name` FROM `files`";
$statement = $conn->query($sql);
$bagBoxBalls = $statement->fetchAll(PDO::FETCH_ASSOC);

if (empty($bagBoxBalls)) {
    $query = "INSERT  INTO `files` ( `name` )
        VALUES ('" . $bagBalls . "');";
    $query_run = $conn->prepare($query);
    $query_run->execute();
}

if (!empty($bagBoxBalls)) {

    foreach ($bagBoxBalls as $row) {

       if (!in_array($row['name'], $bagBalls)) {

           $query = "INSERT  INTO `files` ( `name` )
             VALUES ('" . $bagBalls . "');";
           $query_run = $conn->prepare($query);
           $query_run->execute();

        }

       if (in_array($row['name'], $bagBalls)){
           break;
       }
    }
}


?>










