<?php


$a = random_int(0, 15);
echo $a, ' ';
$b = rand();
echo $b, ' ';
if ($a >= 0 && $b >= 0){
	echo ($a - $b);
}
elseif ($a < 0 && $b < 0){
	echo ($a * $b);
}
elseif ($a >= 0 && $b < 0 || $a < 0 && $b >= 0){
	echo ($a + $b);
}

?>
