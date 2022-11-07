<?php
  require_once 'config/connect.php';
  $book_id = $_GET['id'];
  $book = mysqli_query($connect, "SELECT * FROM `books` WHERE `id`='$book_id'");
  $book = mysqli_fetch_assoc($book);
  //var_dump($book);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Просмотр книги</title>
</head>
<body>

  <a href="/">Главная</a>
  <hr>

  <h2><?= $book['book_title'] ?></h2>
  <p><?= $book['authors'] ?></p>
  <p><b>Количество страниц:</b> <?= $book['number_of_pages'] ?></p>
  <p><b>Год релиза:</b> <?= $book['release_year'] ?></p>

  <hr>
  <h3>Добавить комментарий</h3>
  <form action="vendor/create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $book['id'] ?>">
    <textarea name="comment" placeholder="Комментарий"></textarea>
    <button type="submit">Отправить</button>
  </form>

  <hr>
  <h3>Комментарии</h3>
  <ul>
    <?php
      $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `book_id`='$book_id'");
      $comments = mysqli_fetch_all($comments);
      foreach($comments as $comment) {
        ?>
          <li><?= $comment[1] ?></li>
        <?php
      }
    ?>
  </ul>

</body>
</html>