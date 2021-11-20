<!DOCTYPE html>
<html>
<head>
	<style>
		.table-design {
        border:groove  #800040;
        color: #1D3557;
        font-size: 2rem;
        text-align: center;
    }

    table {
        border-radius: 5px;
        font-weight: normal;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
    }

    th {
        color: #F1FAEE;
        font-weight: normal;
        background-color: #E63946;
        padding: 10px;
    }

    table,th,td {
        border: 2px solid #800040;
    }

    

    td {
        padding: 10px;
    }
		
	</style>
	<meta charset="utf-8">
	<title></title>
	<!--<link rel = "stylesheet" type = "text/css" href="css/record_style.css">-->

</head>
<body>
	<?php include_once("db/db_connection.php") ?>

	<center>
		<table class="container">
			
		<tr>
			<th class="head">ID</th>
			<th class="head">First Name</th>
			<th class="head">Middle Name</th>
			<th class="head">Last Name</th>
			<th class="head">Contact No.</th>
			<th class="head">Email</th>
			<th class="head">Birthday</th>
			<th class="head">Username</th>
			<th class="head">Acess Level</th>
			<th class="head">Status</th>
		</tr>
		<?php  

			$sql_command = 'select * from records';

			$result = $connection->query($sql_command);
			if ($result->num_rows > 0) {
	  		// output data of each row
	  			while($row = $result->fetch_assoc()) {
	  				echo "<tr>";
	  					echo "<td>".$row["id"]."</td>";
	    		  		echo "<td>".$row["Firstname"]."</td>";
	    		  		echo "<td>".$row["Middlename"]."</td>";
	    		  		echo "<td>".$row["Lastname"]."</td>";
	    		  		echo "<td>".$row["Contactno"]."</td>";
	    		  		echo "<td>".$row["email"]."</td>";
	  					echo "<td>".$row["Birthday"]."</td>";
	    		  		echo "<td>".$row["username"]."</td>";
	    		  		echo "<td>".$row["acesslevel"]."</td>";
	    		  		echo "<td>".$row["status"]."</td>";
	    		  	echo "</tr>";
	  			}
			} else {
	  			echo "0 results";
			}
			
		?>

		</table>
		<a href="admin_home.php">Back</a>
	</center>
</body>
</html>