<?php
require_once 'db.php';
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



    if (isset($_POST['score'])) {
        $updateResult = "UPDATE `scores` SET `score` = '".$_POST['score']."' WHERE `id` ='".$id."'";
        $updateScore = $conn->prepare($updateResult);
        $updateScore->execute();
    }

        $sql = "SELECT `players_1`, players_2,`score` FROM `scores`";
        $b = $conn->query($sql);
        $players_1_2 = $b->fetchAll(PDO::FETCH_ASSOC);


        foreach ($players_1_2 as $player_1) {


            echo '<tr>';
            echo '<th>'.$player_1["players_1"].'</th>';
            echo '<th>'.$player_1["players_2"].'</th>';
            echo '<th>'.$player_name["score"].'</th>';


            echo '<th>';
            echo '</tr>';

        }

    ?>
</table>
</body>
</html>
