<?php
    // get data from url
    $email = $_GET['email'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
 
    <form action="../script/update.php" method="post">
 

    <label for="firstname">firstname</label>
    <input value="<?php echo $firstname ?>" type="text" name="firstname"> <br>
    
    <br><br>
    <label for="lastname">lastname</label>
    <input value="<?php echo $lastname ?>" type="text" name="lastname"><br>
    <br> <br>
    <label for="email">email</label>
    <input value="<?php echo $email ?>" type="text" name="email"> <br>
    <br><br>
    <input type="submit" name="submit" value="update"> <br>
    </form>
 
 
</body>
</html>