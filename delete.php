<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Deletion Page</title>
</head>
<?php
require_once('config.php');
$var=$_POST["id"];
//var_dump($var);
$sql="DELETE FROM demo WHERE id=".$var ;
echo "<br>";
if(mysqli_query($conn,$sql))
{echo "Deletion of the record was successful";
header("location:welcome.php");}
else
{echo "Failed to delete the record";}
?>
$conn->close();
<body>
</body>
</html>
