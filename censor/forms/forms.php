<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title></title>
    <style>
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

        .form {
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: aqua;
            width: 40%;
        }

        .forms {
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: burlywood;
            width: 10%;
        }
    </style>
</head>
<body>

<?php if(isset($_SESSION['result'])) {
    foreach ($_SESSION['result'] as $value){
        echo "резултат: " . $value . '<br>';

    }
        }
?>
<hr />

<form action="index.php?action=scripts" method="POST">

    <input class="formelement" type="text" name="sentence" placeholder="sentence">
    <br>
    <button class="formelemeent" type="submit">press</button>

    <br>
</form>


<hr />
<?php
    if(isset($_SESSION['locked'])){
    ?>
    <form action="index.php?action=addword" method="POST">

    <input class="form" type="text" name="add" placeholder="agregado una palabra censurada aqui, por favor">
    <br>
    <button class="forms" type="submit">submit</button>

    <br>
</form>
<?php
}else
    {
        ?>
    <a href="http://php.local/censor/index.php?action=forms_login">login here</a>
<?php
}
?>

</body>

</html>