<?php
session_start();
$conn=mysqli_connect('localhost','root','','reservation') or die('Connection fails');


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

  <title>Online house reservation system</title>

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
      <a href="index.html" class="logo">Online <span class="lite">Reservation</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
       
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          <li id="task_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           
                        </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 pending tasks</p>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Design PSD </div>
                    <div class="percent">90%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                      <span class="sr-only">90% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">
                      Project 1
                    </div>
                    <div class="percent">30%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                      <span class="sr-only">30% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Digital Marketing</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Logo Designing</div>
                    <div class="percent">78%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                      <span class="sr-only">78% Complete (danger)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="task-info">
                    <div class="desc">Mobile App</div>
                    <div class="percent">50%</div>
                  </div>
                  <div class="progress progress-striped active">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                      <span class="sr-only">50% Complete</span>
                    </div>
                  </div>

                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- task notificatoin end -->
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
           
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
              <li>
                <p class="blue">You have 5 new messages</p>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                    <span class="message">
                                        I really like this admin panel.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                    <span class="message">
                                        Icon fonts are great.
                                    </span>
                                </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox notificatoin end -->
          <!-- alert notification start-->
          <li id="alert_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            
                        </a>
            <ul class="dropdown-menu extended notification">
         
            </ul>
          </li>
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img src="img/avatar-mini2.jpg" style="height:40px;">
                            </span>
                            <span class="username"><?php echo $_SESSION['username']; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                
              </li>
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
                          <span>reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="active" href="basic_table.php">Report</a></li>
            </ul>
          </li>

         
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                user details
              </header>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>username</th>
                    <th>email</th>
                    
                    <th>action</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $_SESSION['userId'];?></td>
                    <td><?php echo $_SESSION['username'];?></td>
                    
                    <td><?php echo $_SESSION['email'];?></td>
                    
                    <td><a href="register.php" class="btn btn-primary">modify</a></td>
                    
                  </tr>
                                 </tbody>
              </table>
            </section>
          </div>
          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
              </header>
              
            </section>
          </div>
        </div>
   <!------------------------------------------------------------start of report----------->
  <?php
   $conn=mysqli_connect('localhost','root','','reservationm') or die('Connection fails');
$query1=mysqli_query($con,"select * from users where type='publisher'") or die("selecting error");
  ?>
  

   <!------------------------------------------------------------END----------------------->
                Publication  report
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>  Names</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_calendar"></i> district</th>
                    <th><i class="icon_calendar"></i> phone</th>
                    <th><i class="icon_cogs"></i> delete</th>
                    

                   
                    
                  </tr>
                  <?php
                  while($row=mysqli_fetch_assoc($query1))
                  {
                    ?>
                  <tr>
                    <td><?php echo $row['fname']."".$row['lname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['district'];?></td>
                    <td><?php echo $row['phone'];?></td>
                   

<form action="#" method="post">
<input type="hidden" name="userid" value="<?php echo $row['userid'];?>">

<td><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td> 



</form>                   
                  
                  
                 
                 <?php

                if(isset($_GET['userid']))
                {
                  $userid=$_GET['userid'];
                }
                if(isset($_POST['delete']))
                {
                
                $userid=$_POST['userid'];
               // echo"<script>alert($id)</script>";
                $del1="DELETE FROM users where userid='$userid'";
                $del2="DELETE FROM publication where userid='$userid'";

                if(($conn->query($del1)==true and $conn->query($del2)==true))
                 {
//echo "user deleted success";
                  echo '<script>location.href="basic_table.php"</script>';
                  
                 }
                 else{
                 // echo "delete fail";
                  echo '<script>location.href="basic_table.php"</script>';

                 }
                }
                ?>
    
                  </tr>
                  <?php
                  }
                  ?>

               
                        </tbody>
              </table>
            </section>
          </div>
          
        </div>



        <!-- page end-->
        <?php
   $conn=mysqli_connect('localhost','root','','reservatiom') or die('Connection fails');
$query1=mysqli_query($con,"select * from comments") or die("selecting error");
  ?>
  

   <!------------------------------------------------------------END----------------------->
                Comment  report
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> id</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_calendar"></i> comment</th>
                    <th><i class="icon_cogs"></i> delete</th>
                    

                   
                    
                  </tr>
                  <?php
                  while($row=mysqli_fetch_assoc($query1))
                  {
                    ?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['comments'];?></td>
                   

<form action="#" method="post">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

<td><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td> 



</form>                   
                  
                  
                 
                 <?php

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];
                }
                if(isset($_POST['delete']))
                {
                
                $id=$_POST['id'];
               // echo"<script>alert($id)</script>";
               // $del1="DELETE FROM users where userid='$userid'";
                $del2="DELETE FROM comments where id='$id'";

                if(( $conn->query($del2)==true))
                 {
//echo "user deleted success";
                  echo '<script>location.href="basic_table.php"</script>';
                  
                 }
                 else{
                 // echo "delete fail";
                  echo '<script>location.href="basic_table.php"</script>';

                 }
                }
                ?>
    
                  </tr>
                  <?php
                  }
                  ?>

               
                        </tbody>
              </table>
            </section>
          </div>
        <!-- comments reports-->
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
          Designed by <a href="https://bootstrapmade.com/">Lydia</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
