<?php 

class Pizza{
    private $name;
    private $preis;

    function __construct($n, $p)
    {
            $this->name = $n;
            $this->preis = $p;
    }


    function getPizzaName(){
        return $this->name;
    }

    function getPizzaPreis(){
        return $this->preis;
    }

}





?>