<?php 
    session_start();

    include_once("db_connection.php");

    if(isset($_POST["submit"])) {
        $username = $_POST["username"];
        $user_password = $_POST["password"];

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $user_password;


        $query = "SELECT * FROM records WHERE username='$username' AND password='$user_password'";
        $run = mysqli_query($connection, $query);
        

        if((mysqli_num_rows($run) === 1)) {
            $result = mysqli_fetch_array($run);
            $_SESSION['fname'] = $result['Firstname'];
            $_SESSION['lname'] = $result['Lastname'];
            $_SESSION['user'] = $result['username'];
            $_SESSION['lvl'] = $result['acesslevel'];
            $_SESSION['bday'] = $result['Birthday'];
            $_SESSION['num'] = $result['Contactno'];
            $_SESSION['ema'] = $result['email'];
            $_SESSION['pass'] = $result['password'];
            echo "umabot dito";
            if ($result['status'] == 'active') {
                if ($result['acesslevel'] == 'admin')
                header("Location:../admin_home.php");
            
                if ($result['acesslevel'] == 'user')
                    header("Location:../user_page.php");
            } else {
                header("Location:../login.php?error=accountinactive");
            }

        } else {
            header("Location:../login.php?error=wronglogin");
        }
    }
?>