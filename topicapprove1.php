<?php
require_once('config.php');
$temp=$_POST['name'];
$topic=$_GET['topic'];
$value=$_GET['value'];
$sql="UPDATE question SET Approved=0 ,Reason='$temp' WHERE Topic='$topic'";
//echo $value;
//die();

	if($conn->query($sql))
		{
		if ($value==1)//from fapprove.php
			{header('location:fapprove.php');}
		else if($value==2) //reportadmin
		 	{header('location:reportadmin.php');}
			}
	else
		{echo "Unsuccessful :(";}

?>