<?php
require_once 'config.php';
require_once 'db_fnc.php';
require_once 'valjund.php';

$ikt = connect(HOST, USER, USERPASS, DBNAME);

$sql = 'INSERT INTO klendid'.
    ' SET enimi="Karu",'.
    'pnimi="Poeg",'.
    'kontakt="karu.poeg@puhh.com"';

$result = query($sql, $ikt);
if($result){
    echo 'Andmebaasi on lisatud' .mysqli_affected_rows($ikt).'ridu<br>';
    echo 'Viimane muudetud id on' .mysqli_insert_id($ikt).'<br>';
}