<?php
    // $dsn = 'mysql:host=localhost'; (just connected database);
    $dsn = 'mysql:dbname=mydb;host=localhost';
    $username = 'root';
    $password = '';

    try{
        $connection = new PDO($dsn,$username,$password);

        var_dump($connection);

        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $exception){
        echo $exception->getMessage();
    }    
   
?>
