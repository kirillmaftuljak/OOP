<?php

class burger {
    private $nimetus = '';
    private $liha = '';
    private $sai = '';
    private $hind = '0';
    private $lisand1 = '0';
    private $lisand1hind = '';
    private $lisand2 = '';
    private $lisand2hind = '0';
    private $lisand3 = '';
    private $lisand3hind = '0';
    private $lisand4 = '';
    private $lisand4hind = '0';


    public function __construct($nimetus, $liha, $sai, $hind)
    {
        $this->nimetus = $nimetus;
        $this->liha = $liha;
        $this->sai = $sai;
        $this->hind = $hind;
    }

    public function lisand1hinnang{
        $this->lisand1 = $lisand1;
        $this->lisand1hind = $lisand1hind;
    }

    public function lisand2hinnang{
        $this->lisand2 = $lisand2;
        $this->lisand2hind = $lisand2hind;
    }

    public function lisand3hinnang {
        $this->lisand3 = $lisand3;
        $this->lisand3hind = $lisand3hind;
    }

    public function lisand4hinnang {
        $this->lisand4 = $lisand4;
        $this->lisand4 = $lisand4hind;
    }


    public function setBurger1($burger1)
    {
        $adds = array("nimetus","liha,","sai","hind");

        if(in_array($burger1,$adds)){
            $this -> burger1 = $burger1;
        }else{
            $this -> burger1 = "praegu pole sellist burgerit";
        }
    }
}


































