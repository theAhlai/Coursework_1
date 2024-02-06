<?php

    //connect to database
    include_once '../config/database.php';
    include_once '../controllers/UserControllers.php';

    // start session
    session_start();

    //get data from template/register.php 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Accessing user controller
    $UserControllers = new UserControllers();
    $register = $UserControllers -> register(
        $firstname, $lastname, $email, $password
    );


    // make status session
    $_SESSION['status'] = $register;

    // regirect to template page
    header('Location: ../template/register.php')




?>