<?php 

    include_once("db_connection.php");
    

    if(isset($_POST["upload"])) {
        $image = $_FILES["image"];
        $image_name = $image["name"];
        $image_tmp_name = $image["tmp_name"];
        $image_extension = explode('.', $image_name);
        $final_image_extension = strtolower(end($image_extension));

        $new_filename = uniqid('', true).".".$final_image_extension;
        $database_file_destination = "img/".$new_filename;
        $file_destination = "../img/".$new_filename;
        move_uploaded_file($image_tmp_name, $file_destination);

        $query = "INSERT INTO images(image_path) VALUES('$database_file_destination')";

        $run = mysqli_query($connection, $query);

        if($run) {
            echo "Record submitted successfully!";
        } else {
            echo "Record submission failed!";
        }
    }
?>