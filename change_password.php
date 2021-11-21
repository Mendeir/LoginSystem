<?php  
	


?>

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background: lightcyan;
		}
		.passform{
			border: 2px solid black;
			width: 400px;
			height: 200px;
		}
	</style>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
	<center>
		<h1>Change Password</h1>
		<div class="passform">
			<form action="user_page.php" method="POST">
					<label for="price"> Current Password: </label>
                    <input type="text" id="price" name="current" required>
                    <br>
                    <label for="price"> New Password: </label>
                    <input type="text" id="price" name="new" required>
                    <br>
                    <label for="date"> Re-enter Password: </label>
                    <input type="text" id="date" name="reenter" required>
                    <br>
                    <input type="submit" id="add-item-button" name="confirm" value="confirm">
			</form>
		</div>
	</center>
</body>
</html>