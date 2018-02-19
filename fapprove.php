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
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Forum Approval</title>
</head>

<body>
<?php
require_once('config.php');
require_once('navbar1.php');
session_start();

//table for all topics submitted by users

$sql="SELECT * FROM question";
$result=mysqli_query($conn,$sql);

//echoing the current admin
echo "<h2 align=center class='me'> Hello Admin ".$_SESSION['Name'];

echo "!</h2>";
?>
<br ><br >
<table>
	<caption style='color:black;text-align:center;font-size:200%;text-decoration:underline'>Topics to be approved</caption>
	<th>Submitter </th>
	<th>Topic to be approved</th>
	<th>Section</th>
	<th>Time of submission</th>
	<th>Approval</th>
	<th>Archived</th>
	<th>Reason</th>
<?php
	while($hey=mysqli_fetch_assoc($result))
		{
		echo "<tr><td>";
		echo $hey['Submitter'];
		echo "</td><td>";
		echo $hey['Topic'];
		echo "</td><td>";
		echo $hey['Section'];
		echo "</td><td>";
		echo $hey['Time'];
		echo "</td><td>";
		$temp=$hey['Topic'];
		$app=$hey['Approved'];
		$close=$hey['Closed'];
		//echo $temp;
		echo "<form action='topicapprove.php?id=$temp&app=$app&value=1' method='POST'>";
		if($hey['Approved']==0)
			{echo "<input type = submit value='Approve This post'>";}
		else if($hey['Approved']==1)
			{echo "<input type = submit value='Delete This post' style='color:red'>";}
			
		echo "</form>";
		echo "</td><td>";
		echo "<form action='archive.php?id=$temp&app=$close' method='POST'>";
		if($hey['Closed']==0)
			{echo "<input type = submit value='Archive this post' style='color:red'>";}
		else
			{echo "<input type = submit value='Open This post' >";}
			
		$temp3=$hey['Reason'];
		echo "</td><td>";
		echo $temp3;
		echo "</form></td>";
		}
	
	
?>

</table>
	
<br> <br> <br> <br>
<table>
	<caption style='color:black;font-size:200%;text-decoration:underline;'>Replies to be approved</caption>
	<th>Reply to topic</th>
	<th>Section</th>
	<th>Reply content</th>
	<th>Submitter</th>
	<th>Time</th>
	<th>Approve Reply</th>
	<th>Reason</th>
	
	
	<?php
	$sql="SELECT * FROM reply";
	$result=mysqli_query($conn,$sql);
	
	while($hey=mysqli_fetch_assoc($result))
		{
		echo "<tr><td>";
		echo $hey['Topic'];
		echo "</td><td>";
		echo $hey['Section'];
		echo "</td><td>";
		echo $hey['Reply'];
		echo "</td><td>";
		echo $hey['Submitter'];
		echo "</td><td>";
		echo $hey['Time'];
		echo "</td><td>";
		$temp=$hey['Topic'];
		$temp1=$hey['Approved'];
		$temp2=$hey['Time'];
		
		echo "<form method='POST' action='replyapprove.php?id=$temp1&app=$temp2&value=1'>";
		if($temp1==0)
		{echo "<input type=submit value='Approve reply'>";}
		else if($temp1==1)
		{echo "<input type=submit value='Delete reply' style='color:red'>";}
		$temp3=$hey['Reason'];
		echo "</td><td>";
		echo $temp3;
		echo "</td>";
		echo "</form></td></tr>";

		}
		
		
		

	?>

</table>
</body>
</html>
