<?php
$ajaxInput = $_POST['ajax_input'];

if(is_numeric($ajaxInput))
{
    echo ($ajaxInput * 2);
}
else
{
    echo "Здравей ".$ajaxInput;
}