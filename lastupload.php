
<?php
session_start();
if(!(isset($_SESSION['name']))){
	header("Location: adverts.php");
}else{
echo"<div id='na'>";
echo "Hello"." ".$_SESSION['name'];
echo "</div>";
}
echo "<div id='lo'>";
echo "<a href=help.html><b> LOGOUT </b></a>";
echo"</div>"
?>
<!DOCTYPE html>
<html>
<head><title> File Upload</title>
<style>
#na{
	margin-top:20px;
	color:azure;
	font-size:150%;
	margin-left:30px;
}

#lo{
	margin-left:80%;
	margin-top:20px;
}
#content{
	width:50%;
	margin:20px auto;
	border:1px solid green;
}

form{
	width:50%;
	margin:20px auto;
}
form div{
	margin-top:5px;
}
#img_div{
	width:60%;
	padding:5px;
	margin:15px auto;
	border:1px solid grey;
	box-shadow:2px 3px 5px grey;
}

#img_div:after{
	content:"";
	display:block;
	clear:both;
	
}

img{
	float:left;
	margin:5px;
	width:300px;
	height:200px;
}

.hea{
	background:rgba(0,0,0,0.4);
	height:120px;
	margin-top:-70px;
}
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
div.head2{background-color:white;height:140px;padding:35px;margin-top:-2px;font-size:25px;}
h1.jumbotron right{font-size:20px; color:blue;}

#us{height:550px;color:black;margin-top:900px;margin-left:5px; box-shadow: 0 -10px 12px darkgreen;}
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
	  

.IS19-content{display:none;
box-shadow:5px 5px 10px blue;
}
.IS19-content a{display:block;
padding:15px;
text-decoration:none;
color:white;}

.IS19A:hover .IS19-content{display:block;
background-color:white;color:black;}

.IS19-content a:hover{background-color:blue;}

margin: auto;
}


.active, .dot:hover {
  background-color: white;
}

body{
background-image:url("convention.JPG");
background-repeat: repeat;

}
}

</style>
</head>
<body>

<div id="jo">
<h1 style="height:150px;color:white;width:100%;padding:3%;margin-left:5px;text-align:center;"><b>ONLINE BOOKING PASSAGE HOUSES IN KIGALI</b></h1>
<image src="house5.jpg"style="width:350px;height:188px;margin-left:80%;margin-top:-400px;">
</div>

<div class="head2"><h2 style="float:left"><a href="index.html">HOME</a></h2>

 <h2 style="float:left"><a href="events.html">SERVICES</a></h2>

 <div class="IS19A">
<div class="Is19"><b>PASSAGE HOUSES</b></div>

<div class="IS19-content">
<a href="hotel1.html"><b>GASABO</b></a>
<a href="hotel2.html"><b>KICUKIRO</b></a>
<a href="hotel3.html"><b>NYARUGENGE</b></a>
</div>
</div>
<h2 style="float:left"><a href="Help.html"><b>UPLOAD A HOUSE</b></a></h2>

<h2 style="float:left"><a href="adverts.php"><b>ADVERTS</b></a></h2>

 <div class="IS19A">
<div class="Is19"><b>ACCOUNT</b></div>

<div class="IS19-content">
<a href="register.php"><b>REGISTER</b></a>
<a href="login.php"><b>LOGIN</b></a>
<a href="index.html"><b>LOGOUT</b></a>
</div>
</div>	
<h2 style="float:left"><a href="Help.html"><b>HELP</b></a></h2>
 
</div>
</div>
<form action="" method="post" id="form" enctype="multipart/form-data">
     Upload image : 
     <input type="file" name="uploadFile" value="" />
     <input type="submit" name="submitBtn" value="Upload" />
</form>
<?php
if(isset($_POST['submitBtn']) && !empty($_POST['submitBtn'])) {
    if(isset($_FILES['uploadFile']['name']) && !empty($_FILES['uploadFile']['name'])) {
        //Allowed file type
        $allowed_extensions = array("jpg","jpeg","png","gif");
    
        //File extension
        $ext = strtolower(pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION));
    
        //Check extension
        if(in_array($ext, $allowed_extensions)) {
           //Convert image to base64
           $encoded_image = base64_encode(file_get_contents($_FILES['uploadFile']['tmp_name']));
           $encoded_image = 'data:image/' . $ext . ';base64,' . $encoded_image;
           $query = "insert into `images` set `encoded_image` = '".$encoded_image."'";
           mysqli_query($con, $query);
           echo "File name : " . $_FILES['uploadFile']['name'];
           echo "<br>";
           if(mysqli_affected_rows($con) > 0) {
              echo "Status : Uploaded";
              $last_insert_id = mysqli_insert_id($con); 
           } else {
              echo "Status : Failed to upload!";
           }
       } else {
           echo "File not allowed";
       }
  }
}

?>
<?php
if($last_insert_id) {
  $query = "select `encoded_image` from `images` where `id`= ". $last_insert_id;
  $result = mysqli_query($con, $query);
  if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_object($result);
    echo "<br><br>";
    echo '<img src="'.$row->encoded_image.'" width="250">';
  }
}
?>



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