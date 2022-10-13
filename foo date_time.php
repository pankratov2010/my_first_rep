<?php


function date_time() {
$h = date("H");
$m = date("i");
if ($h==1 || $h==21) {
$hours = " час";}
elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
$hours = " часа";}
else {$hours = " часов";}

if ($m % 10 === 1 && $m != 11) {
$minutes = " минута.";}
elseif (($m % 10 >= 2 && $m % 10 <= 4) && ($m !== 12 && $m !== 13 && $m !== 14)) {
$minutes = " минуты.";}
else {
$minutes = " минут.";}
$d = date('D M Y год, ');
$t = $h . $hours . " " . $m . $minutes;

echo $d, $t;


}
date_time()

?>