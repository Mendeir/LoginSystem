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
	<title>Change Image</title>
</head>
<body>
	<center>
		<h1>Change Password</h1>
		<div class="passform">
			<form action="user_page.php" method="POST">

					<label for="price"> New image: </label>
                    <input type="file" id="image-path" name="image-path" accept="image/png, image/jpeg" required>
                    
                    <br>
                    <input type="submit" id="add-item-button" name="confirm" value="confirm">
			</form>
		</div>
	</center>
</body>
</html>