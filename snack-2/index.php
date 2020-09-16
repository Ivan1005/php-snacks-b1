<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
if (!empty($name) || !empty($email) || !empty($eta)) {
        if ((strlen($name) > 3) && (strpos($mail,'@') !== false) && (strpos($mail,'.') !== false) && is_numeric($age)) {
            echo 'Accesso Riuscito';
        }  else {
            echo 'Accesso Negato';
        }
    }  else {
        echo 'Accesso Negato';
    }
?>
