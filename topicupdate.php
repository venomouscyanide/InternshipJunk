<?php
require_once('config.php');
$topic=$_POST['topic'];
$actual=$_GET['actual'];

$sql="UPDATE section SET Section='$topic' WHERE Section='$actual'";
echo $sql;
$sql2="UPDATE reply SET Section='$topic' WHERE Section='$actual'";
$sql3="UPDATE question SET Section='$topic' WHERE Section='$actual'";
	if ($conn->query($sql)==TRUE&&$conn->query($sql2)==TRUE&&$conn->query($sql3)==TRUE)
		{
		header("location:ftopics.php");}
		else
		{echo "Unsuccessful :(";}
?>