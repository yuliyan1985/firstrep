
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>


<form action="array_exercise.php" method="POST">
    <input class="formelement" type="text" name="number" placeholder="цифра">
    <br>
    <input type="text" id="fname" name="fname" value="<?php echo $_SESSION["name"]; ?>"><br>
    <button class="formelement" type="submit">press</button>
    <br>

</body>
</html>