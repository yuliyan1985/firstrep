<?php
$rand = rand(0, 10);


if ($rand < 5){
$name = "юли";
}else {
    $name = "спиро";
}

echo  $name . " е пич ";


$array = [1,2,3,4,238, 7, 86, 79, 55, 92, 55, 7, 254, 9, 75, 238, 89, 238];
$values = array_count_values($array);
arsort($values);
$popular = array_slice(array_keys($values), 0, 1, true);






for ($i = 0; $i <= 100; $i++) {



        if ($i % 3 == 0 && $i % 5 == 0) {
           echo 'fuz buz'. '<br/>';
            continue;
        }


        if ($i % 5 == 0) {
            echo'buz' . '<br/>';
            continue;

        }

         if ($i % 3 == 0) {
        echo 'fuz'. '<br/>';
             continue;
        }
        else{
        echo $i. '<br/>';
}

    }

function fuzbuzz($a) {
    if ($a % 3 == 0 && $a % 5 == 0) {
        return "fuz,buzz" . '<br/>';
    }
        if ($a % 5 == 0) {
            return "buz". '<br/>';
        }
            if ($a % 3 == 0) {
                return "fuz". '<br/>';
            }
                return $a . '<br/>';
}
for ($i = 0; $i <= 100; $i++) {
  echo fuzbuzz($i);
}
?>