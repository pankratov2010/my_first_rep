<?php
require_once '../config/connect.php';

//print_r($_POST);

$title = $_POST['title'];
$authors = $_POST['authors'];
$numberOfPages = $_POST['number_of_pages'];
$releaseYear = $_POST['release_year'];

mysqli_query($connect, "INSERT INTO `books` (`id`, `book_title`, `authors`, `number_of_pages`, `release_year`) VALUES (NULL, '$title', '$authors', '$numberOfPages', '$releaseYear')");

header('Location: /');