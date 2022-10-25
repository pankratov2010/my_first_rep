<?php
	require_once 'functions.php';
?>
<body>
	<div class="homework">

		<h2><center>Здесь вы можете добавить свои изображения в галерею!<center></h2>

		<?php
			if (isset($_FILES['file'])) {                        //isset — Определяет, была ли установлена переменная значением, отличным от null
				upload_file($_FILES['file']);                    //вызов функции из файла functions
			}
		 ?>

		<form method="post" enctype="multipart/form-data">
			<input type="file" name="file" class="gallery_input">
			<input type="submit" value="Загрузить файл!" class="gallery_button">
		</form>
thumbs
img

		<?php

		$current_page = mb_substr($_SERVER['REQUEST_URI'], 0, 29);

		//Вывод миниатюр на экран
		$handle = opendir('thumbs');
		if ($handle != false) {
			echo "<div class=\"hw6_gallery\"><h1>Галерея:</h1><br>";

		    while (false !== ($file = readdir($handle))) {
		        if ($file != '.' && $file != '..' && $file != '.DS_Store') {
		        	$full_size = mb_substr($file, 6);
					echo "<a href=\"$current_page/img/$full_size\" class=\"flipLightBox\" target=\"_blank\"><img src=\"thumbs/$file\" alt=\"\"></a>";
				}
		    }
		    echo "</div>";
		    closedir($handle);
		}

		?>


	</div>

</body>
</html>