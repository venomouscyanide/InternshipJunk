<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reply to a post</title>
</head>

<body>
<?php
require_once("config.php");
//require_once("vgames1.php");
require_once("navbar.php");
$temp=$_GET['id'];
$time=$_GET['id1'];
$reply =$_POST['name'];
$title=$_GET['title'];

session_start();
$name=$_SESSION['Name'];
//echo $name;
//echo $time;
$sql="INSERT INTO reply (Reply,Submitter,Time,Topic,Section) VALUES('$reply','$name','$time','$temp','$title')";
if($conn->query($sql)==TRUE)
{echo "<h1 align=center>Your reply will be posted soon</h1>";}
else
echo "<h1 align=center>Unsuccessful :(</h1>" ;
//echo $sql;

//die();
?>
</body>
</html>
