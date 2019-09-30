<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>House Reservation</title>
<link rel="stylesheet" href="input-style.css" />
<style>
#product
	{
	display: flex;
	width: 100%;
    flex-wrap: wrap;
	position: absolute;
	top: 51px;
	left: 0px;
	z-index: 1;
	overflow: hidden;
	}
#product table:hover
{
 opacity: 0.8;
}
	#product table {
		margin: 20px 40px;
		display: inline-block;
        flex-grow: 1;
		font-family: monospace;
		white-space: nowrap;
		z-index: -1;
		font-size: 16px;
	}
	tr:first-child
	{
		height: 220px;
	}
	td
	{
	 text-align: left;
	 width: 50%;
	}
	#product img
	{
	 box-shadow: 0px 0px 0.5px 0.5px black;
	 border-radius: 5px 5px 0px 0px;
	 margin-top: -17px;
	}
	#mark
	{
	 position: relative;
	 top: -77%;
	 left: 10%;
	 background-color: red;
	 border-radius: 50%;
	 width: 38%;
	 height: 50px;
	 text-align: center;
	 padding: 5px 0px;
	 -webkit-transform: rotate(-45deg);
	}
</style>
</head>

<body style="background-color:#80FF80;">
<?php include('menus.php'); ?>

<div id="product" style="z-index: -1;">
<?php
 include('connection.php');
 $del=mysqli_query($con, "DELETE FROM reserve WHERE end_date='".date('Y-m-d')."'");
 if(isset($_GET['loc'])): 
  $sel1 = mysqli_query($con, "SELECT * FROM publication WHERE district='".$_GET['loc']."'");
  while($fetch = mysqli_fetch_array($sel1)):
  $sel2 = mysqli_query($con, "SELECT * FROM reserve WHERE house_id='".$fetch['house_id']."'");
?>
<form action="reservation.php" method="post">
<table width="100%" style="box-shadow: 0px 0px 2px 2px orange; width: 250px; border-radius: 5px;">
<tr><td colspan="2" width="100%"><img src="../INSProject/NiceAdmin/<?php echo $fetch['image'] ;?>" style="width:100%; height:200px;"> </td></tr>
<tr><td>Sector: </td><td><?php echo $fetch['sector']; ?></td></tr>
<tr><td colspan="2" style="white-space:normal;"> <?php echo $fetch['rooms']; ?> Bedding, <?php echo $fetch['kitchen']; ?> Kitchen and <?php echo $fetch['washing-room']; ?> Birth rooms</td></tr>
<tr><td>Cost: </td><td><?php echo $fetch['price']."Frw"; ?> <input type="hidden" name="prod_id" value="<?php echo $fetch['house_id'];?>"></td></tr>
<tr><td colspan='2'><?php echo $fetch['description']; ?></td></tr>
<tr><td colspan='2'><?php echo $fetch['bank_account']; ?></td></tr>
<tr><td align="center" colspan="2"><input type="submit" name="add" value="Reserve" id="max"></td></tr>

</table>
<?php
 if(mysqli_num_rows($sel2) >= 1):
  $fetch1 = mysqli_fetch_array($sel2);
?>
<div id="mark">
 Reserved <br /> <label style="font-size: 12px; font-family: monospace;"> Due: <?php echo $fetch1['starting_date']; ?> <br />to: <?php echo $fetch1['end_date']; ?></label>
</div>
<?php
 endif;

?>
</form>
<?php
  endwhile;
 endif;
?>
</div>
</body>
</html>
