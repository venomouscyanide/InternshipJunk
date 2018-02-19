<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
h1.hai
{
text-align:center;
text-decoration:none;
background-color:#999999;
font-size:40px;
color:#FFFFFF;
}
table,td,th
{border:1px solid black;
<!--margin:10px;-->
padding:100px;}
table
{margin-left: auto;
margin-right: auto;
}
tr,td,th
{padding:20px;
}
th
{text-decoration:underline;
}
table, tr:nth-child(even) {
    background-color: #eee;
}
table,tr:nth-child(odd) {
    background-color: #fff;
}
table {
    color: black;
    background-color: black;
}
th
{background:#663333;
color:white;
}
#name
{font-family:"Courier New", Courier, monospace;
}
#heading
{font-size:large;
font-family:Georgia, "Times New Roman", Times, serif;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Your User Profile</title>
</head>

<body>

<?php
require_once('config.php');
require_once('navbar.php');
session_start();
echo "<hr>";
echo "<h1 class='hai' id='name'>Hello Mr ".$_SESSION['Name']." !</h1>";
echo "<hr>";
?>

<?php
$temp=$_SESSION['id'];
$sql="SELECT Name,Pass,Age,Email,Adress,ImgLoc FROM demo WHERE Id='$temp'";
//echo $temp;
//echo $sql;
//die ();
$result=mysqli_query($conn,$sql);
$hey=mysqli_fetch_assoc($result);

$name=$hey["Name"];
$email=$hey["Email"];
$address=$hey["Adress"];
$age=$hey["Age"];
$pass=$hey["Pass"];
$use=$hey['ImgLoc'];
if(isset($_GET['msg']))
{echo $_GET['msg'];}

echo "<form action='upload.php' method='POST' enctype='multipart/form-data'><table>	<caption style='color:black;font-size:200%;text-decoration:underline;' id='heading'>Edit Your Profile</caption>
<tr><td>";
echo "Profile Picture :";
echo "</td><td>";
echo "<img src='$use' alt='Image not found, Please upload an image' width=200px height=100px>";
echo "</td><td>";
?>
Upload the image
<input type="file" name="fileToUpload" id="fileUoUpload" >
</td>
<?php
echo "</td><tr><td>";
echo "Name :";
echo "</td><td>";
echo "<input type='text' name='Name' value=".$name.'>',"<br>";
echo "</td><td></td></tr>";
echo "<tr><td>";
echo "Password :";
echo "</td><td>";
echo "<input type='password' name='Password' value=".$pass.'>',"<br>";
echo "</td><td></td></tr>";
echo "<tr><td>";
echo "Age :";
echo "</td><td>";
echo "<input type='number' name='Age' value=".$age.'>',"<br>";
echo "</td><td></td></tr>";
echo "<tr><td>";
echo "Email :";
echo "</td><td>";
echo "<input type='text' name='Email' value=".$email.'>',"<br>";
echo "</td><td></td></tr>";
echo "<tr><td>";
echo "Address :";
echo "</td><td>";
echo "<textarea name='Address' rows='10' cols='15'>" .$address. "</textarea>";

echo "</td><td></td></tr>";
echo "<tr><td>";
echo "";
echo "</td><td>";
echo "<input type='submit' value='Update !'>";
echo "</td><td></td></tr>";
echo "</table></form>";
echo "<hr>";



?>
</body>
</html>
