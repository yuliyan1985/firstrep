<?php


require_once 'db.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}


$sqlselect = "SELECT * FROM number_guess";
$statement = $conn->query($sqlselect);
$number_guess = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<>
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
    </style>
</head>
<body>
"<a href="http://php.local/crud/create.php"></a>
<table>
    <tr>
        <th>id</th>
        <th>user_number</th>
        <th>computer_number</th>
        <th>win_loss</th>
        <th>CRUD</th>


    </tr>

    <?php


    foreach ($number_guess as $row) {

        echo '<tr>';

        echo '<th>' . $row["id"] . '</th>';
        echo '<th>' . $row["user_number"] . '</th>';
        echo '<th>' . $row["computer_number"] . '</th>';
        echo '<th>' . $row["win_loss"] . '</th>';

        echo '<th>' . "<a href='http://php.local/CRUD-php/edit.php?edit=" .
            $row['id'] . "' class='btn btn-info'>Edit</a>";

        echo "<a href= http://php.local/CRUD-php/phpmysql.php?delete=" . $row['id'] . " class='btn btn-danger'>Delete</a>";
        '</th>';

        echo '</tr>';

    }

    ?>

</table>


</body>
</html>

