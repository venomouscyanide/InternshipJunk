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
?>
<h1 align="center"	style='text-decoration:underline'>Current forum topics</h1> 
<table>
<th>Section</th>
<th>Delete</th>
<th>Update</th>
<?php
	$sql2="SELECT * FROM section";
	$result2=mysqli_query($conn,$sql2);
	while($hey2=mysqli_fetch_assoc($result2))
	{echo "<tr><td align=center><br>";
	 echo $hey2['Section'];
	 $temp=$hey2['Section'];
	 echo "</td>";
	 echo "<td align=center>";
	 if($hey2['Approved']==1)
	 echo "<form method='POST' action='sectiondelete.php?section=$temp&approved=1'><input type='submit' value='Delete' style='color:red;'>";
	 else
 	 echo "<form method='POST' action='sectiondelete.php?section=$temp&approved=0'><input type='submit' value='Open Topic'>";
	 echo "</form></td>";
	 echo "<td><form method='POST' action='topicupdate.php?actual=$temp'>";
	 echo "<input type='text' name='topic' value='$temp'>&nbsp&nbsp";
	 echo "<input type='submit' value='Update This Section'>";
	 echo "</td></tr></form>";
	 
	}
?>
<tr >
<td colspan='3' align="center" style="border:none">
<form action="section.php" method="post">
<textarea rows="5" cols="20" name="topic"> </textarea>
<br >
<input type='submit' value='Add a new section' >
</form>
</td>

</tr>
</table>