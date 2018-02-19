<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
table
{margin-left: auto;
margin-right: auto;
width:50% ;
border:5px solid grey;
<!--margin:10px;-->
padding:10px}
div.divv
{height:1080px;
width:1920px;
<!--border:1px solid black;-->

}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home Page</title>
</head>
<body>
<?php
//$_GET['msg']="";
if(isset($_GET['msg']))
{echo "<h4>";
echo $_GET['msg'];
echo "</h4>";
echo "Please log in again to continue :D";
}
?>
<div align="center" class="divv">
<form action="home1.php" method="POST">
<table>
<caption style="color:grey;font-size:300%;text-decoration:underline">Log In</caption>
<tr>
<td>
User Name
</td>
<td>
<input type="text" name=user  >
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" name=pass  >
</td>
</tr>
<tr>
<td>
</td>
<td >
<input type="submit" value="Log in" >
&nbsp;
<input type="reset" value="Reset" >
</td>
</tr>
</table>
<a href="newuser.html">If new user click here .</a>
</div>
</form>

</body>
</html>
