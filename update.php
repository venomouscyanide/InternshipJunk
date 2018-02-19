<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
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
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
require_once('config.php');
echo "<br>";
$id = $_POST["vara"]; //id is in this variable

$sql="SELECT Name,Age,Email,Adress,Pass FROM demo WHERE id=".$id;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{$rows=mysqli_fetch_assoc($result);
$name=$rows["Name"];
$email=$rows["Email"];
$address=$rows["Adress"];
$age=$rows["Age"];
$pass=$rows["Pass"];
}
//echo $name;
//echo $email;
//echo $address;
//echo $age;}
else
{echo "Not found !";}


echo "<form action='update1.php' method='POST'><table>	<caption style='color:black;font-size:200%;text-decoration:underline;'>Update The Details</caption>
<tr><td>";
echo "Name :";
echo "</td><td>";
echo "<input type='text' name='Name' value=".$name.'>',"<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "Password :";
echo "</td><td>";
echo "<input type='password' name='Password' value=".$pass.'>',"<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "Age :";
echo "</td><td>";
echo "<input type='number' name='Age' value=".$age.'>',"<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "Email :";
echo "</td><td>";
echo "<input type='text' name='Email' value=".$email.'>',"<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "Address :";
echo "</td><td>";
echo "<textarea name='Address' rows='10' cols='15'>" .$address. "</textarea>";

echo "</td></tr>";
echo "<tr><td>";
echo "";
echo "</td><td>";
echo "<input type='submit' value='Update !'>","<input type='hidden' name='idval' value='".$id."'>";
echo "</td></tr>";
echo "</table></form>";


//echo "";

?>


<body>
</body>
</html>
