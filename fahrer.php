<!DOCTYPE html>
<html lang="DE">
    <head>
        <meta charset="UTF-8">
        <title>Fahrer</title>
    </head>

    <body>
        <h1>Fahrer (ausliefbare Bestellungen)</h1>


    <section id="fahrerBereich">
    <form action="https://echo.fbi.h-da.de/" method="POST" id="test1">
        <div id="schulzId">
        <p>Schulz, Kasinostr. 5 13,50€</p>
        <p>Margherita, Salami, Tonno</p>
        <span>fertig</span>
        <span>unterwegs</span>
        <span>geliefert</span>
        <br>        
        <span><input type="radio" name="status" value="fertig" checked></span>
        <span><input type="radio" name="status" value="unterwegs"></span>
        <span><input type="radio" name="status" value="geliefert"></span>
        </div>

        <div id="muellerId">
        <p>Müller, Rheinstr. 11 10,00€</p>
        <p>Salami, Prosciutto</p>
        <span>fertig</span>
        <span>unterwegs</span>
        <span>geliefert</span>
        <br>        
        <span><input type="radio" name="status1" value="fertig"></span>
        <span><input type="radio" name="status1" value="unterwegs" checked></span>
        <span><input type="radio" name="status1" value="geliefert"></span>
        </div>
        </form>
        <input type="submit" form="test1">
    </section>








    </body>












</html>