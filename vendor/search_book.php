<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Поиск книги</title>
</head>
<body>

  <a href="/">Главная</a>
  <hr>

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

    require_once '../config/connect.php';

    $search = htmlspecialchars($_POST['search']);

    if(!empty($_POST['search']))
    {

      $query = mysqli_query($connect, "SELECT * FROM `books` WHERE `book_title` LIKE '%$search%' OR `authors` LIKE '%$search%'");
      $query = mysqli_fetch_all($query);
      //var_dump($query);

    }



      foreach($query as $q) {
        ?>
          <tr>
            <td><?= $q[0] ?></td>
            <td><?= $q[1] ?></td>
            <td><?= $q[2] ?></td>
            <td><?= $q[3] ?></td>
            <td><?= $q[4] ?></td>
            <td><a href="product.php?id=<?= $b[0] ?>">Просмотр</a></td>
            <td><a href="update.php?id=<?= $b[0] ?>">Обновить</a></td>
            <td><a href="vendor/delete.php?id=<?= $b[0] ?>">Удалить</a></td>
          </tr>
        <?php
      }
    ?>
  </table>