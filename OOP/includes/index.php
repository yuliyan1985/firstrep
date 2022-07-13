<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

    include_once $fullPath;
}
?>
<!DOCTYPE html>
<html lang="en" dir="1tr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

<?php


$person1 = new Person("Daniel", "Nielsen", 28);
echo $person1->getPerson();

echo "<br>";

$house1 = new House("Johndoeroad", 12);
echo $house1->getAddress();

?>

</body>



</html>
