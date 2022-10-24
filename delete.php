<?php
include("db.php");
error_reporting(0);

$temp = $_GET['var'];
$sql = "DELETE FROM users WHERE id = '$temp'";

$data=mysqli_query($con, $sql);

if($data)
{
	echo $a;
	echo "<font color = 'green'>Record Deleted from Database";
}
else 
{
	echo "<font color = 'red'>Failed to Delete Record from Database";
}

?>

<!DOCTYPE html>
<html>
	<body>
		<br>
		<a href = "table.php?">Return to Table</a>
		<br>
		<a href = "logout.php?">Logout</a>
	</body>
</html>