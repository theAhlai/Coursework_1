<?php
    include_once '../config/database.php';
    include_once '../controllers/UserControllers.php';  

    // start the session:
    session_start();

    // Access the controllers class
    $UserControllers = new UserControllers();
    $allusers = $UserControllers -> getUsers();

    // make a all users session
    $_SESSION['allusers'] = $allusers;

?>