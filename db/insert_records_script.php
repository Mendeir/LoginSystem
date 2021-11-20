<?php 

    include_once("db_connection.php");
    

    if(isset($_POST["submit"])) {
        $fname = $_POST["fname"];
        $mname = $_POST["mname"];
        $lname = $_POST["lname"];
        $bday = $_POST["bday"];
        $contact = $_POST["number"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $user_password = $_POST["password"];
        $user_level = $_POST["acess"];
        $user_status = $_POST["status"];


        $query = "INSERT INTO records(Firstname,Middlename,Lastname,Birthday,Contactno,email, username,password, acesslevel, status) 
                  VALUES ('$fname', '$mname', '$lname', '$bday', '$contact','$email', '$username','$user_password', '$user_level', '$user_status)";
        
        $run = mysqli_query($connection, $query);

        if($run) {
            echo "Record submitted successfully!";
        } else {
            echo "Record submission failed!";
        }
    }
?>