<?php
session_start();
//echo"<script>alert('".$_SESSION['userId']."')</script>";
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}

else{
  
if(isset($_POST['update']))
{
 $first=$_POST['first'];
 $last=$_POST['last'];
 $location=$_POST['location'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 //$userid=1;

 
//to search if tin number exist

//file uploads------------------------------------------------------------

//end of file uploads-----------------------------------------------------
 
 //$sql2 = "INSERT INTO publication VALUES ( null, 'district','sector','".$_SESSION['front']."','$room','$limitation','$washing','$kitchen','$type','$description','$price','".$_SESSION['userId']."')" or die(mysql_error());
 $sql0 =$conn->query( "UPDATE users SET fname='$first',lname='$last',location='$location',email='$email',phone='$phone',username='$username',password='$password' WHERE userid='".$_SESSION['userId']."'");
if($sql0 == true)
{
echo"<script>alert('well updated')</script>";
}
else{
  echo"<script>alert('not Updated')</script>";
}
//to insert uid from company to user
 
   
    
    
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
      <a href="index.html" class="logo">Online <span class="lite">Booking Passage houses in kigali</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
        
          <!-- task notificatoin end -->
         
            
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                
                            </span>
                            <span class="username">Admin</span>
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
            <?php
           // echo"<script>alert('".$_SESSION['userId']."')</script>";
            $sel=mysqli_query($conn,"select * from users where userid='".$_SESSION['userId']."'") or die("selecting error");
          $row=mysqli_fetch_assoc($sel);
            ?>
            <form action="#"   method="POST" enctype="multipart/form-data">
                <h1>  
                  <?php// echo $_SESSION['userId']; ?>
                </h1>
                
              <div class="form-group">
                <label>firstname</label>
                <input type="text" name="first" value="<?php echo $row['fname']; ?>" class="form-control">
		         <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>last name</label>
                  <input type="text" class="form-control" name="last" value="<?php echo $row['lname']; ?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>location</label>
                  <input type="text" class="form-control" name="location" value="<?php echo $row['location']; ?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>email</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>phone</label>
                  <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label>username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
              <div class="form-group">
              <label> password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>"  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
              </div>
             
                  

              

              <div class="text-center"><input type="submit" class="btn btn-primary btn-lg" name="update" value="update"></div>
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
