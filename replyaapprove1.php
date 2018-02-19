<?php
require_once('config.php');
$topic=$_POST['name'];
$time=$_GET['time'];

$sql="UPDATE reply SET Approved=0 ,Reason='$temp' WHERE Time='$time'";
//echo $sql;
//die();

	if($conn->query($sql))
		{header('location:fapprove.php');}
	else
		{echo "Unsuccessful :(";}

?>