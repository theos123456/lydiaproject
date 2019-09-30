<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
#d3 ul {
	list-style: none;
	padding: 5px 0px;
	margin: 0px;
}
#d3 ul li
{

	float: left;
	width: 220px;
	height: 40px;
	background-color: darkcyan;
	line-height: 40px;
	text-align: center;
	position: relative;
}
#d3 ul li a {
	text-decoration: none;
	color: white;
	display: block;
	font-family:Rockwell Condensed;
	font-size: 25px;
}
#d3 ul li a:hover{
	background-color: blue;
}
#d3 ul li li{
display: none;
}
 #d3 ul li:hover li
{
display: block;
}
#d3 ul li ul li ul li{
display: none;
}
</style>
</head>

<body>
<div id="d3" style="z-index: 2;">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="services.php">SERVICES</a></li>
<li><a href="">PASSAGE HOUSE</a>
<ul><li><a href="forReservation.php?loc=gasabo">GASABO</a></li>
<li><a href="forReservation.php?loc=kicukiro">KICUKIRO</a></li>
<li><a href="forReservation.php?loc=nyarugenge">NYARUGENGE</a>
</li></ul>
</li>

<li><a href="#">ACCOUNT</a>
<ul>
    <li><a href="register.php">REGISTER</a></li>
    <li><a href="login.php">LOGIN</a></li>
</ul>
</li>
<li><a href="help.php">CONTACT US</a></li>
</ul>
</div>
</body>
</html>
