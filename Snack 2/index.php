<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (strlen($name) > 3 && is_int(strpos($mail, '.')) && is_int(strpos($mail, '@')) && is_numeric($age)) {
    echo 'Access confirmed!';
} else {
    echo 'Access denied.';
}

?>