

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
	<title>Add/Change Image</title>
</head>
<body>
	<center>
		<h1>Images</h1>
		<div class="passform">
			<form action="db/insert_image.php" method="POST" enctype="multipart/form-data">

                    <input type="file" name="image">  	
  	  				<button type="submit" name="upload">Upload Image</button>
			</form>
			<a href="user_page.php">Back</a>
		</div>
	</center>
</body>
</html>