<?php
require_once('config.php');
$id=$_GET['id'];
$name=$_GET['name'];
$report=$_POST['report'];
	if($id==1) //reports for topics
		{
		$sql="SELECT * FROM question WHERE Topic='$name'";
		$result=mysqli_query($conn,$sql);
		$hey=mysqli_fetch_assoc($result);$temp1=$hey['Submitter'];$temp2=$hey['Topic'];$temp3=$hey['Time'];$temp4=$hey['Section'];	
		$sql1="INSERT INTO report (Submitter,Topic,Reply,Section,Time,Report) VALUES ('$temp1','$temp2','N','$temp4','$temp3','$report')";
			if(mysqli_query($conn,$sql1)==TRUE)
				header("location:loggedin.php");
			else
				echo "Unsuccessful :(";
		}
	else if($id==2)//reports for a particular reply
		{$sql="SELECT * FROM reply WHERE Reply='$name'";
		//echo $sql;die();
		$result=mysqli_query($conn,$sql);
		$hey=mysqli_fetch_assoc($result);$temp1=$hey['Submitter'];$temp2=$hey['Reply'];$temp3=$hey['Time'];$temp4=$hey['Section'];	
		$sql1="INSERT INTO report (Submitter,Topic,Reply,Section,Time,Report) VALUES ('$temp1','N','$temp2','$temp4','$temp3','$report')";
			if(mysqli_query($conn,$sql1)==TRUE)
				header("location:loggedin.php");
			else
				echo "Unsuccessful :(";
		}
?>