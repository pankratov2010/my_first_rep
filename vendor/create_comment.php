<?php
  require_once '../config/connect.php';

  $id_book = $_POST['id'];
  $comment = $_POST['comment'];

  mysqli_query($connect, "INSERT INTO `comments` (`id`, `book_id`, `comment`) VALUES (NULL, '$id_book', '$comment')");

  header('Location: /product.php?id=' . $id_book);