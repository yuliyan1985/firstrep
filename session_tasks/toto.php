<?php
session_start();
$_SESSION["toto1"] = [];
$_SESSION["toto2"] = [];
for ($i = 1; $i <= 100; $i++) {

    $findme = "7";
    $pos = strpos((string)$i, $findme);


    if ($pos !== false) {
        echo " Това число съдържа седем " . " - " . $i;
        echo "<br>";

    }
    if ($i == 7) {
        continue;
    }
    if ($i % 7 == 0) {

        echo " Това число е кратно на седем " . $i;
        echo "<br>";

    }

}
echo ' числа съдържащи седем ' . "," . $_SESSION['toto1'];

echo "<br>";

echo ' числа кратни на седем ' . "." . $_SESSION['toto2'];

echo "<br>";


//array_push($masiv, $dobavqne)
//list($array)



?>
айде