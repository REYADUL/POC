<?php
    include_once 'connection.php';
    
    //pdo bind
    $query = "INSERT INTO `users`(`username`,`email`,`password`) VALUES(?,?,?,?)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(0,$username);
    $stmt->bindParam(1,$email);
    $stmt->bindParam(2,$password);
    $stmt->execute();

    if($stmt===true){
        $success = 'user insert succesfully';
    }
    else{
        $errors='error occured';

        echo $errors;
    }









   
?>
 