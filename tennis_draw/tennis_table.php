<?php
require_once 'db.php';
require_once 'script.php';

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
<table>
    <tr>
        <th>players_1</th>
        <th>players_2</th>
        <th>score</th>
        <th>winner</th>
    </tr>
    <?php



    $id = $_POST['id'];
    $result = $_POST['result'];


    $result_array = explode(":", $result);

    if ((int)$result_array[0] > (int)$result_array[1]) {

        $names = 'players_1';
    } else {
        $names = "players_2";

    }
    if (isset($_POST['result'])) {
        $updateResult = "UPDATE `scores` SET `score` = '".$result."', `winner_player_id` = `".$names."` WHERE `id` ='".$id."'";
        $updateScore = $conn->prepare($updateResult);
        $updateScore->execute();

    }


    $sql = "SELECT * FROM `scores`";
    $b = $conn->query($sql);
    $players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);


    foreach ($players_1_2 as $players) {



        echo '<tr>';
        echo '<th>'.$players["players_1"].'</th>';
        echo '<th>'.$players["players_2"].'</th>';
        echo '<th>';
        if (empty($players['score'])) {
            echo "<a href='http://php.local/tennis_draw/tennis_form.php?id=".
                $players['id']."' class='btn btn-info'>добави резултат за този мач</a> ";
        } else {
            echo "резултат : ".$players['score'];
        }
        echo '<th>'.$players['winner_player_id'].'</th>';

        echo '</th>';
        echo '</tr>';



    }
    $sql2 = "SELECT `winner_player_id` FROM `scores`";
    $b2 = $conn->query($sql2);
    $win = $b2->fetchAll(PDO::FETCH_COLUMN);


    $counts = array_count_values($win);
    arsort($counts);
    $winner = array_slice(array_keys($counts),0,1, true);


     echo "победителят е : ".$winner[0];

    ?>
</table>
</body>
</html>