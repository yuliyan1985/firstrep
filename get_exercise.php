<?php
session_start();



$number = $_GET["name"];

if (isset($_GET)) {
    echo isset ($_GET);
    echo "<br>";
}

if (is_int($_GET)) {
    for ($i = 1; $i <= $_GET; $i++) {
        echo $i += $_GET;
    }
}
echo "<br>";
$_SESSION["previous"] = ($_GET);
echo $_SESSION["previous"];

?>
