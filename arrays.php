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

echo "<br>";
function translit ($text) {

    $word = array(

    "а"=>"a",
    "б"=>"b",
    "в"=>"v",
    "г"=>"g",
    "д"=>"d",
    "е"=>"e",
    "ё"=>"e",
    "ж"=>"zh",
    "з"=>"z",
    "и"=>"i",
    "й"=>"i",
    "к"=>"k",
    "л"=>"l",
    "м"=>"m",
    "н"=>"n",
    "о"=>"o",
    "п"=>"p",
    "р"=>"r",
    "с"=>"s",
    "т"=>"t",
    "у"=>"u",
    "ф"=>"f",
    "х"=>"kh",
    "ц"=>"tc",
    "ч"=>"ch",
    "ш"=>"sh",
    "щ"=>"shch",
    "ы"=>"y",
    "э"=>"e",
    "ю"=>"yu",
    "я"=>"ya",
    "ь"=>""
    );

    return strtr($text, $word);
}
echo translit ("абв эюя");

echo "<br>";


echo "<br>";

function replacingSubstring ($str) {
    $text = array (
    " " => "_",
    "!" => "",
    "?" => "",
    "%" => ""
        );
    return strtr($str, $text);
}
echo replacingSubstring(" нетПробелам нетПробелам нетПробелам ");

echo "<br>";
echo "<br>";

function full_translit ($text) {

    $word = array(

    "а"=>"a",
    "б"=>"b",
    "в"=>"v",
    "г"=>"g",
    "д"=>"d",
    "е"=>"e",
    "ё"=>"e",
    "ж"=>"zh",
    "з"=>"z",
    "и"=>"i",
    "й"=>"i",
    "к"=>"k",
    "л"=>"l",
    "м"=>"m",
    "н"=>"n",
    "о"=>"o",
    "п"=>"p",
    "р"=>"r",
    "с"=>"s",
    "т"=>"t",
    "у"=>"u",
    "ф"=>"f",
    "х"=>"kh",
    "ц"=>"tc",
    "ч"=>"ch",
    "ш"=>"sh",
    "щ"=>"shch",
    "ы"=>"y",
    "э"=>"e",
    "ю"=>"yu",
    "я"=>"ya",
    "ь"=>"",
    " " => "_"
    );

    return strtr($text, $word);
}
echo full_translit (" нетПробелам нетПробелам нетПробелам ");

?>
