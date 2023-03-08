<?php
    // $dsn = 'mysql:host=localhost'; (just connected database);
     define('DSN','mysql:dbname=mydb;host=localhost');
     define('USERNAME','root');
     define('PASSWORD','');
     try{
         $connection = new PDO(DSN,USERNAME,PASSWORD);
         var_dump($connection);
         $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     }
     catch(PDOException $exception){
         echo $exception->getMessage();
     }   

?>
