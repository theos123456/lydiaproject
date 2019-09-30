<?php
@session_start();
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['upload']))
{
 $district=$_POST['district'];
 $sector=$_POST['sector'];
 $img=$_POST['img'];
 $room=$_POST['room'];
 $limitation=$_POST['limitation'];
 $kitchen=$_POST['kitchen'];
 $type=$_POST['type'];
 $description=$_POST['description'];
 $price=$_POST['price'];
 $userid=1;

 
//to search if tin number exist

//file uploads------------------------------------------------------------
if(isset($_FILES['img']) && $_FILES['img']['name']!="")
	{
	$photo_name=$_FILES['img']['name'];
	$photo_temp=$_FILES['img']['tmp_name'];
	$photo_size=$_FILES['img']['size'];
	$folder=$target_dir = 'uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name1=str_replace($photo_ext," ",$photo_name);
	$new_name=$name1."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;

	
//end of file uploads-----------------------------------------------------
 
 $sql2 = "INSERT INTO publication VALUES ( null, 'district','sector','".$_SESSION['front']."','$room','$limitation','$washing','$kitchen','$type','$description','$price','$userid')" or die(mysql_error());
//to insert uid from company to user
 
   
    
    if ($conn->query($sql2) === TRUE )
     {
      
       echo "<script>alert('house uploaded successfull')</script>";
     }
     else{
      echo "<script>alert('house is not uploaded successfull')</script>";

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

<body>
<body  >

<div id="jo"style="background-image:url('convention.jpg');background-repeat:repeat;margin-left:350px;height:188px;width:1300px;" >
<image src="logo3.png"style="width:350px;height:188px;margin-left:-350px;margin-top:0px;background-color:black;">
<h1 style="height:150px;color:white;width:100%;padding:3%;margin-left:5px;text-align:center;margin-top:-210px;font-family:Rockwell Condensed;"><b>ONLINE BOOKING PASSAGE HOUSES IN KIGALI</b></h1>

</div>
<div id="all">
<div class="head2"><h2 style="float:left"><a href="index.html">HOME</a></h2>

 <h2 style="float:left"><a href="services.html">SERVICES</a></h2>

 <div class="IS19A">
<div class="Is19"><b>PASSAGE HOUSES</b></div>

<div class="IS19-content">
<a href="gasabo.php"><b>GASABO</b></a>
<a href="kicukiro.php"><b>KICUKIRO</b></a>
<a href="nyarugenge.php"><b>NYARUGENGE</b></a>
</div>
</div>
<h2 style="float:left"><a href="upload.php"><b>UPLOAD A HOUSE</b></a></h2>

<h2 style="float:left"><a href="adverts.php"><b>ADVERTS</b></a></h2>

 <div class="IS19A">
<div class="Is19"><b>ACCOUNT</b></div>

<div class="IS19-content">
<a href="register.php"><b>REGISTER</b></a>
<a href="login.php"><b>LOGIN</b></a>
<a href="index.html"><b>LOGOUT</b></a>
</div>
</div>
<h2 style="float:left"><a href="help.php"><b>HELP</b></a></h2>
 
</div>
</div>
<div class="contents-containner">

<div class="form-group">
<form name="register" action="#" enctype="multipart/form-data" method="post">

  <h1> House Registeration form </h1>


  <p class="form-contents">
	  <label>House District</label>
	  <select name="district" class="input">
		  <option value="gasabo">gasabo</option>
		  <option value="nyarugenge">nyarugenge</option>
		  <option value="kicukiro">kicukiro</option>
</select>
  </p>

  <p class="form-contents">
      <label>Sector</label>
      <input type="text" class="input" name="sector" value="">
  </p>
  <p class="form-contents">
      <label>house image </label>
      <input type="file" class="input" name="img" value="">
  </p>
  <p class="form-contents">
      <label>number of rooms</label>
      <input type="number" class="input" name="room" value="">
  </p>
  <p class="form-contents">
      <label>number of comfortable people </label>
      <input type="number" class="input" name="limitation" value="">
  </p>
  <p class="form-contents">
      <label>number of washing room</label>
      <input type="number" class="input" name="washing" value="">
  </p>

  <p class="form-contents">
      <label>number of kitchen</label>
      <input type="number" class="input" name="kitchen" value="">
  </p>

  <p class="form-contents">
      <label>type</label>
	  <select name="type" class="input">
		  <option value="tower">tower</option>
		  <option value="single">single</option>
		  
</select>

  </p>
  <p class="form-contents">
      <label>Description</label>
      <textarea cols="20" rows="10" class="input" name="description"></textarea>
  </p>
  <p class="form-contents">
      <label> price of a house</label>
      <input type="text" class="input" name="price" value="">
  </p>
  <p class="form-contents">
  <input type="submit" name="upload" class="submit" value="Register">
  </p>

</form>

</div>

</div>

<div class="me"style="background-color:white;color:black">
</body>
</html>
<div id="us" >
<div id="contact" style="margin-left:50px;">
<h1 style="text-align:left;margin-left:25px;margin-top:70px;">CONTACT US</h1>
<hr style="width:240px;margin-left:5px;margin-top:-20px;color:blue">
<p style="text-align:left;font-size:25px;margin-left:5px;">
Whatsapp :0786278818 <br>
Tel :0786278818<br>
Facebook:Josiane Ntakarutimana<br>
Linkedlin:Josiane Ntakarutimana<br>
Emails : josianentakarutimana@gmail.com<br>

</div>
<div id="service" style="margin-left:600px;margin-top:-235px;width:25%;">
<h1 style="margin-left:2px;text-align:center;">ABOUT US</h1>
<hr style="width:200px;margin-left:100px;margin-top:-20px;color:blue;">
<p style="margin-left:95px;font-size:25px;">This website is built for the purpose of helping Rwandans and foreigners who need passage houses for holidays or for different parties to book them online from wherever  they are.<br><br> </p>
</div>
<div id="about" style="margin-left:1080px;margin-top:-300px;">
<h1 style="margin-left:40px;text-align:center;"> OUR MISSION</h1>
<hr style="width:245px;margin-left:240px;margin-top:-20px;color:blue">
<p style="margin-left:220px;font-size:25px;">Customer care<br><br> Satisfy our customers<br>Developing ICT sector<br><br><br> </p>

</div><br><br><br><br>

<i><p style="text-align:center;font-size:30px;color:white;margin-top:90px;color:#F5F5F5;"><b>CopyRight&copy;  Josiane NTAKARUTIMANA  2019</b></p></i>
</div>



</body>
</html> 