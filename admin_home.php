<?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'LoginSystem');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
    <title>My Information</title>
</head>
<body>

	
		
		<div class="title"> <h1> My Information </h1></div>
		<?php
		 $sql_command = "SELECT image_path FROM images";
         $result = $connection->query($sql_command);

	     if ($result-> num_rows > 0) {
	     while($row = $result-> fetch_assoc()) {
                echo ' <div class="image" align="right"><img src="'.$row["image_path"].'" alt="Item"></div>';
	            }
	        }
		?>
		<br><br><br><br><br><br><br>
		<form action="login.php" method="post" class="info">
		<?php
		
		

			$username =$_SESSION['username'];
			$query = "SELECT * FROM records WHERE username ='$username'";
			$query_run = mysqli_query($connection,$query);
			while($row = mysqli_fetch_array($query_run)){
				?>
				<p><strong>Welcome: </strong><?php echo $row['Firstname']." ".$row['Middlename']." ".$row['Lastname']; ?></p>
				<p><strong>Userlevel: </strong><?php echo $row['acesslevel']; ?> </p>
				<p><strong>Birthday: </strong><?php echo $row['Birthday']; ?> </p>
				<p><strong>Contact Details</strong></p>
				<p>&emsp;<strong>Contact: </strong><?php echo $row['Contactno']; ?> </p>
				<p>&emsp;<strong>Email: </strong><?php echo $row['email']; ?> </p>
				<?php
			}
		?>
	</form>
	<a href="reset_password.php">Update Password</a>&emsp;&emsp; 
	<a href="upload.php">Upload Image</a>
	<br><br>
	<a href="logout.php">Logout</a>
	<br>
	<h1>-Records-</h1>
	<a href="admin_adduser.php">Add New User</a>
	<?php
	include_once("view_records.php");
	?>
	<br>
</body>
</html>
