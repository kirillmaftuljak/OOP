<?php
$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = ucfirst($nimi);
echo 'Tere, ' . $nimi . '!';
echo '<hr>';
$sisend = $_GET['sisend'];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $symbol = strtoupper($sisend[$indeks]); //
    echo $symbol . '.'; //
}
echo '<hr>';
$roppSonad = array('noob', 'kurat');
$lause = $_GET['lause'];
$lause = strtolower($lause);
foreach ($roppSonad as $roppSona) {
    $asendus = '';
    for ($kord = 0; $kord < strlen($roppSona); $kord++) {
        $asendus .= '*';
    }
    $roppSonaIndex = strpos($lause, $roppSona, 0);
    if ($roppSonaIndex !== false) {
        $lause = substr_replace($lause, $asendus, $roppSonaIndex, strlen($roppSona));
    }

}

$lause = ucfirst($lause);
echo $lause;
echo '<hr>';
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);
foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));
$nimiJaPerenimi = substr($nimiJaPerenimi, $tyhikuIndeks+1);
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ');
$perenimi = strtolower(substr($nimiJaPerenimi,$tyhikuIndeks+1));
$email = $nimi.'.'.$perenimi.'@khk.ee';
echo $email;
