<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
</head>
<body>


<?php

$menu = array ("Главная", "Услуги" => array ("Разработка веб-сайтов", "СЕО-оптимизация", "Контекстная реклама"), "О компании" => array ("Наша миссия", "История", "Портфолио"), "Контакты");

echo "<ul>";
foreach ($menu as $count => $itemname) {

    if (gettype($itemname) == "array" ) {
        echo "<li>".$count."<ul>";
        foreach ($itemname as $itemname2) {
            echo "<li>".$itemname2."</li>";
        }
        echo "</ul>";
    }
    else echo "<li>".$itemname."</li>";
}

?>

</body>
</html>