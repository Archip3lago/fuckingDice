<!DOCTYPE html>
<?php
$diceOutput = "";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            Antal Tärningar:
            <select name="diceAmount">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            Sidor på tärning:
            <select name="diceSides">
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="12">12</option>
                <option value="20">20</option>
            </select>
            <br>
            <input type="submit" name="rollDice" value="Rulla tärningsjävlarna">
        </form>  
        <?php
            echo $diceOutput;
        ?>
    </body>
</html>
