<?php

require_once 'db.php';


$table = "SELECT `players` FROM `players_table` ";
$b = $conn->query($table);
$tennis = $b->fetchAll(PDO::FETCH_COLUMN);

$sql = "SELECT `players_1`, players_2 FROM `scores` ";
$b = $conn->query($sql);
$players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);


$n = count($tennis);
$passed = [];

if(empty($players_1_2)) {

    foreach ($tennis as $key => $players) {
        foreach ($tennis as $key2 => $players2) {
            if ($key != $key2 && !isset($array[$key][$key2]) && !in_array($key2, $passed)) {
                $array[$key][$key2] = $players.'-'.$players2;


                $passed[] = $key;


                $insertPlayers = "INSERT INTO `scores` ( `players_1`, `players_2` ) 

VALUES ('".$players."','".$players2."');";
                $ql = $conn->prepare($insertPlayers);
                $ql->execute();

            }
        }
    }
}
header("Location: tennis_table.php");
?>

