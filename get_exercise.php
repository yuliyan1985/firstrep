<?php
session_start();

$number = 3;

if (isset($number)) {
    echo isset ($number);
}

if (is_int($number)) {
    for ($i = 1; $i <= $number; $i++) {
        echo $i += $number;
    }

}


?>
