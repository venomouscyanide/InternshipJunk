<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
th.muhaha
{color:#333333;
font-family:"Courier New", Courier, monospace;
font-size:24px;
}
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
strong.strng
{font-style:normal;
font-size:20px;
}
#temp
{color:#0000FF;
font-family:"Courier New", Courier, monospace;
font-size:24px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Search</title>
</head>

<body>
<?php
require_once('config.php');
require_once('navbar.php');
//string pos and replace functions

$search=$_POST['search'];
/*
$temp= strpos("hey there budyy","there");
echo substr_replace("hey myboyjeff buddy","<strong>bye</strong>",$temp,strlen("myboyjeff"));
die();
*/
?>
	<h3 align="center" style="color:#666666;">Search for :' <?php echo "<strong class='strng' id='temp'>".$search."</strong>" ?>'</h3>
	<div align="center">
	<table>
	<!--<caption style="font-family:'Courier New', Courier, monospace;font-size:24px">Questions</caption>-->
	<th class="muhaha">Matching Questions</th>
	<?php
	$sql="SELECT Topic,Section FROM question WHERE Topic LIKE '%$search%' AND Approved=1 ";
	$result=mysqli_query($conn,$sql);
	
	if (mysqli_num_rows($result)<1)
	{echo "<tr><td>No Match Found .</td></tr>";}
	else
	{
	while($hey=mysqli_fetch_assoc($result))
		{
		$title=$hey['Section'];
		$dump=$hey['Topic'];
		
		$temp= stripos($dump,$search);
		$use=  substr_replace($hey['Topic'],"<strong class='strng'>".$search.'</strong>',$temp,strlen($search));
		
		echo "<tr><td><br>";
		echo "<a href='vgames1.php?id1=".$hey['Topic']."&title=$title' class='damn'>".$use."</a>";
	
		echo "</td></tr>";
		}
		}
		
	?>
	
	</table>
	</div>
	<div align="center">
	<table>
	<th class="muhaha">Matching replies</th>
	<th class="muhaha">To topics</th>
	<?php
	$sql="Select Reply,Topic,Section FROM reply where Approved=1 AND reply LIKE '%$search%'";
	
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<1)
	{echo "<tr><td colspan='2'>Not Found .</td></tr>";}
	else
	{
	while($hey=mysqli_fetch_assoc($result))
		{
		$title=$hey['Section'];
		$dump=$hey['Reply'];
		$dump1=$hey['Topic'];
		$temp= stripos($dump,$search);
		$use=  substr_replace($hey['Reply'],"<strong class='strng'>".$search.'</strong>',$temp,strlen($search));
		
		echo "<tr><td><br>";
		echo $use;
		echo "</td><td><br>";
		$temp1= stripos($dump1,$search);
		if($temp1!=NULL)
		$use=  substr_replace($hey['Topic'],"<strong class='strng'>".$search.'</strong>',$temp1,strlen($search));
		else
		$use=$hey['Topic'];
		echo "<a href='vgames1.php?id1=".$hey['Topic']."&title=$title' class='damn'>".$use."</a>";
		echo "</td></tr>";
		}
		}
	
	?>
	</table>
	</div>
	
	<div align="center">
	<table>
	<th class="muhaha"> Matching Sections</th>
	<?php
	$sql="SELECT * FROM section WHERE Section LIKE '%$search%' AND Approved=1";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<1)
	{echo "<tr ><td >Not Found .</td></tr>";}
	else
	{
	//echo $sql;die();
	while($hey=mysqli_fetch_assoc($result))
		{
		$dump=$hey['Section'];
		
		$temp= stripos($dump,$search);
		$use=  substr_replace($hey['Section'],"<strong class='strng'>".$search.'</strong>',$temp,strlen($search));
		
		echo "<tr><td><br>";
		echo "<a href='vgames.php?id=".$hey['Section']."' class='damn'>".$use."</a>";
	
		echo "</td></tr>";
		}
		}
	?>
	
	</table>
	</div>
	
	<div align="center">
	<table>
	<th class="muhaha">Matching replies</th>
	<th class="muhaha">To replies</th>
	<th class="muhaha">In topic </th>
	<?php
	$sql="SELECT * FROM replyreply WHERE Content LIKE '%$search%' AND Approved=1";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<1)
	{echo "<tr ><td colspan='3'>Not Found .</td></tr>";}
	else
	{
	//echo $sql;die();
	while($hey=mysqli_fetch_assoc($result))
		{
		$dump=$hey['Content'];
		
		$temp= stripos($dump,$search);
		$use=  substr_replace($hey['Content'],"<strong class='strng'>".$search.'</strong>',$temp,strlen($search));
		
		echo "<tr><td><br>";
		echo $use;
	
		echo "</td><td><br>";
		echo $hey['Replyto'];
		$dump=$hey['Replyto'];
		
		//echo "</td><td><br>";
		$sql1="SELECT Topic,Section FROM reply WHERE Reply='$dump'";
		//echo $sql1;die();
		$result1=mysqli_query($conn,$sql1);
		$hey1=mysqli_fetch_assoc($result1);
		$useme=$hey1['Topic'];
		$irr=$hey1['Section'];
		echo "<td><br>";
		echo "<a href='vgames1.php?id1=$useme&title=$irr' class='damn'>".$useme."</a>";
	
		echo "</td></tr>";
		
		
		}
		}
	?>
	
	
	</table></div>
	
</body>
</html>
