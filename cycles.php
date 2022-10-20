<?php

function divisionNumbersInBetween (int $arg1, int $arg2, int $arg3){

    while ($arg1 <= $arg2) {

        if ($arg1 % $arg3 == 0){
            $array[] = $arg1;
        }
        $arg1++;
    }

return ($array);

}

var_dump (divisionNumbersInBetween (0, 100, 3));

echo '<br/>';

echo '<br/>';

function evenNotEvenNumbers (){

    $i = 0;
    do {
        if ($i == 0){
            echo $i, ' – это ноль.', '<br/>';

     }
        elseif ($i % 2 == 0){
            echo $i, ' – четное число.', '<br/>';
     }
        elseif ($i % 2 != 0){
            echo $i, ' – нечетное число.', '<br/>';
     }
        $i++;
    } while ($i <= 10);

}

evenNotEvenNumbers ();

echo '<br/>';

echo '<br/>';

for ($i=0; $i <= 9; print($i++)) {

}


?>
