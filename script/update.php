<?php

    //connect to database
    include_once '../config/database.php';
    include_once '../controllers/UserControllers.php';

    //get data from template/register.php 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
  

    // Accessing user controller
    $UserControllers = new UserControllers();
    $updateUser = $UserControllers -> updateUser(
        $firstname, $lastname, $email
    );

    echo "<script>alert('$updateUser')</script>";


    // make status session
    // $_SESSION['status'] = $updateUser;

    // regirect to template page
    header('Location: ../template/view.php')



?>