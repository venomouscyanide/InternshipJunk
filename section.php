<?php
require_once('config.php');

$topic=$_POST['topic'];
$sql="INSERT INTO section (`Section`) VALUES ('$topic')";

if(mysqli_query($conn,$sql)==TRUE)
header("location:ftopics.php");
else
echo "Unsuccessful :(";

?>