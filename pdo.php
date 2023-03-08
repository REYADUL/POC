<?php
    include_once 'connection.php';
    
    $query = "INSERT INTO `users`(`username`,`email`,`password`) VALUES(`$username`,`$email`,`$password`)";

    $stmt = $connection->query($query);
    $stmt->execute();

    if($stmt===true){
        $success = 'user insert succesfully';
    }
    else{
        $errors='error occured';

        echo $errors;
    }









   
?>
 