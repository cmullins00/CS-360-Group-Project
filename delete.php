<?php
include('db.php');
include("auth_session.php");
error_reporting(0);
$id = $_GET['rn'];
$query = "DELETE FROM USERS WHERE ID = '$id'";
$data = mysqli_query($con,$query);
if($data)
{
	echo "<font color='green'>User Deleted from Database";
}
else
{
	echo "<font color='red'>Failed to Delete User from Database";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    
</head>
<body>
        <p><a href="users.php">Back</a></p>
</body>
</html>