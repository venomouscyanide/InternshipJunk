<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home1</title>
</head>
<?php
require_once('config.php');
$name=$_POST['user'];
$pass=$_POST['pass'];

$sql = "SELECT id,Role FROM demo WHERE Name = '$name' and Pass = '$pass'";
//echo $sql;
$result=mysqli_query($conn,$sql);
$hey=mysqli_fetch_assoc($result);
echo $hey['Role'];
if(mysqli_num_rows($result)>0)
{session_start();
$_SESSION['Name']=$name;
$_SESSION['Role']=$role;
$_SESSION['id']=$hey['id'];
if($hey['Role']==1)
{header("location:fapprove.php");
}
else
{header("location:loggedin.php");}

}
else
{echo "Invalid credentials! Try again please";}
?>
<body>
</body>
</html>
