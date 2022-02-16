<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <title></title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        a {
            color: darkblue;
        }
    </style>
</head>
<body>
<a href="http://php.local/crud/index.php?action=insert">play guess the number</a>
<br>
<a href="http://php.local/crud/index.php?action=logout">logout</a>
<table>
    <tr>
        <th>id</th>
        <th>login_id</th>
        <th>user_number</th>
        <th>computer_number</th>
        <th>win_loss</th>
        <th>points</th>
        <th>CRUD</th>

    </tr>

    <?php




    foreach ($number_guess as $row) {

        echo '<tr>';

        echo '<th>' . $row["id"] . '</th>';
        echo '<th>' . $row["login_id"] . '</th>';
        echo '<th>' . $row["user_number"] . '</th>';
        echo '<th>' . $row["computer_number"] . '</th>';
        echo '<th>' . $row["win_loss"] . '</th>';
        echo '<th>';
        foreach ($taken as $value) {
            if ($value['id'] == $row['login_id']) {
            echo $value['points'];
            }


        }
        echo '</th>';


        echo '<th>' . "<a href='http://php.local/crud/index.php?action=edit&edit=" .
            $row['id'] . "' class='btn btn-info'>Edit</a> ";

        echo "<a href= http://php.local/crud/index.php?action=delete&delete=" . $row['id'] . " class='btn btn-danger'>Delete</a>";
        '</th>';


        echo '</tr>';

    }
    ?>

</table>


</body>
</html>

