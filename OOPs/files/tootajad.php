<style>
    table, tr, th, td {
        border: 1px solid #333;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<?php
$andmeFail = 'tootajad.csv';
$andmed = array();
echo '<h3>Andmed</h3>';
echo '<table>';
echo '
    <thead>
        <tr>
            <th>nimi</th>
            <th>sugu</th>
            <th>palk</th>
        </tr>
    </thead>';
echo '<tbody>';
$sisu = fopen($andmeFail, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($sisu)){
    $rida = fgetcsv($sisu, filesize($andmeFail),';');
    $andmed[] = $rida;
    echo '<tr>';
    $arv = count($rida); //rea väljade arv
    if($arv == 3) {
        for ($i = 0; $i < $arv; $i++) {
            echo '<td>' . utf8_encode($rida[$i]) . '</td>';
        }
        echo '</tr>';
    }
}
fclose($sisu);
echo '<tbody>';
echo '</table>';
echo '<hr>';
// arvutame ja väljastame statistika
// keskmine palk
function keskminePalk($andmestik, $sugu){
    $palgaSumma = 0;
    foreach ($andmestik as $isik) {
        if($isik[1] === $sugu){
            $palgaSumma = $palgaSumma + $isik[2];
        }
    }
    $keskminePalk = round($palgaSumma / count($andmestik), 2);
    return $keskminePalk;
}

//suurem palk
function suuremPalk($andmestik, $sugu){
    $suurem = 0;
    foreach ($andmestik as $isik) {
        if($isik[1] === $sugu){
            if($isik[2] > $suurem) {
                $suurem = $isik[2];
            }
        }
    }
    return $suurem;
}
echo '<h3>Statistika</h3>';
// keskmine meestel
echo 'Meeste keskmine palk = '.keskminePalk($andmed, 'm').'&euro;<br>';
// keskmine  naistel
echo 'Naiste keskmine palk = '.keskminePalk($andmed, 'n').'&euro;<br>';
// suurem meestel
echo 'Meeste suurem palk = '.suuremPalk($andmed, 'm').'&euro;<br>';
// suurem naistel
echo 'Naiste suurem palk = '.suuremPalk($andmed, 'n').'&euro;<br>';
if(keskminePalk($andmed, 'm') != keskminePalk($andmed, 'n')) {
    echo 'Järeldus statistikast: andtud kontoris esineb diskrimineerimist soo järgi';
}