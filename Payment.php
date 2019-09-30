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
<div>

<h1 style="font-size:55px;">Hello,Welcome to payment Page!!!</h1>
<div id="form" style="background-color:powderblue;width:30%;font-size:65px;height:1200px;margin-top:70px;align:center; margin-left:250px;">
<form action="#"Method="POST">
<h3 style="font-size:45px;text-align:center;padding-top:100px;background-color:darkcyan;height:200px;">Payment Form</h3>
<center>
<table style="margin-top:-320px;">
<tr><td style="color:black;">Names</td><td><input type="text" name="names"id="names" required style="Width:360px;height:40px;font-size:25px;"></td></tr>
<tr><td style="color:black;">Email:</td><td><input type="Email" name="Email"id="Email" required style="Width:360px;height:40px;font-size:25px;"></td></tr>
<tr><td style=="color:black;">House_No:</td><td><input type="text" name="House_No" required style="Width:360px;height:40px;font-size:25px;"></td></tr><td>
<input type="radio" name="p" value="Mobile Money" checked> Mobile Money<br>
<input type="radio" name="p" value="Visa Card" checked> Visa Card<br>
<input type="radio" name="p" value="Credit Card" checked> Credit Card<br>
<tr><td style="color:black;">Price:</td><td><input type="text" name="Price"  required style="Width:360px;height:40px;font-size:25px;"></td></tr>
<tr><td style="color:black;">CardNo:</td><td><input type="text" name="CardNo" required style="Width:360px;height:40px;font-size:25px;"></td></tr><br><br>
<tr><td style="color:black;">Arrivaldate:<br><td><input type="date" name="Arrivaldate" required style="Width:360px;height:40px;font-size:30px;"></td></tr><br><br>
<tr><td style="color:black;">Departuredate:<br><td><input type="date" name="Departuredate" required style="Width:360px;height:40px;font-size:30px;"></td></tr><br><br>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>

<tr><td><input type="submit" name="submit"style="Width:120px;height:50px;font-size:35px;background-color:darkcyan;"></td>
<td><input type="reset" name="reset"style="Width:105px;height:50px;font-size:35px;background-color:darkcyan;"></td></tr>
</div>
</table>
</form>
</center> 
<?php
if(isset($_POST['submit'])){

//get values of the Registration form submited by buyers

$Names=$_POST['names'];
$Email=$_POST['Email'];
$House_No=$_POST['House_No'];
$Payment_mode=$_POST['p'];
$Price=$_POST['Price'];
$CardNo=$_POST['CardNo'];
$Arrivaldate=$_POST['Arrivaldate'];
$Departuredate=$_POST['Departuredate'];

//create a connection with database session using mysqli_connect()
$conn = mysqli_connect("localhost","root","","projectjo");


//insert records in database
$sql="insert into payment(Names,Email,House_No,Price,Paymentmode,CardNo,Arrivaldate,Departuredate) 
 VALUES('$Names','$Email',$House_No,'$Price','$Payment_mode','$CardNo','$Arrivaldate','$Departuredate')";
 
if (mysqli_query($conn,$sql)) {
    
echo"submission successful"; 

 
}else{
echo"submission failed".mysqli_error($conn);
}}
?>

<script>
var Arrivaldate= this.getshopdate("Arrivaldate");
if (Arrivaldate.value == "")&&(Departuredate.value) {
  Arrivaldate.value = util.printd("mm/dd/yyyy", new Date());
  Departuredate.value = util.printd("mm/dd/yyyy", new Date());
}
document.write"The date is not valid,check well!";
</script>
?>
<div class="me"style="background-color:white;color:black">
<div id="us" >
<div id="contact" style="margin-left:10px;">
<h1 style="text-align:left;margin-left:25px;margin-top:70px;font-family:Rockwell Condensed;">CONTACT US</h1>
<hr style="width:240px;margin-left:5px;margin-top:-20px;color:blue">
<p style="text-align:left;font-size:25px;margin-left:5px;font-family:Rockwell Condensed;">
Tel :+250786278818<br>
Whatsapp :+250786278818 <br>
Facebook:Josiane Ntakarutimana<br>
Linkedlin:Josiane Ntakarutimana<br>
Email : josianentakarutimana@gmail.com<br>
Instagram : josianentakarutimana<br>

</div>
<div id="service" style="margin-left:600px;margin-top:-270px;width:25%;">
<h1 style="margin-left:2px;text-align:center;font-family:Rockwell Condensed;">ABOUT US</h1>
<hr style="width:200px;margin-left:100px;margin-top:-20px;color:blue;">
<p style="margin-left:95px;font-size:25px;font-family:Rockwell Condensed;">This website is built for the purpose of helping Rwandans and foreigners who need passage houses for holidays or different parties to book them online from wherever  they are.<br><br> </p>
</div>
<div id="about" style="margin-left:1070px;margin-top:-300px;">
<h1 style="margin-left:40px;text-align:center;font-family:Rockwell Condensed;"> OUR MISSION</h1>
<hr style="width:245px;margin-left:150px;margin-top:-20px;color:blue">
<p style="margin-left:150px;font-size:25px;font-family:Rockwell Condensed;">Our mission is to help people who want to pass their holidays in Kigali or participate in different ceremonies to be able to book passage houses online.<br><br><br> </p>

</div><br><br><br><br>

<i><p style="text-align:center;font-size:25px;color:black;margin-top:90px;font-family:Rockwell Condensed;"><b><i>CopyRight&copy;  Josiane NTAKARUTIMANA  2019</b></p></i>
</div>



</body>
</html> 
