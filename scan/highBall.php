<?php
$left = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$leftBag = explode(',', $left);
$rightBag = [];

foreach ($leftBag as $ballWithNumberFromLeft) {

    if (count($rightBag) < 5) {
        $rightBag[] = $ballWithNumberFromLeft;
    } else {
        for ($i = 0; $i < 5; $i++){
           if ($ballWithNumberFromLeft > $rightBag[$i]){
               if (!in_array($ballWithNumberFromLeft, $rightBag ))
               $rightBag[$i] = $ballWithNumberFromLeft;
           }
      }
   }


}
echo '<pre>';

var_dump($rightBag);


?>