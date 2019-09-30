<?php

session_start();
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['login']))
{
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 
 $query1=mysqli_query($conn,"select * from users where  email='$email' and password='$pass' ");
 $count=mysqli_num_rows($query1);
 $row=mysqli_fetch_assoc($query1);
 $type=$row['type'];
 $uid=$row['userid'];
	$_SESSION['userId']=$uid;
	$username=$row['username'];
	$_SESSION['username']=$username;
	$email=$row['email'];
	$_SESSION['email']=$email;
	$password=$row['password'];
	$type=$row['type'];
	$_SESSION['type']=$type;
	$_SESSION['pasword']=$password;
 if($count == 1 and $_SESSION['type']=='publisher' )
 {
	echo"<script>location.href='NiceAdmin/register.php';</script>";
}
elseif($count == 1 and $_SESSION['type']=='admin')
{
	echo"<script>location.href='Admin/basic_table.php';</script>";

}
 else
 {
	 echo "<script>alert('username or password incorrect')</script>";
 }
}
}

 
   

?>
<!DOCTYPE html>
<html>
<head><title>Include file</title>
<style>
h2{
font-size:20px;
position:relative;
left:20px;
bottom:35px;
margin:60px;

display:inline-block;
}
h6{
font-size:20px;
position:relative;
left:50px;
margin:80px;

display:inline-block;
}

a{text-decoration:none;color:black;}
div.head2{background-color:white;width:120%;height:140px;padding:20px;margin-top:-2px;box-shadow: 0 -15px 20px skyblue;font-size:25px;font-family:Rockwell Condensed;}
h1.jumbotron right{font-size:20px; color:blue;}

#us{height:550px;color:black;margin-left:0.5px;margin-top:-70px;box-shadow: 0 -10px 12px skyblue;}
#us{opacity: 0.6;
    filter: alpha(opacity=65);}
* {
    box-sizing: border-box;
}

* {
    box-sizing: border-box;
}
.IS19A{position:relative;
      display:inline-block;
	  float:left;
	  top:0;
	  padding:1px;
	  //margin-right:80px;
	  
	  //margin-left:180px;
	  margin:25px;
	  color:black;
	  font-size:20px;}
	  
.IS19{box-shadow:5px 5px 5px pink;
background-color:yellow;
padding:30px;
float:left;}

.IS19-content{display:none;
box-shadow:10px 10px 10px skyblue;
}
.IS19-content a{display:block;
padding:15px;
text-decoration:none;
color:white;}

.IS19A:hover .IS19-content{display:block;
background-color:white;color:black;}

.IS19-content a:hover{background-color:darkcyan;font-family:Rockwell Condensed;}

margin: auto;
}


.active, .dot:hover {
  background-color: white;
}

</style>

</head>
<body  >

<div id="jo"style="background-image:url('house9.jpg');background-repeat:no-repeat;height:188px;width:100%; background-size:100% 100%;" >
<image src="logo3.png" style="width:350px;height:188px;margin-left:-350px;">
<h1 style="height:150px;color:white;width:100%;padding:3%;margin-left:5px;text-align:center;margin-top:-210px;font-family:Rockwell Condensed;">
<marquee direction="left" behaviour="alternate"><b>TOURISTS  PASSAGE HOUSES BOOKING SYSTEM</b></marquee></h1>
</div>
<?php include('menus.php'); ?>

<form action="#" method="POST" style="position:relative;left:30px;margin-top:100px;align:center;">
<center>
<h5 style="font-size:30px;color:darkcyan;align:center;">Login Below</h5>
<input required type="Email" name="email"  placeholder="Mobile phone or email"style="width:500px;height:50px;font-size:25px;"><br><br>
<input required type="Password" name="pass" placeholder="Enter your password" style="width:500px;height:50px;font-size:25px;"><br><br>
<input type="submit" value="Login" name="login"style="width:200px;height:50px;font-size:25px;background-color:darkcyan;color:white;" >
</center>
</form>
<br><br><br><br><br><br>
<div class="me"style="background-color:white;color:black;">

<?php
if(isSet($_POST['submit'])){
	$Email = $_POST['email'];
	$Password = $_POST['Pass'];
	$_SESSION['Email']=$Email;
$con = mysqli_connect("localhost","root","","projectjo");

	$sql = "SELECT * FROM Register WHERE Email='$Email' AND Password='$Password' AND Position=Client";
	$sql2 = "SELECT * FROM Register WHERE Email='$Email' AND Password='$Password' AND Position=House_owner";
	$sql3 = "SELECT * FROM Register WHERE Email='$Email' AND Password='$Password' AND Position=Admin";
	$re = mysqli_query($con, $sql);
	$re2 = mysqli_query($con, $sql2);
	$re3 = mysqli_query($con, $sql3);
	if (mysqli_num_rows($re)) {
    header("Location: index.html");
} elseif (mysqli_num_rows($re2)) {
    header("Location: upload.php");
} elseif (mysqli_num_rows($re3)) {
		header("Location: adminsee.php");
} else {
   header("Location: register.php");
}
}	
?>
<footer style="width:100%;height:20%;background:skyblue;color: black;font-weight:20px;" ><center>Copyright 2019 all right reserved</center></footer>
