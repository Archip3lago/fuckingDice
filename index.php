<!DOCTYPE html>
<?php
$diceOutput = "";

require_once 'Dice.php';

$diceSides = 6;
$diceAmount = 2;


if(isset($_GET["sidor"]) and $_GET["sidor"] != null){
    $diceSides = (int) filter_input(INPUT_GET, 'sidor', FILTER_SANITIZE_SPECIAL_CHARS);
}
if(isset($_GET["antal"]) and $_GET["antal"] != null){
    $diceAmount = (int) filter_input(INPUT_GET, 'antal', FILTER_SANITIZE_SPECIAL_CHARS);
}

$dice = new Dice($diceSides);
$diceResults = $dice->rollDice($diceAmount);

function diceList($results){
    $diceOutput = "<ol>";
    foreach($results as $result){
        $diceOutput .= "<li>" . $result . "</li>";
    }
    $diceOutput .= "</ol>";
    return $diceOutput;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET">
            <input type="number" name="antal" placeholder="Antal tärningar">
            <br>
            <input type="number" name="sidor" placeholder="Antal sidor">
            <br>
            <input type="submit" name="rollDice" value="Rulla tärningsjävlarna">
        </form>  
        
        <ul>
            <li>Antal sidor på tärningen: <?php echo $diceResults["sides"] ?></li>
            <li>Antal tärningar: <?php echo $diceResults["amount"] ?></li>
            <li>Summa av tärningarna: <?php echo $diceResults["sum"] ?></li>
            <li>
        <?php
            echo diceList($diceResults["dice"]);
        ?>
        </li>
        </ul>
    </body>
</html>
