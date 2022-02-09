<?php
session_start();
?>





    <?php
    require 'array_view.php';
    $task = rand(0, 10);

    echo "<br>";
    echo $_POST ["fname"]  . " изтегли числото " . $task;
    echo "<br>";




    if ($task > $_POST ["number"]) {
        echo "цифрата е по-малка от $task";
        $win = false;
    }
    if ($task < $_POST["number"]) {
        echo "цифрата е по-голяма от $task";
        $win = false;
        echo "<br>";
    }
    if ($task == $_POST["number"]) {
        echo "<br>";
        echo "ти печелиш";
        $win = true;
    }
    if ($win) {
        $_SESSION ["player"] = $_SESSION["player"] + 1;
    } else {
        $_SESSION["pc"] = $_SESSION["pc"] + 1;
    }
    echo "<br>";
    echo " играч печели " . $_SESSION["player"];
    echo "<br>";
    echo " компютър печели " . $_SESSION["pc"];

    $_SESSION["name"] = $_POST["fname"];
    ?>



