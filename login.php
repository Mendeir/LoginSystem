<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <h3>Log In Form</h3>
    </header>

    
    <section>
        
        <form action="db/db_login_user.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <input type="submit" id="save-button" name="submit" value="Login">
        </form>

    </section>


</body>
</html>