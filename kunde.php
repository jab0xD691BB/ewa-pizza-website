<?php 

require_once("KundeBestellung.php");

class Kunde{

    private $name;
    private $straße;
    private $bestellung;

    function __construct($n, $s, KundeBestellung $kb)
    {
        $this->name = $n;
        $this->straße = $s;
        $this->bestellung = $kb;

    }

    function getName(){
        return $this->name;
    }

    function getStraße(){
        return $this->straße;
    }

    function getPreis(){
        return $this->preis;
    }

    function bestellungPreis(){
       
        return $this->bestellung->getPreis();
    }

}

?>