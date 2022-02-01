<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>

    <style>
        .input-group {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
        .input-group {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }
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
<form method="post" action="index.php" >
    <div class="input-group">
        <label>number</label>
        <input type="text" name="number" value="">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Save</button>
    </div>
</form>




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

        echo '<th>' . $row["id"] .  '</th>';
        echo '<th>' . $row["user_number"] .  '</th>';
        echo '<th>' . $row["computer_number"] .  '</th>';
        echo '<th>' . $row["win_loss"] .  '</th>';



        echo '</tr>';

    }
    ?>
</table>
</body>
</html>