<?php
$section=$_GET['section'];
$approved=$_GET['approved'];
//echo $section;
//echo $approved;

require_once('config.php');

	if($approved==1)
		{$sql="UPDATE section SET Approved=0 WHERE Section='$section'";
			if($conn->query($sql)==TRUE)
			{header("location:ftopics.php");}
			else
			{echo "Unsuccessful :(";} 
		}
	else
		{$sql="UPDATE section SET Approved=1 WHERE Section='$section'";
			if($conn->query($sql)==TRUE)
			{header("location:ftopics.php");}
			else
			{echo "Unsuccessful :(";}
		}

?>