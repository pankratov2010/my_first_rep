<?php
require_once '../config/connect.php';

//print_r($_POST);

$title = htmlspecialchars($_POST['title']);
$authors = htmlspecialchars($_POST['authors']);
$numberOfPages = htmlspecialchars($_POST['number_of_pages']);
$releaseYear = htmlspecialchars($_POST['release_year']);

if(!empty($_POST['title']) && !empty($_POST['authors']) && !empty($_POST['number_of_pages']) && !empty($_POST['release_year']))
    {

        mysqli_query($connect, "INSERT INTO `books` (`id`, `book_title`, `authors`, `number_of_pages`, `release_year`) VALUES (NULL, '$title', '$authors', '$numberOfPages', '$releaseYear')");

    }



header('Location: /');