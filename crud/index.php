<?php
session_start();
require_once 'db.php';
if(isset($_SESSION['locked'])){

    // if($_GET['action']
    switch ($_GET['action']) {

        // == 'insert') {
        case 'insert':
            require_once 'forms/insert.php';
            // }
            break;
        // == 'create') {
        case 'create':
            require_once 'scripts/create.php';
            // }
            break;
        // == 'edit') {
        case 'edit':
            require_once 'forms/edit.php';
            // }
            break;
        // == 'update') {
        case 'update':
            require_once 'scripts/update.php';
            // }
            break;
        // == 'delete') {
        case 'delete':
            require_once 'scripts/delete.php';
            // }
            break;
            // else {
        default:
            $sqlselect = "SELECT * FROM number_guess";
            $statement = $conn->query($sqlselect);
            $number_guess = $statement->fetchAll(PDO::FETCH_ASSOC);
            require_once 'table.php';
            // }
            break;

    }

}
else{
    require_once 'forms/login.php';
}

?>