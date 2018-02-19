<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
<title>Untitled Document</title>
</head>

<body>
<table align="center">

<?php
require_once('config.php');
require_once('navbar1.php');

?>
<br > <br > <br > <br >
<table>
<caption style="font-size:30px;text-decoration:underline" align="center">Topic Reports</caption>
<th>Submitted By</th>
<th>Topic</th>
<th>Section</th>
<th>Time</th>
<th>Report</th>
<th>Action</th>

<?php
$sql="SELECT * FROM report WHERE Topic!='N'";
$result=mysqli_query($conn,$sql);
	while($hey=mysqli_fetch_assoc($result))
	{echo "<tr><td>";
	echo $hey['Submitter'];
	echo "</td><td>";
	echo $hey['Topic'];
	$temp=$hey['Topic']; //
	echo "</td><td>";
	echo $hey['Section'];
	echo "</td><td>";
	echo $hey['Time'];
	echo "</td><td>";
	echo $hey['Report'];
	
	$sql1="SELECT Approved from question WHERE Topic ='$temp'"; //
	$result1=mysqli_query($conn,$sql1);
	$hey1=mysqli_fetch_assoc($result1);
	$app=$hey1['Approved'];
	
	echo "<form action='topicapprove.php?id=$temp&app=$app&value=2' method='POST'>"; //
	echo "</td><td>";
	if($app==1)
	echo "<input type=submit value='Delete Topic' style='color:red'>";	
	else
	echo "<input type=submit value='Approve Topic'>";
	echo "</td>";
	echo "</tr>";
	echo "</form>";
	}

?>

</table>
<br > <br > <br > <br >
<table>
<caption style="font-size:30px;text-decoration:underline" align="center">Reply Reports</caption>
<th>Submitted By</th>
<th>Reply</th>
<th>Section</th>
<th>Time</th>
<th>Report</th>
<th>Action</th>
<th>Reply to topic</th>

<?php
$sql="SELECT * FROM report WHERE Reply!='N'";
$result=mysqli_query($conn,$sql);
	while($hey=mysqli_fetch_assoc($result))
	{echo "<tr><td>";
	echo $hey['Submitter'];
	echo "</td><td>";
	echo $hey['Reply'];
	$temp=$hey['Time']; //
	echo "</td><td>";
	echo $hey['Section'];
	echo "</td><td>";
	echo $hey['Time'];
	echo "</td><td>";
	echo $hey['Report'];
	
	$sql1="SELECT Approved,Topic from reply WHERE Time ='$temp'"; //
	$result1=mysqli_query($conn,$sql1);
	$hey1=mysqli_fetch_assoc($result1);
	$app=$hey1['Approved'];
	echo "<form method='POST' action='replyapprove.php?id=$app&app=$temp&value=2'>";
	echo "</td><td>";
	if($app==1)
	echo "<input type=submit value='Delete Reply' style='color:red'>";	
	else
	echo "<input type=submit value='Approve Reply'>";
	echo "</td><td>";
	echo $hey1['Topic'];
	echo "</td>";
	echo "</tr>";
	echo "</form>";
	}
?>
</table>
</body>
</html>
