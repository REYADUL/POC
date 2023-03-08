<?php
    include_once 'connection.php';
    
    //pdo bind
    $query = "INSERT INTO `users`(`username`,`email`,`password`) VALUES(:username,:email,:password)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':username',$username);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':password',$password);
    $stmt->execute();

    if($stmt===true){
        $success = 'user insert succesfully';
    }
    else{
        $errors='error occured';

        echo $errors;
    }









   
?>
 