<?php
session_start();
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['register']))
{
 $first=$_POST['first'];
 $last=$_POST['last'];
 $location=$_POST['location'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $confirm=$_POST['confirm'];
 $type="publisher";
 $sql2 = "INSERT INTO users VALUES ( null, '$first','$last','$location','$email','$phone','$username','$password','$type')" or die(mysql_error());
//to insert uid from company to user
 
   
    
    if ($conn->query($sql2) === TRUE )
     {
      
       echo "<script>alert('user registered successfull')</script>";
     }
     else{
      echo "<script>alert('user is not registered successfull')</script>";

	 }
	}
	}
?>
<!DOCTYPE html>
<html>
<head><title>Include file</title>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
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
</div>
<div class="contents-containner">

<div class="form-group">
<form name="register" action="#"  method="post">

  <h1> User Registeration form </h1>


  

  <p class="form-contents">
      <label>First name</label>
      <input type="text" class="input" name="first" value="">
  </p>
  <p class="form-contents">
      <label>last name </label>
      <input type="text" class="input" name="last" value="">
  </p>
  <p class="form-contents">
      <label>location</label>
      <input type="text" class="input" name="location" value="">
  </p>
  <p class="form-contents">
      <label>email </label>
      <input type="email" class="input" name="email" value="">
  </p>
  <p class="form-contents">
      <label>phone</label>
      <input type="text" class="input" name="phone" value="">
  </p>

  <p class="form-contents">
      <label>username</label>
      <input type="text" class="input" name="username" value="">
  </p>
  <p class="form-contents">
      <label>password</label>
      <input type="password" class="input" name="password" value="">
  </p>
  <p class="form-contents">
      <label>confirm password</label>
      <input type="password" class="input" name="confirm" value="">
  </p>

  
  <p class="form-contents">
  <input type="submit" name="register" class="submit" value="Register">
  </p>

</form>

</div>

</div>

</center>

<footer style="width:100%;height:20%;background:skyblue;color: black;font-weight:20px;" ><center>Copyright 2019 all right reserved</center></footer>


		