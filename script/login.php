<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // For simplicity, skipping email and password validation
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulating a successful login
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;

    // Displaying a success message
    echo '<script>alert("You have been logged in successfully!"); window.location.href = "../1_index.html";</script>';
    exit();
}
?>