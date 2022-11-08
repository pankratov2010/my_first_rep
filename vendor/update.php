<?php
require_once '../config/connect.php';

$id = htmlspecialchars($_POST['id']);
$title = htmlspecialchars($_POST['book_title']);
$authors = htmlspecialchars($_POST['authors']);
$numberOfPages = htmlspecialchars($_POST['number_of_pages']);
$releaseYear = htmlspecialchars($_POST['release_year']);


if(!empty($_POST['book_title']) && !empty($_POST['authors']) && !empty($_POST['number_of_pages']) && !empty($_POST['release_year']))
    {

        mysqli_query($connect, "UPDATE `books` SET `book_title` = '$title', `authors` = '$authors', `number_of_pages` = '$numberOfPages', `release_year` = '$releaseYear' WHERE `books`.`id` = '$id'");

    }


header('Location: /');