<?php

class Dice {

    public $diceValue;
    public $diceSides;

    function rollDice($diceSides) {
        $diceRandom = rand(1, $diceSides);
        return $diceRandom;
    }

}
