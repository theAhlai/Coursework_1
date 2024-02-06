<?php

    //connect to database
    include_once '../config/database.php';
    include_once '../controllers/UserControllers.php';
    global $connection;

    // get email from url
    $email = $_GET['email'];

    // SQL query to delete user
    $sqlQuery = "
        DELETE FROM users
        WHERE email = '$email';
    ";

    if($connection -> query($sqlQuery) === TRUE){
        echo "<script>alert('Deleted!')</script>";
        echo "<script>
            window.location.href = '../template/view.php';
        </script>";
    } else{
        echo "<script>alert('Error in delete!')</script>";
    }

?>