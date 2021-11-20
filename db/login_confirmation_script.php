<?php 

    include_once("db_connection.php");

    if(isset($_POST["submit"])) {
        $given_username =  $_POST["username"];
        $given_password = $_POST["password"];
        
        $sql_command = "SELECT username, user_password, user_level, user_status FROM records WHERE username='$given_username'";
        $run = mysqli_query($connection, $query);

        if ($run) {
            while($row = mysqli_fetch_array($run)) {
                if ($row['password'] == $given_password) {
                    if ($row['user_level'] == 'admin') {
                        header("Location:../admin.php");
                    } else {
                        header("Location:../user.php");
                    }
                }
            }

            echo "Invalid Password!";
        } else {
            echo("Error!");
        }


    }

?>