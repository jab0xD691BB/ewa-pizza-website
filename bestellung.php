<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <!-- für später: CSS include -->
    <!-- <link rel="stylesheet" href="XXX.css"/> -->
    <!-- für später: JavaScript include -->
    <!-- <script src="XXX.js"></script> -->

    <?php header("Content-type: text/html; charset=UTF-8")?>

    <title>Bestellung</title>
</head>

<body>
    <header>
        <h1>
            <!-- h1 - h6 header(groß & bold) / nicht einfach nur <h1>-->
            Bestellung
        </h1>
    </header>

    

    <h1>Speisekarte</h1>
    <section> 
    <p data-preis="4.00">Margherita</p>
    <p>4.00€</p>
    <p data-preis="4.50">Salami</p>
    <p>4.50€</p>
    <p data-preis="5.00">Hawaii</p>
    <p>5.50€</p>
    </section>


    <h1>
        Warenkorb
    </h1>

    <form action="https://echo.fbi.h-da.de/" method="POST" accept-charset="UTF-8">
        <select name="pizzen[]" size="7" multiple>
            <option value="margherita">Margherita</option>
            <option value="salami">Salami</option>
            <option value="hawaii">Hawaii</option>
        </select>

        <p>14.50€</p>


        <p><input type="text" name="adresse" placeholder="Ihre Adresse" required></p>


        <button type="button">Alle Löschen</button>
        <button type="button">Auswahl Löschen</button>
        <input type="submit" value="Bestellen">
    </form>




</body>

</html>