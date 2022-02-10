<?php

?>

<!DOCTYPE html>
<head>
    <title></title>
    <style type="text/css">
        table {
            margin-top: 150px;
            border: 1px solid;
            background-color: #eee;
        }

        td {
            border: 0px;
            padding: 10px;
        }

        th {
            border-bottom: 1px solid;
            background-color: #ddd;
        }

    </style>
</head>

<body>
<form action="index.php?action=authorization" method="POST">

    <table align="center">
        <tr>
            <th colspan="2"><h2 align="center">Login</h2></th>
        </tr>

        <tr>
            <td>Username:</td>
            <td><input type="text" name="uname"></td>
        </tr>

        <tr>
            <td>Password:</td>
            <td><input type="password" name="pwd"></td>
        </tr>
<?php  if ($_SESSION['error']){?>
    <tr><td><?php echo $_SESSION['error']?></td></tr>
<?php } ?>
        <tr>
            <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
        </tr>

        <tr>
            <td>Already have an account? <a href= "http://php.local/crud/registration/register.php">Sign in</a></td>
        </tr>

    </table>
</form>



</form>



</body>
</html>
