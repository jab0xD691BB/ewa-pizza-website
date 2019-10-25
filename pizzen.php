<?php
    require_once("pizza.php");

    class Pizzen{
        private $pizzen;

        function __construct()
        {
            $this->pizzen = [
                "Margherita" => new Pizza("Margherita", 4.00),
                "Salami" => new Pizza("Salami", 4.50),
                "Prosciutto" => new Pizza("Prosciutto", 5.50),
                "Hawaii" => new Pizza("Hawaii", 5.00),
                "Tonno" => new Pizza("Tonno", 5.00)
            ];            

        }

        function getPizzaPreis($p){
            return $this->pizzen[$p]->getPizzaPreis();
        }



    }









?>