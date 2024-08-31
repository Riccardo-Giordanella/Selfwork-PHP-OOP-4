<?php

abstract class Car{
    public $num_telaio;

    public function __construct($num_telaio){
        $this->num_telaio = $num_telaio;
    }

    public function getNumTelaio(){
        return $this->num_telaio;
    }
}

class Fiat extends Car{
    public $license;
    public $name;

    public function __construct($num_telaio, $license, $name){
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->name = $name;
    }

    public function printDetails(){
        echo "La mia macchina e' {$this->name}, con targa {$this->license} e numero di Telaio {$this->getNumTelaio()}";
    }
}

$panda = new Fiat(1234, 'ND 123 OJ', 'Opel');
$panda->printDetails();