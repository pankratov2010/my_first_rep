<?php
  require_once 'config/connect.php';
  $book_id = $_GET['id'];
  $book = mysqli_query($connect, "SELECT * FROM `books` WHERE `id`='$book_id'");
  $book = mysqli_fetch_assoc($book);
  //print_r($book);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Обновление книги</title>
</head>
<body>

  <a href="/">Главная</a>
  <hr>

  <h2>Обновить книгу</h2>
  <form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">
    <p>Название книги</p>
    <input type="text" name="book_title" value="<?= $book['book_title'] ?>">
    <p>Автор</p>
    <input type="text" name="authors" value="<?= $book['authors'] ?>">
    <p>Количество страниц</p>
    <input type="number" name="number_of_pages" value="<?= $book['number_of_pages'] ?>">
    <p>Год релиза</p>
    <input type="number" name="release_year" value="<?= $book['release_year'] ?>">
    <button type="submit">Обновить</button>
  </form>
  
</body>
</html>