<?php
$json = [
    0 => ["Title:" => "The Cuckoos Calling",
        "rrr:" => "tatata"],
    1 =>  ["Author:" => "Robert Galbraith",
        "oto:" => "asd"],
    2 => ["Publisher:" => "Little Brown",
        "aa:" => "sss"]
];
echo '<pre>';
var_dump($json);
foreach ($json as $key => $value) {
    var_dump($value);
    foreach($value as $valueKey => $valueValue) {

    }
}


?>
