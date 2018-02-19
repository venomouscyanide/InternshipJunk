<?php
require_once('config.php');
$temp=$_POST['name'];
$time=$_GET['time'];
$value=$_GET['value'];
$sql="UPDATE reply SET Approved=0 ,Reason='$temp' WHERE Time='$time'";
//echo $value;
//die();

	if($conn->query($sql))
		{if ($value==1)//from fapprove.php
			{header('location:fapprove.php');}
		 else if($value==2) //reportadmin
		 	{header('location:reportadmin.php');}
		}
	else
		{echo "Unsuccessful :(";}

?>