<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['locked']) && $_GET['action'] != 'authorization') {
     $_GET['action'] = "login";
}

switch ($_GET['action']) {
    case'login':
        require_once 'forms/login.php';
        break;

    case'authorization':
        require_once 'scripts/authorization.php';
        break;

    case 'insert':
        require_once 'forms/insert.php';
        break;

    case 'create':
        require_once 'scripts/create.php';
        break;

    case 'edit':
        require_once 'forms/edit.php';
        break;

    case 'update':
        require_once 'scripts/update.php';
        break;

    case 'delete':
        require_once 'scripts/delete.php';
        break;

    case 'logout':
        require_once 'forms/logout.php';
        break;


    default:
        $sqlselect = "SELECT * FROM number_guess";
        $statement = $conn->query($sqlselect);
        $number_guess = $statement->fetchAll(PDO::FETCH_ASSOC);
        require_once 'table.php';
        break;
}


?>