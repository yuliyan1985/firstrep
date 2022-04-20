<?php
require_once '../db.php';
require_once 'update_score.php';
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table {
            font-family: arial;
            border-collapse: collapse;
            width: 100%;

        }

        td, th {
            border: 5px solid #dddddd;
            text-align: center;
            padding: 8px;
            background-color: white;
            border-color: dimgrey;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        a {
            color: green;
        }

    </style>
</head>
<body>

<?php
//изчезват линковете при запълване на таблицата
$sql = "SELECT `players_1`, players_2 FROM `scores` ";
$b = $conn->query($sql);
$players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);
if (empty($players_1_2)) {
    echo '<a href="draw_table.php">start tournament </a>';
    echo '<br>';
    echo '<a href="../forms/addPlayer_form.php">add player</a>';
}
?>

<br>
<table>
    <tr>
        <th>players_1</th>
        <th>players_2</th>
        <th>score</th>
        <th>winner</th>
    </tr>
    <?php


    $joinPlayers = "
SELECT
scores.id,
scores.players_1,
scores.players_2,
scores.score,
scores.winner_player_id,
pt1.players as player_1_name,
pt2.players as player_2_name,
winners.players as winners_name
FROM
    `scores`
JOIN `players_table` AS pt1 ON `pt1`.`id` = `scores`.`players_1`
JOIN `players_table` AS pt2 ON `pt2`.`id` = `scores`.`players_2`
LEFT JOIN players_table AS winners ON `winners`.`id` = `scores`.`winner_player_id`
;";


    $playersJoin = $conn->query($joinPlayers);
    $joinTable = $playersJoin->fetchAll(PDO::FETCH_ASSOC);

    foreach ($joinTable as $players) {

        echo '<tr>';
        echo '<th>'.$players["player_1_name"].'</th>';
        echo '<th>'.$players["player_2_name"].'</th>';
        echo '<th>';
        if (empty($players['score'])) {
            echo "<a href='http://php.local/tennis_draw/forms/addscore_form.php?id=".
                $players['id']."' class='btn btn-info'>добави резултат за този мач</a> ";
        } else {
            echo "резултат : ".$players['score'];
        }
        echo '<th>'.$players['winners_name'].'</th>';

        echo '</th>';
        echo '</tr>';
    }

    $sql2 = "SELECT `winner_player_id` FROM `scores`";
    $b2 = $conn->query($sql2);
    $win = $b2->fetchAll(PDO::FETCH_COLUMN);



    $counts = array_count_values($win);
    arsort($counts);
    $winner = array_slice(array_keys($counts), 0, 1, true);

    $selectPl = "SELECT `players` FROM `players_table` WHERE id = '$winner[0]'";
    $selectPlayer = $conn->query($selectPl);
    $selectPlayers = $selectPlayer->fetchAll(PDO::FETCH_COLUMN);

    echo "победителят е : ".$selectPlayers[0];

    ?>
</table>

<a href='http://php.local/tennis_draw/forms/changePlayer_form.php?name="  class='btn btn-info'>смени играч</a>




<?php
// да няма празен ред в таблицата
if (isset($_POST['addPlayer']) && strlen($_POST['addPlayer']) !== 0) {
    $addPl = $_POST['addPlayer'];

    $insertPlayer = "INSERT INTO `players_table` (`players`)
VALUES ('".$addPl."');";
    $add_players = $conn->prepare($insertPlayer);
    $add_players->execute();
}


?>

</body>
</html>