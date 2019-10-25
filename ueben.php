<?php 
    header ("Content-type: text/html");
    $title="Hello PHP";


    class Pizza{
        
        private $name;
        private $preis;

        public function __construct($n, $p){
            $this->name = $n;
            $this->preis = $p;
        }

        function getName(){
            return $this->name;
        }
    
        function getPreis(){
            return $this->preis;
        }


    }


?>

<!DOCTYPE html>
<html lang="de">
<?php 
        echo <<<EOT
        <head>
            <meta charset="UTF-8"/>
            <title>$title</title>
        </head>    
        EOT;
    ?>

<body>  

    <?php
   
    $a = [
        0 => new Pizza("Salami", 4.50),
        1 => new Pizza("Margherita", 5.00),
        2 => new Pizza("Hawaii", 5.50)
    ];
    for($i = 0; $i < count($a); $i++){
        $t = "<p>" . $a[$i]->getName(). " " . number_format($a[$i]->getPreis(), 2, '.', ' '). "€". "</p>";
        echo $t;
    }

    

   
    
    ?>



    <form method="POST" action="http://127.0.0.1/pizzaservice/ueben.php?">
        <p><input name="t" type="text" placeholder="gib was ein"></p>
        <p><input type="submit"></p>
        <?php 
        
        
        $pizza = $_POST["t"];

        for($i = 0; $i< count($a);$i++){
            if($a[$i]->getName() == $pizza){
                $stelle =  $i+1;
                 echo "gefunden an stelle ". $stelle;
                 return;
            }
        }
        
        ?>

       


    </form>

    
    
</body>


<html>