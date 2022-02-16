<?php
switch ($_GET['action']) {

    case'scripts':
        require_once 'scripts.php';
        break;

    default:
        require_once 'forms.php';
        break;

}

