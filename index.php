<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section class="services">
        <div class="container">
            <h1>Services that connect you to your users</h1>
            <div class="services-flex">
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
                <div class="services-flex__item">
                    <img src="img/services-icon.svg" alt="Icon">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    <a href="#">link</a>
                </div>
            </div>
        </div>

        <!--button -->
        <div class="button-flex">
            <button>Load more</button>
        </div>
    </section>



    <!--<header>
        <img src="" alt="">
        <nav>
            <a href="#">asdasd</a>
            <a href="#">asdasd</a>
            <a href="#">asdasd</a>
            <a href="#">asdasd</a>
        </nav>
    </header>

    <main>
        <section class="features">

        </section>

        <section class="clients">

        </section>

        <section class="clients">

        </section>
    </main>

    <!-- Подвал -->
    <footer>


        <center>Домашнее задание вывести дату в подвал |
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
$array = array($d, $t);
echo $d, $t;


}
date_time()

?>

    </center>  <!--выводится выровненный по центру текст и функция дата с праметрами в скобках  -->


    </footer>
    <!-- /Окончание подвала /footer -->

</body>

</html>
