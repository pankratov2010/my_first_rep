<?php

function addition(int|float $arg1, int|float $arg2){
	$resalt = $arg1 + $arg2;
	echo $resalt;
}

function subtraction(int|float $arg1, int|float $arg2){
	$resalt = $arg1 - $arg2;
	echo $resalt;
}

function division(int|float $arg1, int|float $arg2){
	$resalt = $arg1 / $arg2;
	echo $resalt;
}

function multiplication(int|float $arg1, int|float $arg2){
	$resalt = $arg1 * $arg2;
	echo $resalt;
}

function mathOperation(int|float $arg1, int|float $arg2, string $operation){
	
    switch ($operation) {
    case '+':
        addition($arg1, $arg2);
        break;
    case '-':
        subtraction($arg1, $arg2);
        break;
    case '*':
        multiplication($arg1, $arg2);
        break;
    case '/':
        division($arg1, $arg2);
        break;
}
    
   
}
mathOperation(1, 4, '*')

?>
