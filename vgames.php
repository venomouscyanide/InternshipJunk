<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
<?php
$title=$_GET['id'];
echo $title;
?>
</title>
<style>
h1.hmm
{color:black;text-decoration:underline;font-family:"Courier New", Courier, monospace;}
a.damn
{color:#CC0099;
font-family:"Courier New", Courier, monospace;}
a.damn:hover
{color:#FF0000;}
table
{border:1px solid #6633CC;
padding:10px;
margin:100px;
text-align:center;
width:500px;
height:250px;
background:#CCCCCC
}
td,tr
{font-size:large;
text-align:center;


}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<?php
require_once("config.php");
require_once("navbar.php");

?>
	<div align="center">
	<h1 class='hmm'><?php echo "$title Section";?></h1>

	<table>
			<tr><td>
			<h1 style="color:#666666;text-decoration:underline;font-family:"Courier New", Courier, monospace>Topics Open for Discussion</h1>
			</td></tr>
			
			<?php 
			$sql="SELECT Topic,Id FROM question WHERE Approved=1 AND Closed=0 AND Section='$title'";
			$result=mysqli_query($conn,$sql);
			
			while($hey=mysqli_fetch_assoc($result))
			{	
				//session_start();
				
				$id1=$hey['Topic'];//sending topic instead of id 
				echo "<tr><td><br>";
				echo "<a href='vgames1.php?id1=".$id1."&title=$title' class='damn'>".$hey['Topic']."</a>";
				echo "</tr></td>";
				//echo "<input type='hidden'  value='$hey['id']' name='vgame'>";
				
			}
											
			?>
		<!-- php script for while loop here -->
		<tr><td>
		<?php session_start();$temp=$_SESSION['Name'];
		$sql1="SELECT Id FROM demo WHERE Name='$temp'";
		$result1=mysqli_query($conn,$sql1);
		$hey1=mysqli_fetch_assoc($result1);
		$id=$hey1['Id'];	
		?>
		<br>
		<a href=<?php echo "topic.php?topic=$id&title=$title" ?> style="color:#660033;font-size:25px;">Create a new topic !</a>
		</td></tr>
	</table>
	</div>	
	<hr >
	<hr >
	<div align="center">
	<table>
		<tr><td>
			<h1 style="color:#666666;text-decoration:underline;">Archived Topics</h1>
		</td></tr>
		
		<?php 
			$sql="SELECT Topic,Id FROM question WHERE Approved=1 AND Closed=1 AND Section='$title'";
			$result=mysqli_query($conn,$sql);
			
			while($hey=mysqli_fetch_assoc($result))
			{	$id1=$hey['Topic'];
				echo "<tr><td>";
				echo "<a href='vgames1.php?id2=".$id1."&title=$title' class='damn'>".$hey['Topic']."</a>";
				
			}
											
			?>
	</div>
		
<body>
</body>
</html>
