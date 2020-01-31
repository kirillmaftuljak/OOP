<?php
date_default_timezone_set('Europe/Tallinn');
$aeg = mktime(12, 31, 0, 3, 20, 2013);
echo date('d.m.Y H:i', $aeg);
echo '<br>';
echo date('d.m.Y H:i', time());
echo '<hr>';
$paevaNumber = date('N');
$nadal = array(
    '1' => 'esmaspäev',
    '2' => 'teisipäev',
    '3' => 'kolmapäev',
    '4' => 'neljapäev',
    '5' => 'reede',
    '6' => 'laupäev',
    '7' => 'pühapäev',
);
foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number];
    }
}
echo '<hr>';
echo date('d.');
$kuud = array(
    '1' => 'jaanuar',
    '2' => 'veebruar',
    '3' => 'märts',
    '4' => 'aprill',
    '5' => 'mai',
    '6' => 'juuni',
    '7' => 'juuli',
    '8' => 'august',
    '9' => 'september',
    '10' => 'oktoober',
    '11' => 'november',
    '12' => 'detsember',
);

$kuuNumber = date('n');
foreach ($kuud as $number=>$nimetus){
    if($number == $kuuNumber){
        echo $kuud[$number];
    }
}
echo date(' Y ');
foreach ($nadal as $number=>$nimetus){
    if($number == $paevaNumber){
        echo $nadal[$number];
    }
}
echo '<hr>';

$jargmineAasta = date('Y')+1;
$jaaniPaev = mktime(0, 0, 0, 6, 24, $jargmineAasta);
$hetkel = time();
$vahe = $jaaniPaev - $hetkel;
$paevasSekunditeArv = 60 * 60 * 24;
$paevadeArv = (int)($vahe / $paevasSekunditeArv);
echo $jargmineAasta.' aasta jaanipäevani on jäänud '.$paevadeArv.' päeva!';
echo '<hr>';
$minuSynnipaev = strtotime("27 November ".date('Y'));
$temaSynnipaev = strtotime("11 November ".date('Y'));
$vahe = $temaSynnipaev - $minuSynnipaev;

$vaheAastates = (int)($vahe / (60 * 60 * 24 * 30 * 12));
if($vahe < 0){
    echo 'Tema on vanem kui mina ';
} else {
    echo 'Mina on vanem kui tema ';
}
echo abs($vaheAastates).' aasta võrra<br>';
echo '<hr>';
$jargmineAasta = date('Y')+1;
$minuSynniKuuPaev = strtotime("27 November 1980");
$minuSynnipaevJargmiselAastal = strtotime("27 November ".$jargmineAasta);
// mitu aastat olen vana?
$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynniKuuPaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0) {
    echo $jargmineAasta.' sul on juubel';
} else {
    echo $jargmineAasta.' sul pole juubelit';
}
echo '<hr>';
$kell = date('H');
if($kell >= 8 and $kell < 13){
    echo 'Tere hommikust!';
} else if($kell >= 13 and $kell < 17) {
    echo 'Tere päevast!';
} else if($kell >= 17 or $kell > 0) {
    echo 'Tere õhtust!';
}