<?php
session_start();
require_once 'db.php';


switch ($_GET['action']) {

    case'table':
        require_once 'table.php';
        break;

    case'addword':
        require_once 'scripts/addword.php';
        break;

    case'forms_login':
        require_once 'forms/forms_login.php';
        break;

    case'scripts':
        require_once 'scripts/scripts.php';
        break;

    case'authorization':
        require_once 'scripts/authorization.php';
        break;

    default:
        require_once 'forms/forms.php';
        break;

}


