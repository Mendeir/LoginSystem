<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$connection = new mysqli($servername, $username, $password);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE LoginSystem";
if ($connection->query($sql) === TRUE) {
  echo " LoginLevelForm Database created successfully";
} else {
  echo "Error creating database: " . $connection->error;
}

$connection->close();
?>