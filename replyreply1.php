<?php
require_once('config.php');

session_start();
$submitter=$_SESSION['Name'];
$title=$_GET['section'];
	$temp=$_GET['title'];
$time=$_GET['date'];
$id=$_GET['id'];
$replyto=$_GET['replyto'];
echo $replyto;
$content=$_POST['name'];

	
			$sql="INSERT INTO replyreply (Replyto,Submitter,Time,Content,Approved) VALUES ('$replyto','$submitter','$time','$content',1)";
			if(mysqli_query($conn,$sql)==TRUE)
			 {echo "Successful";
			 header("location:vgames1.php?id1=$temp&title=$title");}
			 else
			 echo "Failed :(";
		
	

?>