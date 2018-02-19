<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table{
padding:10px;

border:1px solid #666666;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
require_once('config.php');
$temp=$_GET['id'];
$app=$_GET['app'];
$value=$_GET['value'];
//echo $app;
//echo $temp;
//die();
if($temp==0)
{$sql="UPDATE reply SET Approved=1,Reason='Approved' WHERE Time='$app'";
if($conn->query($sql))
		{if ($value==1)//from fapprove.php
			{header('location:fapprove.php');}
		 else if($value==2) //reportadmin
		 	{header('location:reportadmin.php');}}
	else
		{echo "Unsuccessful :(";}
}
else{
?>
<table align="center">
<br><br ><br ><br ><br ><br >
<?php
//echo $app;

echo "<form method='POST' action='replyapprove1.php?time=$app&value=$value'>";
?>

	<tr><td>
		<h1 style="color:#666666;">Type the reason </h1>
	</td></tr>
	<tr><td>
		<textarea  name="name" rows=10 cols=55></textarea>
	</td></tr>
	<tr><td>
		<input type="submit" value="Submit reason" style='float:left;font-size:150%;color:white;background-color:black;'>
	</td></tr>
	
</form>
<?php



}
		
?>
</body>
</html>
