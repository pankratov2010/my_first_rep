<?php

mb_internal_encoding("UTF-8");     //Установка внутренней кодировки в UTF-8


define("GW_MAXFILESIZE", "5000000");        //Определеям именованную константу максимального размера загружаемого изображения



function upload_file($file) {            //функция загрузки файлов

  if ($file['name'] == '') {
    echo 'Файл не выбран!';
    return;
  }

  //Проверяем расширение и размер изображений, процесс копирования изображений в директории

  $arr = explode(".", $file['name']);                  //разбивает строку на подстроки по разделителю
  $ext = mb_strtolower($arr[count($arr)-1]);           //приведение строки к нижнему регистру
  $allowed = array('jpg', 'jpeg', 'png', 'gif');       //массив разрешенных форматов файлов

  $img_name = htmlspecialchars(trim($file['name']));   //преобразует специальные символы в HTML-сущности и удаляет пробелы из имена файла
  $thumb_name = 'thumb_' . $img_name;

  if (in_array($ext, $allowed)) {                      //проверяет, присутствует ли в массиве значение
    if ($file['size'] <= GW_MAXFILESIZE) {             //проверка размера файла
      if (copy($file['tmp_name'], 'img/'.$img_name)) { //копирует
        echo 'Файл успешно загружен';




      } else { echo 'Ошибка загрузки файла'; return;}
    } else {
      echo "Файл не должен превышать размер в 5 Мб!"; return; }
  } else {
    echo "Файл должен иметь одно из известных расширений графических изображений (gif, jpg, jpeg или png)!";
    return;
  }
}





?>