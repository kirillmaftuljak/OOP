<?php

require_once 'burger.php';
class LuxuryBurger extends burger
{
    public function __construct(){
        parent::__countruct('LuxuryBurger','loomaliha ja peekon', 'valge sai', 12.65);
        parent::lisand1()
    }

    public function valikLisand1($lisand1, $lisand1Hinnang){
        echo 'Lisandite juurde lisamine antud burgeri valikule pole voimalik<br>';
    }
    public function valikLisand2($lisand2, $lisand2Hinnang){
        echo 'Lisandite juurde lisamine antud burgeri valikule pole voimalik<br>';
    }
    public function valikLisand3($lisand3, $lisand3Hinnang){
        echo 'Lisandite juurde lisamine antud burgeri valikule pole voimalik<br>';
    }
    public function valikLisand4($lisand4, $lisand4Hinnang){
        echo 'Lisandite juurde lisamine antud burgeri valikule pole voimalik<br>';
    }
}