<?php require_once 'functions.php'; ?>

    <div class="homework">

    </p>
        <h2><center>Здесь вы можете добавить изображения на сайт!</center></h2>

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

        //$current_page = mb_substr($_SERVER['REQUEST_URI'], 0, 29);

        //Вывод миниатюр на экран
        $handle = opendir('thumbs');
        if ($handle != false) {
            echo "<div class=\"hw6_gallery\"><h1>Галерея:</h1><br>";

            while (false !== ($file = readdir($handle))) {
                if ($file != '.' && $file != '..' && $file != '.DS_Store') {
                    $full_size = mb_substr($file, 6);
                    echo "<a href=img/$full_size\" class=\"flipLightBox\" target=\"_blank\"><img src=\"thumbs/$file\" alt=\"\"></a>";
                }
            }
            echo "</div>";
            closedir($handle);
        }

        ?>
<a href="img\23.jpg" target="_blank"> <img src="img\23.jpg" width=100> </a>


    </div>

</body>
</html>
