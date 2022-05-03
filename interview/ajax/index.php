<?php

$year_1 = $_POST['year'];
$year_2 = $_POST['year_2'];

echo "<div id=\"result\">";
for ($i = $year_1; $i<=$year_2; $i++) {


    $years = array_count_values(str_split($i));

    if (count($years) == 4) {


  echo $i . '<br>';

    }

}
echo "</div>";


?>