<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title></title>
    <style>
        label {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }

        .formelement {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }

        .formelemeent {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 5%;
        }
    </style>
</head>
</body>
<form action="index.php?action=scripts" method="POST">
    <label for="sentences">write a sentence</label>
    <input class="formelement" type="text" name="sentence" placeholder="sentence">
    <br>
    <button class="formelemeent" type="submit">press</button>

    <br>
</form>
</html>