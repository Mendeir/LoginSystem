<?php 
    include_once("db_connection.php");

    $sql_command = "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Rudolf', 'Red', 'Hitler', '08/26/1988', '09174278157', 'user1@email.com', 'user1', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Veigar', 'Red', 'Hidy', '08/26/1968', '09174468157','user2@email.com', 'user2', 'user321', 'user', 'active');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Rengar', 'Red', 'Haler', '08/21/1956', '09164278157','user3@email.com', 'user3', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Akshan', 'Red', 'Butler', '05/26/1988', '09174248157','user4@email.com', 'user4', 'user321', 'user', 'active');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Jelo', 'Meridit', 'Hitler', '01/26/1988', '09274278157','user5@email.com', 'user5', 'user123', 'admin', 'active');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Mary', 'Deet', 'Haler', '08/26/1988', '09174278157','user6@email.com', 'user6', 'user321', 'user', 'disable');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Luke', 'Mia', 'Bloder', '08/16/1988', '09184278157','user7@email.com', 'user7', 'user123', 'admin', 'disable');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('John', 'Doe', 'Hitler', '08/19/1988', '09174278557','user8@email.com', 'user8', 'user321', 'user', 'disable');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Oliver', 'Floy', 'Wather', '08/21/1988', '09174238157','user9@email.com', 'user9', 'user123', 'admin', 'disable');";

    $sql_command .= "INSERT INTO records(Firstname, Middlename, Lastname, Birthday, Contactno, email, username,password, acesslevel, status)
    VALUES ('Adolf', 'Red', 'Hitler', '09/28/1988', '09174278157','user10@email.com', 'user10', 'user321', 'user', 'disable');";

    if ($connection->multi_query($sql_command) === FALSE) {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
?>