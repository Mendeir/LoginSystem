<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,'LoginSystem');
	session_start();
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
	$user = $_SESSION['user'];
	$lvl = $_SESSION['lvl'];
    $bday = $_SESSION['bday'];
    $num = $_SESSION['num'];
    $email = $_SESSION['ema'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Information</title>
	<link rel="stylesheet" href="css/user_page_style.css" />
</head>

<body>
	<center>
	<div class="container">

		<h1>My Account</h1>

		<div class="image">
			<?php
		 		$sql_command = "SELECT image_path FROM images";
         		$result = $connection->query($sql_command);

	     		if ($result-> num_rows > 0) {
	     			while($row = $result-> fetch_assoc()) {
                		echo '<img src="'.$row["image_path"].'"width="100" height="100">';
	            	}
	        	}
			?>
			
			<a href="change_image.php" class="img">Add/Change Image</a>
		</div>
		<div class="info">
			<p class="about"><b>Fullname: </b><?php echo $fname." ".$lname; ?></p>
			<p class="about"><b>Username: </b> <?php echo $user; ?></p>
			<p class="about"><b>Level: </b> <?php echo $lvl; ?> </p>
			<p class="about"><b>Birthday: </b> <?php echo $bday; ?> </p>
			<p class="about"><b>Contact: </b> <?php echo $num; ?> </p>
			<p class="about"><b>Email: </b> <?php echo $email; ?> </p>

			<a href="change_password.php" class="change">Change Password</a>
			<a href="logout.php" class="logout">Logout</a>
		</div>


	</div>
	</center>
</body>
</html>