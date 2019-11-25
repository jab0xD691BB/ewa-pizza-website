<?php

class BestellungObj{

public $bestellId;
public $adresse;
public $pi;
public $preis;
public $pizzaToString;
public $bestellStatus;

function __construct($b, $a, $bS)
{
    $this->bestellId = $b;
    $this->adresse = $a;
    $this->bestellStatus = $bS;
    
}

function addPizzaPreis($p){
    $this->pi = $p;
    for($i = 0; $i < count($p); $i++){
        $this->pizzaToString .= $p[$i]->getPizzaName() .", ";
        $this->preis += $p[$i]->getPizzaPreis();
    }

    $this->pizzaToString = substr($this->pizzaToString, 0, -2);
}

function allePizzenFertig(){
    $counter = 0;
    for($i = 0; $i < count($this->pi); $i++){
        if($this->pi[$i]->getPizzaStatus() == "fertig"){
            $counter++;
        }
    }

    if($counter == count($this->pi)){
        $this->bestellStatus = "fertig";
    }
       
    
}

}

?>