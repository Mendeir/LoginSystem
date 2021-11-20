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
    <title>Add User</title>
</head>
<body>
    
    <header>
        <h3>Fill Up Form</h3>
        <a href="admin_home.php">Back</a>
    </header>

    
    <section>
        
        <form action="db/insert_records_script.php" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" required>

            <label for="mname">Middle Name</label>
            <input type="text" name="mname" required>

            <label for="lname">Last Name</label>
            <input type="password" name="lname" required>

            <label for="bday">Birthday</label>
            <input type="text" name="bday" required>

            <label for="number">Contact No.</label>
            <input type="text" name="number" required>

            <label for="email">Email</label>
            <input type="text" name="email" required>

            <label for="username">Username</label>
            <input type="text" name="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <label for="acess">User Level</label>
            <input type="text" name="acess" required>

            <label for="status">Status</label>
            <input type="text" name="status" required>

            <input type="submit" id="save-button" name="submit" value="Save">
        </form>

    </section>
    
</body>
</html>