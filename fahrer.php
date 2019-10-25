<!DOCTYPE html>
<html lang="DE">
    <head>
        <meta charset="UTF-8">
        <title>Fahrer</title>
    </head>

    <body>
        <h1>Fahrer (ausliefbare Bestellungen)</h1>


    <section id="fahrerBereich">
        <?php
            require_once ("kunde.php");

            $schulz = new Kunde("Schulz", "Kasinostr. 5", new KundeBestellung(["Margherita", "Salami", "Tonno"]));
        
            $lol = 0;
            

        echo "<p>".$schulz->getName().", ". $schulz->getStraße().", ".$schulz->bestellungPreis()."</p>";

     
        
        ?>     
    </section>








    </body>












</html>