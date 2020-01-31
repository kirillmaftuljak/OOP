<?php

require_once 'burger.php';
require_once 'TerveslikBurger.php';
require_once 'LuxuryBurger.php';

$argipaevaBurger = new Burger('Argipaevane', 'looma', 'valge sai', 3.65);
$argipaevaBurger->lisand1hinnang('tomat', 0.25);
$argipaevaBurger->lisand2hinnang('salat', 0.75);
$argipaevaBurger->lisand3hinnang('juust', 1.5);
$loppHind = $argipaevaBurger->teemeBurger();
echo 'Viimane hind on'.$loppHind.'EUR;<br>';
echo '<hr>';

$tervislikBurger = new TerveslikBurger('noorlooma',5.65);
$tervislikBurger->valiTervislikLisand1('muna', 2.75);
$tervislikBurger->valiTervislikLisand2('rukkola', 1.45);
$loppHind = $tervislikBurger->teemeBurger();
echo 'Viimane hind on '.$loppHind.'EUR;<br>';
echo '<hr>';

$luxuryBurger = new LuxuryBurger();
$luxuryBurger->valiLisand1('Soovin lisada salat', 1.75);
$loppHind = $luxuryBurger->teemeBurger();
echo 'Viimane hind on'.$loppHind.'EUR;<br>';


