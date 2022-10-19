<?php

$arrayObl = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
];

echo "<br>";

foreach ($arrayObl as $obl => $city) {
    echo $obl . ": <br>";
    foreach ($city as $cityName) {
        echo $cityName . "<br>";
    }
}


echo "<br>";
foreach ($arrayObl as $obl => $city) {
    echo $obl . ": <br>";
    foreach ($city as $cityName) {
        if(mb_substr($cityName,0,1) == 'К') {
            echo $cityName . "<br>";
}
}
}


?>
