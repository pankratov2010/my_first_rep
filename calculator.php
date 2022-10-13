<?php

function mathOperation(int|float $arg1, int|float $arg2, string $operation)
{
    switch ($operation) {
    case '+':
        $resalt = $arg1 + $arg2;
        break;
    case '-':
        $resalt = $arg1 - $arg2;
        break;
    case '*':
        $resalt = $arg1 * $arg2;
        break;
    case '/':
        $resalt = $arg1 / $arg2;
        break;
}
    
    return $resalt;
}


var_dump(mathOperation(1,4,'/'));

?>