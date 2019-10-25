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
        <?php
        echo <<<EOT
        <form action="https://echo.fbi.h-da.de/" method="POST" id="test1">
            <table>
                <tr>
                    <th></th>               
                    <th>bestellt</th>
                    <th>im Ofen</th>
                    <th>fertig</th>
                </tr>
                <tr id="margherita">
                <th>Margherita</th>
                    <td>
                    <input type="radio" name="statusMar" value="bestellt">
                    </td>
                    <td>
                    <input type="radio" name="statusMar" value="imOfen">
                    </td>
                    <td>
                    <input type="radio" name="statusMar" value="fertig">
                    </td>
                </tr>
                <tr id="Salami">
                <th>Salami</th>
                    <td>
                    <input type="radio" name="statusSa" value="bestellt">
                    </td>
                    <td>
                    <input type="radio" name="statusSa" value="imOfen">
                    </td>
                    <td>
                    <input type="radio" name="statusSa" value="fertig">
                    </td>
                </tr>
                <tr id="Hawaii">
                <th>Hawaii</th>
                    <td>
                    <input type="radio" name="statusHaw" value="bestellt">
                    </td>
                    <td>
                    <input type="radio" name="statusHaw" value="imOfen">
                    </td>
                    <td>
                    <input type="radio" name="statusHaw" value="fertig">
                    </td>
                </tr>
            </table>
        </form>
        <input type="submit" form="test1">
        EOT;
        ?>
    </section>

    
    


</body>




</html>