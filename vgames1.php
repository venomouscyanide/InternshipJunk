<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
h1.hmm
{color:black;text-decoration:underline;
font-family:"Courier New", Courier, monospace;}
table.what
{margin:10px;
padding:10px;
}


#blah {
    background-color: #eee;
}
#useme
{color:#3300CC;
font-family:"Courier New", Courier, monospace;
font-size:24px;
font-weight:bold;
}
}  	
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<?php
$title=$_GET['title'];
echo $title;
?>
</title>
</head>

<body>
<?php
require_once("config.php");
require_once("navbar.php");

echo "<div align='center'>";
echo "<h1 class='hmm'> $title Section </h1>";
	if(isset($_GET['id1']))
	{$temp = $_GET['id1'];
	//echo $temp;
	}
	//die();}
	else if(isset($_GET['id2']))
	$temp = $_GET['id2'];
	//echo $temp;
	//die();
	$sql="SELECT Submitter,Time,Topic,Closed FROM question WHERE Topic='$temp' AND Section='$title'";
	//$sql1="SELECT Approved FROM reply WHERE Id=$temp";
	//echo $sql;
	$result=mysqli_query($conn,$sql);
	$hey=mysqli_fetch_assoc($result);
	$global1=$hey['Closed'];
	
	//$result1=mysqli_query($conn,$sql1);
	//$hey1=mysqli_fetch_assoc($result1);
	
	?>
<table align="left" bordercolor="#003366"; bgcolor="#CCCCCC" width=99% class="what">
	<tr><td style="font-size:200%">
	<?php 
	echo "Topic :";
	echo  $hey['Topic']; ?>
	</td></tr>
	<tr><td class="hehe">
	<?php 
	echo "<hr><br>";
	echo "Submitted by :";
	echo $hey["Submitter"];
	$tempr=$hey['Topic'];
	//code for picture insertion in topic
	$tempo=$hey['Submitter'];
	$sql1="SELECT ImgLoc FROM demo WHERE Name='$tempo'";
	$result1=mysqli_query($conn,$sql1);
	$hey1=mysqli_fetch_assoc($result1);
	$tempo1=$hey1['ImgLoc'];
	
	echo "<table style='border:3px solid #CC0000'><tr><td><img src='$tempo1' alt='DP N.A' height=50px width=50px></td></tr></table>";
	//code ends here
	echo "&nbsp At time :";
	echo $hey["Time"];
	echo "<hr>";
	
	if($hey['Closed']==0) 
	{echo "<form method='POST' action='report.php?id=1&name=$tempr'><input type='submit' name='report' value='Report this Topic' style='float:left;Font-size:	75%;color:white;background-color:red;'>";
	echo "</form>";
	echo "<form method='POST' action='reply.php?id=$temp&title=$title'><input type='submit' name='vgamesubmit' value='Reply to this post' style='float:right;font-size:150%;color:white;background-color:black;'>";
	echo "</form>";}
	?>
	</td></tr>
	
</table>
	
<?php
echo "</div>";
?>
<table align="left" bordercolor="#003366"; bgcolor="#CCCCCC" width=99% class="what" id="blah">
	<?php 
	echo "<tr ><td style='font-size:200%'>";
	echo "Replies to the post :";
	echo "</td></tr>";
	//the id value is in temp 
	$sql="SELECT Reply,Submitter,Time,Approved,Rexists,Topic FROM reply WHERE Topic='$temp' AND Section='$title'";
	$result=mysqli_query($conn,$sql);
	
	while($hey=mysqli_fetch_assoc($result))
	{if($hey['Approved']==1)
	{
	echo "<tr ><td><hr>";
	echo "<h3>".$hey['Reply']."</h3>";
	$use=$hey['Reply'];	
	echo "</tr></td>";
	echo "<tr ><td>";
	echo "Submitted by:&nbsp",$hey['Submitter'];
	//code for picture insertion in reply
	$tempo=$hey['Submitter'];
	$tempo2=$hey['Reply'];
	$sql1="SELECT ImgLoc FROM demo WHERE Name='$tempo'";
	$result1=mysqli_query($conn,$sql1);
	$hey1=mysqli_fetch_assoc($result1);
	$tempo1=$hey1['ImgLoc'];

	echo "<table ><tr><td style='border:3px solid black'><img src='$tempo1' alt='DP N.A' height=50px width=50px></td></tr></table>";
	//code ends here
	echo "&nbsp At Time :&nbsp",$hey['Time'];
	echo "<form method='POST' action='report.php?id=2&name=$tempo2'><input type='submit' name='report' value='Report this Reply' style='float:right;Font-size:75%;color:white;background-color:red;'>";
	echo "</form>";
	echo "</tr></td>";?>
	
				
		
	<tr><td>
	 
	<br >
	<span id="useme">Comments down below :</span> <br ><hr>
	<?php
	
	$count=1;  //div allignment parameter
	
	echo "<div style='padding-left:1cm'>";
	
	if ($hey['Rexists']==0)
	echo "No comments found. Press comment button to create one.";
	if($hey['Rexists']==0 && $global1==0)
    {
	echo "<form method='POST' action='replyreply.php?id=1&replyto=$use&section=$title&title=$temp'>"; 
	 ?>
	 <br >
	<input type="submit" value="Comment" style="font-size:large;">
	</form><br >
	<?php }
	
	else
	{$sql2="SELECT * FROM replyreply WHERE Replyto='$use'";
	$result2=mysqli_query($conn,$sql2);
	while($hey2=mysqli_fetch_assoc($result2))
	{echo "<br>",$hey2['Content'],"<br>";
	echo "<br> Submitted by :",$hey2['Submitter'],"&nbsp &nbsp At time :",$hey2['Time'],"<hr>";
	}
	if($global1==0)
	{
	echo "<form method='POST' action='replyreply.php?id=2&replyto=$use&section=$title&title=$temp'>";
	echo "<input type='submit' value='Comment' style='font-size:large;'>";
	echo "</form>";}
	}
	}
	}
	?>
</table>
</body>
</html>
