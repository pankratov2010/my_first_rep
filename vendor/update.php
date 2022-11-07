<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['book_title'];
$authors = $_POST['authors'];
$numberOfPages = $_POST['number_of_pages'];
$releaseYear = $_POST['release_year'];

mysqli_query($connect, "UPDATE `books` SET `book_title` = '$title', `authors` = '$authors', `number_of_pages` = '$numberOfPages', `release_year` = '$releaseYear' WHERE `books`.`id` = '$id'");

header('Location: /');