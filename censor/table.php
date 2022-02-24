
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


<table>
    <tr>
        <th>id</th>
        <th>user_id</th>
        <th>censor_words</th>



    </tr>

    <?php


    $take = "SELECT * FROM  cens ";
    $took = $conn->query($take);
    $taken = $took->fetchAll(PDO::FETCH_ASSOC);

    foreach ($taken as $row) {

        echo '<tr>';

        echo '<th>' . $row["id"] . '</th>';
        echo '<th>' . $row["user_id"] . '</th>';
        echo '<th>' . $row["censor_words"] . '</th>';
    }




    ?>
    <a href ="http://php.local/censor/index.php">back to add word</a>
</table>


</body>
</html>

