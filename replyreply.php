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
<title>Reply to a Reply</title>
</head>

<body>
<table align=center>


	<?php 
	require_once('config.php');
	require_once('navbar.php');
	$id=$_GET['id'];
	$replyto=$_GET['replyto'];
	$title=$_GET['section'];
	$temp=$_GET['title'];
	$flag=date("Y.m.d h.i.s a");
	echo "<form method =POST action='replyreply1.php?date=$flag&id=$id&replyto=$replyto&section=$title&title=$temp'>";  
	if($id==1)
	{$sql="UPDATE reply SET Rexists=1 WHERE Reply='$replyto'";
	if(mysqli_query($conn,$sql)==FALSE)
		{echo "Failed :(";}
	}
	
	?>
	<br><br ><br ><br ><br ><br >
	<tr><td>
		<h1 style="color:#666666;">Type the comment</h1>
	</td></tr>
	<tr><td>
		<textarea  name="name" rows=10 cols=55></textarea>
	</td></tr>
	<tr><td>
		<input type="submit" value="Post Comment" style='float:left;font-size:150%;color:white;background-color:black;'>
		
	</td></tr>
</form>	
</table>
</body>
</html>
