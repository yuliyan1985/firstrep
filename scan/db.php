<?php



$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($Color as $abc => $value){
    for($i=0; $i < count($Color); $i++) {
        $value[$i] = strtolower($value[$i]);



    }
    echo $abc . " " . $value . " ";
}
















































//$json = [
//  0 => ["Title:" => "The Cuckoos Calling",
//        "rrr:" => "tatata"],
//   1 =>  ["Author:" => "Robert Galbraith",
//            "oto:" => "asd"],
//    2 => ["Publisher:" => "Little Brown",
//            "aa:" => "sss"]
//];
//foreach ($json as $key => $value) {
//    foreach($value as $valueKey => $valueValue) {
//        echo $valueKey . " " . $valueValue . '<br>';
//    }
//}

////--------------------
//$car = ['name' => 'rrr'];
//$car = array(
//    'name' => 'rrr',
//    'name2' => 'rrr2'
//);
////--------------------
//$carOriginal = [
//    0 => "test",
//    1 => "test2"
//];
//
//$carOriginal = ["test","test2"];
////--------------------
//$dbArray = [
//    0 => [
//        "id" => "5",
//        "name" => "123123.jpg",
//    ],
//    1 => [
//        "id" => "6",
//        "name" => "qqq.jpg",
//    ]
//];
//
//$rows = [
//    0 => ["id" => 31,"username" => 'asasd'],
//    1 => ["id" => 32,"username" => 'dasdasdasg'],
//];
//
//
//
//$dbArray = [["name" => "iuli"]];
////--------------------
//
//
//$car = array(
//    'name' => [
//        0 => "test",
//        1 => "test2",
//    ]
//);
//
//
//echo $car["name"][0];
//echo $dbArray[0]["name"];






//$host = 'db';
//$dbname = 'task1';
//$username = 'root';
//$password = 'password';
//
//
//try {
//    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//} catch (PDOException $pe) {
//    die("Could not connect to the database $dbname :" . $pe->getMessage());
//}
//
?>