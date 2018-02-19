<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Uploading the file</title>
</head>

<body>
<?php
session_start();
require_once('config.php');

$name1=$_POST["Name"];
$email1=$_POST["Email"];
$address1=$_POST["Address"];
$age1=$_POST["Age"];
$pass1=$_POST["Password"];
$id1=$_SESSION["id"];
$sql="UPDATE demo SET Name='".$name1."',Pass ='".$pass1."',Email='".$email1."',Adress ='".$address1."',Age=".$age1." WHERE Id=$id1";
$_SESSION['Name']=$name1;
//echo $id1;
//echo $sql;
if($conn->query($sql)==TRUE)
{echo "successful";}
else
{echo "Unable to complete";
}

//echo $sql;
$target_dir = "pics/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

$_SESSION['Image']= $target_file;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
   // echo "Sorry, your file was not uploaded.";
	header("location:profile.php?msg='Profile picture was not updated as the same one exists.'");
// if everything is ok, try to upload file
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$temp=$_SESSION['Name'];
        $sql="UPDATE demo SET ImgLoc = '$target_file'  WHERE Name='$temp'";
		if($conn->query($sql)==TRUE)
		{header("location:profile.php");
		}
		
		
    } 
    }

?>
</body>
</html>
