<?php
  require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Библиотека</title>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>Название книги</th>
      <th>Автор</th>
      <th>Количество страниц</th>
      <th>Год релиза</th>
      <th>&#9672;</th>
      <th>&#9998;</th>
      <th>&#10006;</th>
    </tr>

    <?php
      $books = mysqli_query($connect, "SELECT * FROM `books`");
      $books = mysqli_fetch_all($books);
      foreach($books as $b) {
        ?>
          <tr>
            <td><?= $b[0] ?></td>
            <td><?= $b[1] ?></td>
            <td><?= $b[2] ?></td>
            <td><?= $b[3] ?></td>
            <td><?= $b[4] ?></td>
            <td><a href="product.php?id=<?= $b[0] ?>">Просмотр</a></td>
            <td><a href="update.php?id=<?= $b[0] ?>">Обновить</a></td>
            <td><a href="vendor/delete.php?id=<?= $b[0] ?>">Удалить</a></td>
          </tr>
        <?php
      }
    ?>
  </table>

  <h2>Добавить книгу</h2>
  <form action="vendor/create.php" method="post">
    <p>Название книги</p>
    <input type="text" name="title">
    <p>Автор</p>
    <textarea name="authors"></textarea>
    <p>Количество страниц</p>
    <input type="number" name="number_of_pages">
    <p>Год релиза</p>
    <input type="number" name="release_year">
    <button type="submit">Добавить</button>
  </form>

</body>
</html>