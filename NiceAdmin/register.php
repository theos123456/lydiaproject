<?php
session_start();
//echo"<script>alert('".$_SESSION['userId']."')</script>";
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['upload']))
{
 $district=$_POST['district'];
 $sector=$_POST['sector'];
 //$image0=$_POST['image0'];
 $room=$_POST['room'];
 $washing=$_POST['washing'];
 $limitation=$_POST['limitation'];
 $kitchen=$_POST['kitchen'];
 $type=$_POST['type'];
 $description=$_POST['description'];
 $price=$_POST['price'];
 $bank_account=$_POST['bank_account'];
 //$userid=1;

 
//to search if tin number exist

//file uploads------------------------------------------------------------
if(isset($_FILES['image0']) && $_FILES['image0']['name']!="")
	{
	$photo_name=$_FILES['image0']['name'];
	$photo_temp=$_FILES['image0']['tmp_name'];
	$photo_size=$_FILES['image0']['size'];
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
 
 $sql2 = "INSERT INTO publication VALUES ( null, '$district','$sector','".$_SESSION['front']."','$room','$limitation','$washing','$kitchen','$type','$description','$price','".$_SESSION['userId']."','$bank_account')" or die(mysql_error());
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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>E-procurement</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo">Online <span class="lite">Booking passage house in kigali</span></a>
      <!--logo end-->

      
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
         
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          
           
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                          
                                
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              
              <li>
                <a href="./../login.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          


          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.php">Basic Registration</a></li>
            </ul>
          </li>

          <li class="sub-menu ">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              
              <li><a class="" href="register.php"><span>register market </span></a></li>
             
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-bars"></i>Pages</li>
              <li><i class="fa fa-square-o"></i>Pages</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-6">
            <div class="recent">
              <h3>register new house</h3>
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <!---------------------------form--------------------->
            <form action="#"   method="POST" enctype="multipart/form-data">
                <h1>  
                  <?php// echo $_SESSION['userId']; ?>
                </h1>
                
              <div class="form-group">
                <label>house District</label>
                <select name="district" class="form-control">
		  <option value="gasabo">gasabo</option>
		  <option value="nyarugenge">nyarugenge</option>
		  <option value="kicukiro">kicukiro</option>
</select>
                <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>sector</label>
                  <input type="text" class="form-control" name="sector" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>house image</label>
                  <input type="file" class="form-control" name="image0" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>number of rooms</label>
                  <input type="text" class="form-control" name="room" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>number of confortable people</label>
                  <input type="text" class="form-control" name="limitation" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>number of washing rooms</label>
                  <input type="text" class="form-control" name="washing" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>number of kitchen</label>
                  <input type="text" class="form-control" name="kitchen" value=""  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>TYPE</label>
              <select name="type" class="form-control" id="subject" required/>
<option value="single">Single</option>
<option value="tower">tower</option>

</select>
                           <div class="validation"></div>
              </div>
              <div class="form-group">
            
                
            <div class="form-group">
              <textarea class="form-control" name="description" rows="5"  placeholder="House Description" required></textarea>
              <div class="validation"></div>
            </div>
              <div class="form-group">
              <label>price of house</label>
                  <input type="text" class="form-control" name="price" required />
                           <div class="validation"></div></div>
                           <div class="form-group">
              <label>bank account</label>
                  <input type="text" class="form-control" name="bank_account" required />
                           <div class="validation"></div></div>
                         

              

              <div class="text-center"><input type="submit" class="btn btn-primary btn-lg" name="upload"></div>
            </form>
          </div>
<!-----------------------------------------------END---------------------------------------->
         
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="#">lydia</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
  <script src="contactform/contactform.js"></script>


</body>

</html>
