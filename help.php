<?php
session_start();
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['register']))
{
 $comments=$_POST['comments'];
 $email=$_POST['email'];

 $sql2 = "INSERT INTO comments VALUES ( null,'$email','$comments')" or die(mysql_error());
//to insert uid from company to user
 
   
    
    if ($conn->query($sql2) === TRUE )
     {
      
       echo "<script>alert('comments registered successfull')</script>";
     }
     else{
      echo "<script>alert('comments is not registered successfull')</script>";

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
</div>
<image src="house.tif" width="1600px" height="500px" style="position:relative;" />
<form id="f1" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" 
<h3 style="margin-top:50px;text-align:center;font-size:30px;color:darkcyan;"><i><b>Have a suggestion or complaint about our website?</i></b></h3>
<p style="font-size:30px;color:darkcyan;text-align:center"><i><b>Feel free to write it here and we are ready to help you!</i></b></p>
<center>
<table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
<tr> <td>

<label >Email address*:</label>
</td> <td>
<input name="email" type="email" maxlength="90" style="width:350px;height:40px;" />
</td> </tr> <tr> <td>
<label for="Comments">Comments*:</label>
</td> <td>
<textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
</td> </tr> <tr> <td>

</td> <td>

<input name="register" type="submit" value="Submit" style="background-color:darkcyan;width:100px;color:white;height:40px;font-size:25px;">

</td> </tr>
</table></form>
</center>
<br><br><br><br><br><br>

<footer style="width:100%;height:20%;background:skyblue;color: black;font-weight:20px;" ><center>all right reserved by lydia</center></footer>


</body>
</html> 





