<form action="/" method="post" enctype="multipart/form-data">
    <label for="user">User:</label>
    <input type="text" id="user" name="user">
    <br>
    <label for="message">Message:</label>
    <input type="text" id="message" name="message">
    <br>
    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo">
    <input type="hidden" name="csrf-token" value="test555" />
    <br>
    <input type="submit" value="Post message!">
</form>
<hr>
<?php
    require_once 'db.php';

    $token = 'test555';
    if(!empty($_POST['user']) && !empty($_POST['message']) && $token === $_POST['csrf-token'])
    {
        $username = $_POST['user'];
        $message = $_POST['message'];
        $file = null;

        if($_FILES['photo']['size'] > 0) {
            $file = $_FILES['photo'];
            $filename = 'files/'.uniqid().'_'.$file['name'];
            if(move_uploaded_file($file['tmp_name'],$filename))
            {
                $file = $filename;
            }
        }

        addMessage($username, $message, $file);
    }

    foreach (getMessages() as $m) {
        echo '<div>'.$m['created_at'].'<br><br><h3>'.$m['username'].'</h3><br>'.htmlspecialchars($m['message']);
        if(!empty($m['file'])){
            echo '<br><br><a href=/'.$m['file'].'>Файл</a>';
        }
        echo '</div><hr>';
    }
