

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>

table,td,th
{border:1px solid black;
<!--margin:10px;-->
padding:100px;}
table
{margin-left: auto;
margin-right: auto;
}
tr,td,th
{padding:20px;
}
th
{text-decoration:underline;
}
table, tr:nth-child(even) {
    background-color: #eee;
}
table,tr:nth-child(odd) {
    background-color: #fff;
}
table {
    color: black;
    background-color: black;
}
th
{background:#663333;
color:white;
}
h1.me{

color:#333333;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Logged in</title>
</head>
<body>

<?php
require_once('config.php');
require_once('navbar1.php');

$sql="SELECT id,Name,Age,Adress,Email,Pass,Role FROM demo";
$result=mysqli_query($conn,$sql);
?>
<br ><br>
<?php
if (mysqli_num_rows($result) > 0)
{	echo "<table> 	<caption style='color:black;text-align:center;font-size:200%;text-decoration:underline'>Registered Users</caption>
<tr><th>ID</th><th>Name</th><th>Password</th><th>Age</th><th>Email</th><th>Address</th><th>Deletion</th><th>Updation</th>";

	while($row = mysqli_fetch_assoc($result))
	{
	echo "<tr><td>" .$row["id"]. "</td><td>".$row["Name"]. "</td><td>".$row["Pass"]."</td><td>".$row["Age"]. "</td><td>".$row["Email"]. "</td><td>".$row["Adress"]. "</td>";
	if($row['Role']==0)
	{echo "<td><form action='delete.php' method='POST'><input type='submit' value='Delete this user ' style='color:red;'><input type='hidden' name='id' value='".$row['id']."'></form></td>";}
	else
	{echo "</td><td>Admin user</td>";}
	echo "<td><form method='POST' action='update.php'> <input type='submit' value='Update this user '> <input type='hidden' name='vara' value='".$row['id']."'> </form></td></tr>";
	}
echo "</table>";
}




?>


</body>
</html>
