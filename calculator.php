<?php

function addition(int|float $arg1, int|float $arg2)
	{
	$resalt = $arg1 + $arg2;
	return ($resalt);
	}

function subtraction(int|float $arg1, int|float $arg2){
	$resalt = $arg1 - $arg2;
	return ($resalt);
}

function division(int|float $arg1, int|float $arg2){
	$resalt = $arg1 / $arg2;
	return ($resalt);
}

function multiplication(int|float $arg1, int|float $arg2){
	$resalt = $arg1 * $arg2;
	return ($resalt);
}

function mathOperation(int|float $arg1, int|float $arg2, string $operation){
    switch ($operation) {
    case '+':
        return(addition($arg1, $arg2));
        break;
    case '-':
        return(subtraction($arg1, $arg2));
        break;
    case '*':
        return(multiplication($arg1, $arg2));
        break;
    case '/':
        return(division($arg1, $arg2));
        break;
	}
}
  
{ 

echo (mathOperation(12, 2, '/'));

}
?>
