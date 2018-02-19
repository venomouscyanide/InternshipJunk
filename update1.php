
<?php
require_once('config.php');

$name1=$_POST["Name"];
$email1=$_POST["Email"];
$address1=$_POST["Address"];
$age1=$_POST["Age"];
$pass1=$_POST["Password"];
$id1=$_POST["idval"];
$sql="UPDATE demo SET Name='".$name1."',Pass ='".$pass1."',Email='".$email1."',Adress ='".$address1."',Age=".$age1." WHERE id=".$id1;
echo $sql;
//echo $id1;

if (mysqli_query($conn,$sql))
{echo "Successful updation";
header("location:welcome.php");
}
else
{echo "Unsuccessful";}
?>
