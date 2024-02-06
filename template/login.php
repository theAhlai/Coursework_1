<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>H19-Log In Site</title>
    <meta charset="UTF-8"/>
    <meta name="author" content="MA"/>
    <link href="../login&signup.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="logo">       
        <h1>Welcome To Mistic Allure</h1>
    </div>
    <div class="login-box">
        <h1>Log In</h1>
        <form action="../script/login.php" method="POST" autocomplete="off">
            <label>E-mail</label>
            <input type="email" name="email" placeholder="email" required>
            <label>Password</label>
            <input type="password" name="password" placeholder="password" required>
            <a href="../script/login.php"><button type="submit">Submit</button></a>
        </form>
    </div>
    <p class="para-2">
        Don't have an account? <a href="7_signup.html">Sign Up Here</a>
    </p>
</body>
</html>