<?php

$censorWords = array(
    'play',
    'ball',
    'point'
);

$pieces = explode(" ",$_POST['sentence']);

foreach($pieces as $value){
    if(in_array($value, $censorWords)){
        $length = strlen($value);
        $start = substr($value, 0,1);
        $end = substr($value, -1);

        for($i = 1;$i<=($length -2); $i++){
            $start = $start. '*';


        }
        $start = $start.$end;


    }

$back = array($value , $start);
    $backTo = implode(' ',$back);
    echo $backTo;
}





















