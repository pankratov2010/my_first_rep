<?php
    function connect() {
        $pdo = new PDO(                                  //создаем новый объект класса PDO(подключения к базе)
            'mysql:host=localhost;dbname=otus',          //параметры подкл
            'root',                                      //имя польз
            'defender',                                  //пароль
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::FETCH_ASSOC => true
            ]
        );

        return $pdo;
    }

    function addMessage($username, $message, $file=null) {
        $pdo = connect();
        $sqlQuery = "INSERT INTO messages (username, message, file) VALUES (?, ?, ?)";
        $result = $pdo->prepare($sqlQuery);
        $result->execute([
            $username, $message, $file
        ]);
    }

    function getMessages() {
        $pdo = connect();
        $result = $pdo->query('select * from messages order by id desc');
        $result->execute();
        $data = $result->fetchAll();
        return $data;
    }
