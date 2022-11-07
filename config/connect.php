<?php
$connect = mysqli_connect('localhost', 'root', '', 'library');
if(!$connect) {
  die('Ошибка подключения к БД');
}