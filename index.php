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

?>
