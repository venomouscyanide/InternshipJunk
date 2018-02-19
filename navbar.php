<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul
{padding:0px;
margin:0px;
list-style-type:none;
overflow:hidden;
background-color:#CCCCCC;
}
li
{float:left;
}
li a
{   display: block;  				//make the whole area clickable
    color: red;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-right:1px solid purple;
}
li a:hover
{background-color:#FF0000;}

li:last-child
{border-right:none;}
#id
{font-family:"Courier New", Courier, monospace;
font-variant:small-caps;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<ul class="nope">
<li class="usee" id="id"><a href="loggedin.php">Home</a></li>
<li class="usee" id="id"><a href="profile.php">Profile Page</a></li>
<li class="usee" id="id"><a href="message.php">Status</a></li>
<li class="usee" style='float:right;' id="id"'><a href="logout.php">Log out</a></li>	

<form action="search.php" method="post">
<li class="usee" style="float:right;height: 50px;line-height: 50px;"><input type="text" placeholder="Search here" name="search" required><input type="submit"  value="Search "></li>
</form>
</ul>
</body>
</html>
