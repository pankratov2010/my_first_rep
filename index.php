<?php

require_once 'functions.php';

?>

    <div class="homework">

    </p>
        <h2><center>Здесь можно добавить изображения на страницу!</center></h2>

        <?php
            if (isset($_FILES['file'])) {
                upload_file($_FILES['file']);
            }
         ?>

        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" class="gallery_input">
            <input type="submit" value="Загрузить файл!" class="gallery_button">
        </form>



        <?php

        $current_page = mb_substr($_SERVER['REQUEST_URI'], 0, 29);



        //Вывод миниатюр на экран
        $handle = opendir('thumbs');

        $allowed = array('.jpg', 'jpeg', '.png', '.gif');

        if ($handle != false) {
            echo "<h1>Галерея:</h1><br>";

            while (false !== ($file = readdir($handle))) {

                $a = mb_substr($file, -4);


                if (in_array($a, $allowed) && $file != '.' && $file != '..' && $file != '.DS_Store'){
                    $full_size = mb_substr($file, 6);
                    echo "<a href=img/$full_size target=\"_blank\"><img src=\"thumbs/$file\" alt=\"\"></a>";
                }

            }

            echo "</div>";
            closedir($handle);
        }

        ?>

    </div>

    </body>
