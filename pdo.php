<?php

    $dsn = 'mysql:host=localhost;dbname= mydb';

    $username = 'root';
    $password = '';

    try{
        $connection = new PDO($dsn,$username,$password);

        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }
    

    var_dump($connection);
    echo 'ok';
?>
