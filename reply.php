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
<title>Reply to a post</title>
</head>

<body>

<?php
require_once("config.php");
//require_once("vgames1.php");
require_once("navbar.php");
$temp=$_GET['id'];
$title=$_GET['title'];

//echo $temp;
//die();
?>
<table align=center>
<br><br ><br ><br ><br ><br >

	<?php 
	$flag=date("Y.m.d h.i.s a");
	
	//die();
	echo "<form method =POST action='reply1.php?id=$temp&id1=$flag&title=$title'>";  
	?>
	<tr><td>
		<h1 style="color:#666666;">Type your reply down below</h1>
	</td></tr>
	<tr><td>
		<textarea  name="name" rows=10 cols=55></textarea>
	</td></tr>
	<tr><td>
		<input type="submit" value="Post Reply" style='float:left;font-size:150%;color:white;background-color:black;'>
		
	</td></tr>
</form>	
</table>
</body>
</html>
