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

<div class="images" style="position: relative; top: 130px;">
<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="welcome.JPG">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"> </h2>
</div>
<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="house12.jpeg">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"> </h2>
</div>
<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="house.tif">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"></h2>
</div>
<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="house6.jpg">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"></h2>
</div>

<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="house20.jpg">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"></h2>
</div>

<div class="slide">
<img style="position:relative;left:-20px;width:700px;height:400px;"  src="house11.jpg">
<h2 style="font-size:15px;position:relative;top:-480px;left:850px;"></h2>

</div>
</div>
<div class="go" style="position: relative; top: 300px;">
<p style="background-color:white;color:black;width:600px;height:300px;margin-left:700px;margin-top:-600px; font-size:25px;font-family:Rockwell Condensed;"> Online Booking Passage Houses in Kigali system helps people to book passage houses online.
It provides different services such as house uploading which will allow people to upload their houses .All users who want to book and upload  their houses or their advertisements have to create account in order to use this system.</p>
<script>
var index=0; 
slides();
function slides(){
var s = document.getElementsByClassName("slide");

for(i=0;i<s.length;i++){
s[i].style.display = "none";}

if(index<s.length)
s[index].style.display="block";

index++;
if(index>=s.length)
index=0;


setTimeout(slides, 3000);
}

</script>
<br><br><br><br><br><br><br>

<div class="me"style="background-color:white;color:black">
</div>
<footer style="width:100%;height:20%;background:skyblue;color: black;font-weight:20px;" ><center>Copyright 2019 all right reserved</center></footer>
</body>
</html>



