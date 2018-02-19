<?php
require_once('config.php');

$name = $age = $address = $email = $pass = "";
$nameerr = $ageerr = $addresserr = $emailerr = $passerr = "";
$role=0;$imgloc="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["name"]))
{$nameerr="Please input the name";}

else
{$name=test($_POST["name"]);}

if(empty($_POST["password"]))
{$passerr="Please input the password";}

else
{$pass=test($_POST["password"]);}

if(empty($_POST["email"]))
{$emailerr="Please input the email";}

else
{$email=test($_POST["email"]);}

if(empty($_POST["address"]))
{$addresserr="Please input the address";}

else
{$address=test($_POST["address"]);}

if(empty($_POST["age"]))
{$ageerr="Please input the age";}

else
{$age=test($_POST["age"]);}
}

function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

session_start();
$_SESSION['Name']=$name;
$sql = "INSERT INTO demo (Name,Pass,Age,Adress,Email,Role,ImgLoc) VALUES ('".$name."','".$pass."'," .$age. ",'".$address."','".$email."','".$role."','".$imgloc."')";
//echo $sql;
echo "<br>";
if ($conn->query($sql)===TRUE)
{//echo "Successfully inserted into the table demo !";
header("location:loggedin.php");
}
else
{echo "Not successful";}

$conn->close();

?>