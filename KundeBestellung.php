<?php 
    require_once("pizzen.php");


    class KundeBestellung{

        private $pizzen;
        private $anz = 0;
        private $pizzObj;

        function __construct($arr)
        {
            $this->pizzen = $arr;
            $this->pizzObj = new Pizzen();
        }

        function addBestellung(Pizza $p){
            $pizzen = [
                anz => p
            ];
            $this->anz++;
        }

        function getPreis(){
            $preis = 0;
            $p = null;
            for($i = 0; $i < count($this->pizzen); $i++){
                $preis += $this->pizzObj->getPizzaPreis($this->pizzen[$i]);
               
            }

            return (string)$preis;
        }

    }










?>