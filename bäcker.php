<!DOCTYPE html>
<html lang="DE">

<head>
    <meta charset="UTF-8">
    <title>Bäcker</title>
</head>

<body>
    <h1>
        Pizzabäcker (bestellte Pizzen)
    </h1>


    <section id="bestellBereich">
        <!--<?php
        echo <<<EOT
        EOT;
        ?>-->
        <form action="https://echo.fbi.h-da.de/" method="POST" id="test1">
            <div class="table">
                <div class="tr">
                    <div class="th"></div>               
                    <div class="th">bestellt</div>
                    <div class="th">im Ofen</div>
                    <div class="th">fertig</div>
                </div>
                <div id="margherita">
                <div class="th">Margherita</div>
                    <div class="td">
                    <input type="radio" name="statusMar" value="bestellt" checked>
                    </div>
                    <div class="td">
                    <input type="radio" name="statusMar" value="imOfen">
                    </div>
                    <div class="td">
                    <input type="radio" name="statusMar" value="fertig">
                    </div>
                </div>
                <div id="Salami">
                <div class="th">Salami</div>
                    <div class="td">
                    <input type="radio" name="statusSa" value="bestellt">
                    </div>
                    <div class="td">
                    <input type="radio" name="statusSa" value="imOfen" checked>
                    </div>
                    <div class="td">
                    <input type="radio" name="statusSa" value="fertig">
                    </div>
                </div>
                <div id="Hawaii">
                <div class="th">Hawaii</div>
                    <div class="td">
                    <input type="radio" name="statusHaw" value="bestellt">
                    </div>
                    <div class="td">
                    <input type="radio" name="statusHaw" value="imOfen">
                    </div>
                    <div class="td">
                    <input type="radio" name="statusHaw" value="fertig" checked>
                    </div>
                </div>
            </div>
        </form>
        <input type="submit" form="test1">
    </section>

    
    


</body>




</html>