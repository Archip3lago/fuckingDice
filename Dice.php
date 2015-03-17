<?php

class Dice {

    protected $diceSides;

    public function __construct($diceSides = 6){
        $this->diceSides = $diceSides;
    }
    
    
    public function rollDice($diceAmount = 1){
        $diceResults = array();
        for($i = 0; $i < $diceAmount; $i++){
            $tmpResult = rand(1, $this->diceSides);
            $diceResults["dice"][] = $tmpResult;
        }
        $diceResults["sum"] = array_sum($diceResults["dice"]);
        $diceResults["sides"] = $this->diceSides;
        $diceResults["amount"] = $diceAmount;
        
        return $diceResults;
    }
    
}
