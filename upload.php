<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
<title>Upload</title>
</head>
<body>
  
  <form method="POST" action="db/insert_image.php" enctype="multipart/form-data">
  	  	
  	  <input type="file" name="image">  	
  	  <button type="submit" name="upload">Upload Image</button>
  	
  </form>
  <br>
  <a href="admin_home.php">Back</a>
</body>
</html>