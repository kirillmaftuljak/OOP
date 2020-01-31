<?php

require_once 'burger.php';
class TerveslikBurger extends Burger
{
    private $tervislikLisand1 = '';
    private $tervislikLisand2Hinnang = 0.0;
    private $tervislikLisand2 = '';
    private $tervislikLisand2Hinnang = 0.0;

    public function __construct($liha, $hind){
        parent::__construct('Tervislik', $liha, 'sai tervislik', $hind);
    }

    public function valiTervislikLisand1($tervislikLisand1, $tervislikLisand1Hinnang){
        $this->tervislikLisand1 = $tervislikLisand1;
        $this->tervislikLisand2Hinnang = $tervislikLisand2Hinnang;
    }

    public function valiTervislikLisand2($tervislikLisand2, $tervislikLisand2Hinnang){
        $this->tervislikLisand2 = $tervislikLisand2;
        $this->tervislikLisand2Hinnang = $tervislikLisand2Hinnang;
    }

    public function teemeBurger(){
        $burgeriLoppHind = parent::teemeBurger();
        if($this->tervislikLisand1 !== ''){
            $burgeriLoppHind += $this ->tervislikLisand1Hinnang;
            echo 'Lisadeks on valitud '.$this->tervislikLisand1.', mis maksab '.$this->tervislikLisand1Hinnang.'EUR;<br>';
        }
        if($this->tervislikLisand2!== ''){
            $burgeriLoppHind += $this ->tervislikLisand2Hinnang;
            echo 'Lisadeks on valitud '.$this->tervislikLisand2.', mis maksab '.$this->tervislikLisand2Hinnang.'EUR;<br>';
        }
    }

}