<?php
require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `books` WHERE `books`.`id` = '$id'");

header('Location: /');