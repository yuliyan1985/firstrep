<?php

require_once 'db.php';
switch ($_GET['action']) {
    //cases
    // insert - forma za suzdawane
    // create - submit forma za suzdawane + insert v DB
    // edit - forma za redaktirane - zarejda forms/edit.php
    // update - submit forma za redactirane scripts/update.php
    // delete - triene na red scripts/delete.php
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
    default:
        $sqlselect = "SELECT * FROM number_guess";
        $statement = $conn->query($sqlselect);
        $number_guess = $statement->fetchAll(PDO::FETCH_ASSOC);
        require_once 'table.php';
        break;
}
?>