<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
h1.blah
{
text-align:center;
text-decoration:none;
background-color:#999999;
font-size:40px;
color:#FFFFFF;
font-family:"Courier New", Courier, monospace;
}

table
{border:1px solid #6633CC;
padding:10px;
margin:100px;
text-aling:center;
background:#CCCCCC;
}
td,tr
{font-size:large;
text-align:center;


}
a.damn
{color:#CC0099;
font-family:"Courier New", Courier, monospace;}
a.damn:hover
{color:#FF0000;}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome !</title>
</head>

<body>

<?php
require_once('navbar.php');
require_once('config.php');
session_start();
//code for forum here
?>	
<hr>
<h1 class="blah" >Welcome to the forum, Mr&nbsp;<?php echo $_SESSION['Name'];?> </h1>
<hr>
<div height="1500px" width="1080px" align="center" class="hello">
<table>
<tr><td>
<h1 style="color:#666666;text-decoration:underline;">Topics To Discuss</h1>
</td>
</tr>


<?php
	//delete if not working
	$sql="SELECT * FROM section";
	$result=mysqli_query($conn,$sql);
		while($hey=mysqli_fetch_assoc($result))
		{$temp=$hey['Section'];
		if($hey['Approved']==1)
			{echo "<tr><td><br>";
			echo "<a href='vgames.php?id=$temp' class='damn'>$temp</a>";
			echo "</td></tr>";
			}
		}
	//till here or use backup
?>

</table>
</div>
</body>
</html>
