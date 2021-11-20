<?php session_start();  ?>

<?php 

    include_once("db_connection.php");

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $user_password = $_POST["password"];

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $user_password;


        $query = "SELECT * FROM records WHERE username='$username' AND password='$user_password'";
        $run = mysqli_query($connection, $query);
        

        if(mysqli_num_rows($run) === 1) {
            $result = mysqli_fetch_array($run);

            if ($result['acesslevel'] == 'admin')
                header("Location:../admin_home.php");
            
            if ($result['acesslevel'] == 'user')
                header("Location:../user.php");
        } else {
            echo "User Login failed!";
        }
    }



?>