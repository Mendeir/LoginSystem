<?php 
    session_start();
    include_once("db/db_connection.php") 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href="css/style.css">
    <title>Change Password</title>

</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentpass"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit" name="change">
</form>
<br>
<br>
<?php
    if(!empty($_POST['change']))
    {
        $old_pass =$_POST['currentpass'];
        $new_pass =$_POST['newPassword'];
        $confirm_pass =$_POST['confirmPassword'];
        if($new_pass == $confirm_pass){
            $query ="SELECT * from records where password='$old_pass'";
            $result = mysqli_query($connection, $query);
            $count = mysqli_num_rows($result);
            if($count>0){
                $query = "UPDATE records set password ='$new_pass'";
                mysqli_query($connection, $query);
                echo "Password Updated Successfully";
            }else{
                echo "Old password does not match";
            }
        }
        else{
            echo "New Password & Confirm New Password does not match";
        }
    }
?>
<br>
<a href="admin_home.php">Back</a>
</body>
</html>