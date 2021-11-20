<?php  

    include_once("db_connection.php");

    $sql_command = "CREATE TABLE images 
        (
            image_path VARCHAR(255) PRIMARY KEY
        )";

        if ($connection->query($sql_command) === TRUE) {
            echo "Table records created successfully";
        } else {
            echo "Error creating table: ".$connection->error;
        }

        $connection->close();
?>
            