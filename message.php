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
#caption
{font-size:24px;
font-family:"Courier New", Courier, monospace;
color:#666666;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Messages</title>
</head>

<body>
<?php
require_once('navbar.php');
require_once('config.php');
?>


<table>
<caption id='caption'>Current status of topics submitted</caption>
<br><br>
<th>Topic</th>
<th>Time</th>
<th>Section</th>
<th>Approved(Y/N)</th>
<th>Admin Remarks</th>

<?php
session_start();
$temp=$_SESSION['Name'];
$sql="Select Topic,Time,Section,Reason,Approved FROM question WHERE Submitter='$temp'";
$result=mysqli_query($conn,$sql);
while($hey=mysqli_fetch_assoc($result))
	{
	
	echo "<tr><td>";
	echo $hey['Topic'];
	echo "</td><td>";
	echo $hey['Time'];
	echo "</td><td>";
	echo $hey['Section'];
	echo "</td><td>";
	if ($hey['Approved']==1)
	{echo "Y";}
	else
	{echo "N";}
	echo "</td><td>";
	echo $hey['Reason'];
	
	}
?>
</td></tr>

</table>
<br><br>
<table>
<caption id='caption'>Current status of replies submitted</caption>
<br><br>
<th>Reply</th>
<th>Topic</th>
<th>Time</th>
<th>Section</th>
<th>Approved(Y/N)</th>
<th>Admin Remarks</th>
<?php
$temp=$_SESSION['Name'];
$sql="Select Topic,Time,Section,Reason,Approved,Reply FROM reply WHERE Submitter='$temp'";
$result=mysqli_query($conn,$sql);

while($hey=mysqli_fetch_assoc($result))
	{
	echo "<tr><td>";
	echo $hey['Reply'];
	echo "</td><td>";
	echo $hey['Topic'];
	echo "</td><td>";
	echo $hey['Time'];
	echo "</td><td>";
	echo $hey['Section'];
	echo "</td><td>";
	if($hey['Approved']==1)
		{echo "Y";}
	else
		{echo "N";}
	echo "</td><td>";
	echo $hey['Reason'];
	echo "</td></tr>";
	}
?>

</table>
</body>
</html>
