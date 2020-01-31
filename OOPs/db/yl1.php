<?php
//lisame andmebaasitöötlus funktsioonid
require_once 'config.php';
//lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'db_fnc.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';

$ikt = connect(HOST, USER, USERPASS, DBNAME);
// katsetame sql
$sql = 'SELECT Kool,Kokku FROM koolid2015';
$result = getData($sql, $ikt);
echo '<h1>Harjutus 01</h1>';
echo 'Ridu kokku:'.count($result).'<br>';
$tabeliPealkirjad = array('Kool', '2012');
tabel($result, $tabeliPealkirjad);


// ühendus andmebaasiga
//$ikt = connection(HOST, USER, USERPASS, DBNAME);
// katsetame sql

//echo '<pre>';
//print_r($ikt);
//
////$slq = 'RENAME TABLE `vikseler_anna.php`.`TABLE 1` TO `vikseler_anna.php`.`koolid2015`';
//$sql = `SELECT Kool, Kokku FROM koolid2015`;
//$result = query($sql, $ikt);
//echo '<pre>';
//print_r($result);
// ühendus ikt serveris oleva andmebaasiga