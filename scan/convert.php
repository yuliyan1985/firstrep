<?php

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($Color as $abc => $value){
    for($i=0; $i < count($Color); $i++) {
        $value[$i] = strtolower($value[$i]);



    }
    echo $abc . " " . $value . " ";
}

?>