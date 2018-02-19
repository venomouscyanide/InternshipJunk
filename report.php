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
<title>Report Page</title>
</head>

<body>

<?php
require_once('config.php');
require_once('navbar.php');

$id=$_GET['id'];
$name=$_GET['name'];
	
		echo "<form method='POST' action='report1.php?id=$id&name=$name'>";
		?>	
		<br > <br > <br > <br >
		<table align="center">
		<tr><td>
		<h1 style="color:#666666;">Type down the report</h1>
	</td></tr>
	<tr><td>
		<textarea  name="report" rows=10 cols=55></textarea>
	</td></tr>
	<tr><td>
		<input type="submit" value="Submit Report" style='float:left;font-size:150%;color:white;background-color:black; '>
		</td></tr></table>
		</form>
		
</body>
</html>
