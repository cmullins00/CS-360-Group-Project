<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<p><a href="dashboard.php">Dashboard</a></p>
<table>
<tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Email</th>
<th>first_name</th>
<th>last_name</th>
<th>operation</th>
</tr>

<?php
require('db.php');
include("auth_session.php");
$sql = "SELECT id, username, password, email, first_name, last_name FROM users";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["id"]. "</td>
<td>" . $row["username"] . "</td>
<td>". $row["password"]. "</td>
<td>" . $row["email"] . "</td>
<td>" . $row["first_name"] . "</td>
<td>" . $row["last_name"] . "</td>
<td><a href = 'delete.php?rn=$row[id]'>Delete</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
?>

</table>
</body>
</html>