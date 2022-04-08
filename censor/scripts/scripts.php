<?php
$q = "SELECT censor_words FROM cens";
$b = $conn->query($q);
$S = $b->fetchAll(PDO::FETCH_COLUMN);

$pieces = explode(" ",$_POST['sentence']);
$new = array();
foreach($pieces as $value){
    if(in_array($value, $S)){

        $length = strlen($value);
        $start = substr($value, 0,1);
        $end = substr($value, -1);

        for($i = 1;$i<=($length -2); $i++){
            $start = $start. '*';


        }
        $value = $start.$end;

    }

    $new[] = $value;

}


$_SESSION['result'][] = implode(' ', $new );

header('location:index.php');
?>

