<?php
    session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="../login&signup.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        
        <form action="../script/register.php" method="POST">
            <h1>Create new Account</h1>
            <?php
                if(isset($_SESSION['status'])){
                    echo $_SESSION['status'];
                    unset($_SESSION['status']);
                }
            
            ?>
            <br>
            <div>
                <label for="firstname">First name</label>
                <input name="firstname" type="text" id="firstname" placeholder="Enter first name">
            </div>
            <div> 
               <label for="lastname">Last name</label>
                <input name="lastname" type="text" id="lastname" placeholder="Enter Last name">
            </div>
            <div>
                <label for="email">Email</label>
                <input name="email" type="email" id="email" placeholder="Enter email">
            </div>
            
            <div>
                <label for="password">Password</label>
                <input name="password" type="password" id="password" placeholder="Password">
            </div>
            <input type="submit">
        </form>
        <p>Already have an account?</p>
        <a href="login.php">Login</a>
    </div>
</body>
</html>