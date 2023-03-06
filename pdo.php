<?php
    $dsn = 'mysql:host=localhost';

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


    // $connection = new mysqli('localhost','root','','userdb');
    // if(! $connection){
    //      var_dump($connection) ;
    // }
    // else echo 'connected !'. '<br><br>';
   
    // $link = mysqli_connect("localhost", "root", "",'userdb');
 
    // if($link === false){
    //     die("ERROR: Could not connect. " . mysqli_connect_error());
    // }
 
    // echo "Connect Successfully. Host info: " . mysqli_get_host_info($link).'<br><br>';


    // $connection = new PDO('mysql:host=localhost','root','');
    // var_dump($connection);




    

    
   
?>
