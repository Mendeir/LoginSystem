<?php  

    include_once("db_connection.php");

    $sql_command = "CREATE TABLE records 
        (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            Firstname VARCHAR(100) NOT NULL,
            Middlename VARCHAR(100) NOT NULL,
            Lastname VARCHAR(100) NOT NULL,
            Birthday VARCHAR(50) NOT NULL,
            Contactno VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(60) NOT NULL,
            acesslevel VARCHAR(50) NOT NULL,
            status VARCHAR(50) NOT NULL
        )";

        if ($connection->query($sql_command) === TRUE) {
            echo "Table records created successfully";
        } else {
            echo "Error creating table: ".$connection->error;
        }

        $connection->close();
?>