<html>
<head><title>Reservations</title>
<style>
 input[type=text]
 {
  width: 100%;
  height: 40px;
  border: none;
  box-shadow: 0px 0px 2px 2px blue;
  border-radius: 5px;
  padding: 20px 5px;
  font-family: monospace;
  font-size: 17px;
 }
 input[type=email]
 {
  width: 100%;
  height: 40px;
  border: none;
  box-shadow: 0px 0px 2px 2px blue;
  border-radius: 5px;
  padding: 0px 5px;
  font-family: monospace;
  font-size: 17px;
 }
 input[type=date]
 {
  width: 100%;
  height: 40px;
  border: none;
  box-shadow: 0px 0px 2px 2px blue;
  border-radius: 5px;
  padding: 20px 5px;
  font-family: monospace;
  font-size: 17px;
 }
 input[type=submit]
{
 width: 60%;
 height: 45px;
 box-shadow: 0px 0px 1.5px 1.5px #0080FF;
 border: none;
 
}
input[type=submit]:hover
{
 box-shadow: 0px 0px 1.5px 1.5px #6FB7FF;
}
 .contents-containner
 {
  width: 40%;
 }
 table tr th
 {
  text-align: left; 
  font-size: 20px;
  color:#F6F6F6;
  background-color: #3AB63E;
 }
 table tr td, th
 {
  padding: 5px 0px;
  font-family: monospace;
 }
 table tr td
 {
  padding: 5px 10px;
 }
 table tr td label
 {
  font-size: 18px;
 }
 .product
 {
  position: fixed;
  left: 80px;
  top: 160px;
  width: 250px;
  padding: 2px 20px;
 }
 .product img
 {
  border-radius: 5px; 
  width: 100%;
  height: 130px;
  box-shadow: 0px 0px 2px 2px blue;
 } 
</style>
</head>
 <body>

 <?php
 include('connection.php');
 @session_start();
 if(filter_input(INPUT_POST, 'add'))
 {
    //$date = date('Y-m-d');
    //echo "<script>/*alert('".date('Y-m-d', strtotime($date. ' + 5 days'))."')";
    if(isset($_POST['prod_id'])):
      $prod=$_POST['prod_id'];
     endif;
     $_SESSION['prod']=$prod;
	$sel1 = mysqli_query($con, "SELECT * FROM publication WHERE house_id='".$_SESSION['prod']."'");
    $fetch = mysqli_fetch_array($sel1);
 }
 
?>


 <div class="product">
  <table>
   <tr><td colspan="2"><img src="../INSProject/NiceAdmin/<?php echo $fetch['image'] ;?>" /></td></tr>
   <tr><td>N<sup><u>0</u></sup> of room: </td><td><?php echo $fetch['rooms']." rooms"; ?></td></tr>
   <tr><td>Kitchen: </td><td><?php echo $fetch['kitchen']." kitchens"; ?></td></tr>
   <tr><td>Bath room: </td><td><?php echo $fetch['washing-room']." rooms"; ?></td></tr>
   <tr><td>Cost: </td><td><?php echo $fetch['price']."Frw"; ?></td></tr>
   <tr><td colspan='2'>Bank:</td><td><?php echo $fetch['bank_account']; ?></td></tr>
  </table>
 </div>
 <center>
 <form action="" method="post" enctype="multipart/form-data">
 <div class="contents-containner">
  <table width="100%">
   <tr><td style="font-size: 24px; text-align: right;"> Reservation form<hr> </td></tr>
   <tr><th>Personal information</th></tr>
   <tr><td><label>Email</label><input type="email" name="email" /></td></tr>
   <tr><td><label>First Name</label><input type="text" name="first" /></td></tr>
   <tr><td><label>Last Name</label><input type="text" name="last" /></td></tr>
   <tr><th>Reservation Duration</th></tr>
   <tr><td><label>Reservation Date</label><input type="date" name="from" placeholder="-------- Date for reservation -------" /></td></tr>
   <tr><td><label>To</label><input type="date" name="to"  placeholder="------ Date for reservation overdue -------"/></td></tr>
   <tr><th>Payment Proof</th></tr>
   <tr><td><label>Payment slip</label><input type="file" name="image"  placeholder="------ Date for reservation overdue -------"/></td></tr>
   <tr><td>&nbsp;</td></tr>
   <tr><td align="center"><input type="submit" name="submit" value="Reserve"></td></tr>
  </table>
 </div>
 </form>
 </center>
 <?php
 if(filter_input(INPUT_POST, "submit")):
  if(isset($_POST['email'])):
   $mail = $_POST['email'];
  endif;
  if(isset($_POST['first'])):
   $first = $_POST['first'];
  endif;
  if(isset($_POST['last'])):
   $last = $_POST['last'];
  endif;
  if(isset($_POST['from'])):
   $from = $_POST['from'];
  endif;
  if(isset($_POST['to'])):
   $to = $_POST['to'];
  endif;
  if(isset($_FILES['image']) && $_FILES['image']['name']!="")
{
$photo_name=$_FILES['image']['name'];
$photo_temp=$_FILES['image']['tmp_name'];
$photo_size=$_FILES['image']['size'];
$folder="uploaded_slip/";
$res=$folder.$photo_name;
$number=0;
while(file_exists($res))
{
$number++;
$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg" or ".pdf";
$name=str_replace($photo_ext," ",$photo_name);
$new_name=$name."(".$number.")";
$new_name_ext=$folder . $new_name . $photo_ext;
$res=$new_name_ext;
}
$result=move_uploaded_file($photo_temp,$res);
}
  if(empty($mail) or empty($first) or empty($last) or empty($form) or empty($to) or empty($res)):
   $date1 = new DateTime($from);
   $date2 = new DateTime($to);
   $today = new DateTime(date("Y-m-d"));
   $sel2 = mysqli_query($con, "SELECT * FROM reserve WHERE house_id='".$_SESSION['prod']."'");
   if(mysqli_num_rows($sel2)>0):
    $fetch1 = mysqli_fetch_array($sel2);
    $date3 = new DateTime($fetch1['starting_date']);
	$date4 = new DateTime($fetch1['end_date']);
	if(!(($date1 > $date3) or ($date3 < $date2)) and (($date1 > $date4) or ($date4 > $date2))):
   echo "<script>alert('Already Reserved !')</script>";
   echo"<script>location.href='index.php';</script>";
	 return false;
	endif;
   endif;
   if (($date1 > $date2) or ($today > $date1)):
    echo "<script>alert('Please select reservation period acculately!')</script>";
    echo"<script>location.href='index.php';</script>";
	return false;
   elseif($date2 == $date1):
    echo "<script>alert('Please select valid range on less than 1 day!')</script>";
    echo"<script>location.href='index.php';</script>";
	return false;
   else:
    $name=$first." ".$last;
    $ins1=mysqli_query($con,"INSERT INTO reserve VALUES(null, '".$_SESSION['prod']."', '$mail', '$res', '$name', '$from', '$to')");
	if($ins1 == true):
   echo "<script>alert('Reservation Done! shortly you will receive email in your mail box')</script>";
   echo"<script>location.href='index.php';</script>";
	 return false;
	endif;
   endif;
  endif;
 endif;
 ?>
 </body>
</html>