<?php
  require_once '../config/connect.php';

  $id_book = htmlspecialchars($_POST['id']);
  $comment = htmlspecialchars($_POST['comment']);

  if(!empty($_POST['comment']) && !empty($_POST['id']))
    {

        mysqli_query($connect, "INSERT INTO `comments` (`id`, `book_id`, `comment`) VALUES (NULL, '$id_book', '$comment')");

    }



  header('Location: /product.php?id=' . $id_book);