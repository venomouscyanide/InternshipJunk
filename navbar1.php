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
    color: hotpink;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	border-right:1px solid purple;
	
}
a:active
{color:#000000;}

#id1
{font-style: oblique;
font-size:large;}
#id2
{font-style: oblique;
font-size:large;
}
#id3
{font-style:oblique;
font-size:large;

}
li a:hover
{background-color:#FF0000;}

li:last-child
{border-right:none;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<ul class="nope">
<li class="usee" style="font-weight:bold;"><a href="fapprove.php">Home (Approval Page)</a></li>
<li class="usee" id="id1"><a href="welcome.php">View Registered Users</a></li>
<li class="usee" id="id2"><a href="ftopics.php">Forum Topics</a></li>
<li class="usee" id="id3"><a href="reportadmin.php">User Reports</a></li>
<li class="usee" style="float:right;font-weight:bold;"><a href="logout.php">Log out</a></li>	
</ul>
</body>
</html>
