<?php
require_once 'config.php';
require_once 'db_fnc.php';
require_once 'valjund.php';

$ikt = connect(HOST, USER, USERPASS, DBNAME);

otsinguVorm();
if(isset($_GET['otsi'])){
    $otsi = $_GET['otsi'];
    $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
    $result = getData($sql, $ikt);
    if($result !== false){
        // väljastame
        $pealkirjad = array('2015', 'Kool');
        tabel($result, $pealkirjad);
    }
}