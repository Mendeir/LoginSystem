<?php  
	session_start();
	include_once("db/db_connection.php");


	$current = $_POST['current'];
	$new = $_POST['new'];
	$reenter = $_POST['reenter'];
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.done{
		    padding: 10px;
		    background: #0077B6;
		    text-decoration: none;
		    margin: 10px;
		    border-radius: 2px;
		    font-size: 15px;
		    font-weight: 600;
		    color: #fff;
		}
	</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<?php  
			if ($current == $pass) {
				$query = "update records set password ='$reenter' where username = '$user'";
				$run = mysqli_query($connection, $query);
				if($run) {
            		echo "Record submitted successfully!";
        		} else {
            		echo "Record submission failed!";
        		}

    			$connection->close();
				echo '<h2>Password changed</h2>';
			}else{
				echo '<h2> Password do not match!!';
			}

		?>
		
		<a href="user_page.php" class="done">Done</a>
	</center>
</body>
</html>