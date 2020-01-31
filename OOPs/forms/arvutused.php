<?php

// arvutusfunktsioonid
function keraRuumala($raadius){
    $ruumala =  4 * pi() * pow($raadius, 2);
    return round($ruumala, 2);
}
function koonuseRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2);
    $ruumala = (1 / 3) * $pohjaPindala * $korgus;
    return round($ruumala, 2);
}
function silindriRuumala($raadius, $korgus){
    $pohjaPindala = pi() * pow($raadius, 2);
    $ruumala = $pohjaPindala * $korgus;
    return round($ruumala, 2);
}

// arvutame ja väljastame tulemused
// andmed
$keraRaadius = $_GET['kera-raadius'];
$koonuseRaadius = $_GET['koonuse-raadius'];
$koonuseKorgus = $_GET['koonuse-korgus'];
$silindriRaadius = $_GET['silindri-raadius'];
$silindriKorgus = $_GET['silindri-korgus'];

// arvutused
$keraRuumala = keraRuumala($keraRaadius);
$koonuseRuumala = koonuseRuumala($koonuseRaadius, $koonuseKorgus);
$silindriRuumala = silindriRuumala($silindriRaadius, $silindriKorgus);

// väljastus
echo 'Kera raadiusega '.$keraRaadius.' ruumala = '.$keraRuumala.'.<br>';
echo 'Koonuse raadiusega '.$koonuseRaadius.' ja kõrgusega '.$koonuseKorgus.' ruumala = '.$koonuseRuumala.'.<br>';
echo 'Silindri raadiusega '.$silindriRaadius.' ja kõrgusega '.$silindriKorgus.' ruumala = '.$silindriRuumala.'.<br>';