<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
if(isset($_POST['submit']))
{
$sql="select * from faculty where id='$_POST[id]'";
$_SESSION['id2']=$_POST['id'];
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);

}

if(isset($_POST['submit1']))
{
$select="select * from student_master_attendance where stud_id='$_POST[id1]'";
$_SESSION['id3']=$_POST['id1']; 
$queryy=mysql_query($select);
$fetch=mysql_fetch_array($queryy);
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karmanta - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Karmanta, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Profile | Karmanta - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <div class="alert alert-block alert-danger fade in karmanta-pro">
          <button data-dismiss="alert" class="close close-sm" type="button">
              <i class="icon-remove"></i>
          </button>
          <h3><strong>Heya !</strong> Download KARMANTA Full version in just 8$  :  <a href="http://dmartify.com/live-preview/?theme_id=10631" target="_blank">DEMO</a>  |  <a href="http://dmartify.com/downloads/karmanta-bootstrap-3-responsive-admin-template/" target="_blank">BUY NOW!</a></h3> 
      </div>
      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Karm<span>anta</span> <span class="lite">Lite</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
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
                            <span class="icon-task-l"></i>
                            <span class="badge bg-important">5</span>
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
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
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

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="icon_profile"></i></span> 
                                    Friend Request
                                    <span class="small italic pull-right">5 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    John location.
                                    <span class="small italic pull-right">50 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_book_alt"></i></span> 
                                    Project 3 Completed.
                                    <span class="small italic pull-right">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon_like"></i></span> 
                                    Mick appreciated your work.
                                    <span class="small italic pull-right"> Today</span>
                                </a>
                            </li>                            
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Nrk Rao</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i>My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i>My Inbox</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i>Timeline</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_chat_alt"></i>Chats</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i>Log Out</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="icon_key_alt"></i>Documentation</a>
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
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Kit</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">General</a></li>
                          <li><a class="" href="buttons.html">Buttons</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="widgets.html">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li class="sub-menu">                     
                      <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="chart-chartjs.html">ChartJs</a></li>
                      </ul>                      
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Form Stuff</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Components</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu active">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="active" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
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
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
						  <?php
						  if(!empty($_POST['id']))
						  {
							  ?>
                            <div class="col-lg-2 col-sm-2">
                              <h4>Nrk Rao</h4>               
                              <div class="follow-ava">
							    <img src="../faculty/images/<?php echo $fetch['facultyimage'];?>" alt="">
                              </div>
						  <?php 
						  }
						  ?>
						  <?php
						  if(!empty($_POST['id1']))
						  {
							  ?>
                            <div class="col-lg-2 col-sm-2">
                              <h4>Nagarjuna</h4>               
                              <div class="follow-ava">
							    <img src="../student/images/<?php echo $fetch['stud_photo'];?>" alt="">
                              </div>
						  <?php 
						  }
						  ?>
                            
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Hello I’m Nrk Rao, a leading expert in interactive and creative design.</p>
                                <p>@Nrk Rao</p>
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                            </div>
                            <div class="col-lg-6 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              <h4>50</h4>
                                              <i class="icon_close_alt2"></i> Pending Task
                                          </li>
                                          <li>
                                              <h4>550</h4>
                                              <i class="icon_check_alt2"></i> Completed
                                          </li>
                                          <li>
                                              <h4>600</h4>
                                              <i class="icon_plus_alt2"></i> Total Task
                                          </li>
                                      </ul>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Recent Activity
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">                                          
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Edgar Parks</a> at 4:25pm, 30th Octmber 2013</p>
                                                      <p>An Awesome Piece of Cake For You Guys!</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Judi Mcginnis</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Jewell Clark</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Lorena Rose</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Brandy Childress</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Judi Mcginnis</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Knowledge speaks, but wisdom listens.</p>                                                      
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Jewell Clark</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Lorena Rose</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="act-time">                                      
                                              <div class="activity-body act-in">
                                                  <span class="arrow"></span>
                                                  <div class="text">
                                                      <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                      <p class="attribution"><a href="#">Brandy Childress</a> at 5:25am, 30th Octmber 2013</p>
                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                Hello I’m Nrk Rao, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
											  
                                              <?php
											  if(!empty($_POST['id']))
											  {
											  ?>
                                                  <p><span>Faculty Name</span>: <?php echo $fetch['NameoftheFaculty'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Father Name</span>: <?php echo $fetch['FatherName'];?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>DateofBirth</span>: <?php echo $fetch['DateofBirth'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>DateofJoining</span>: <?php echo $fetch['DateofJoining'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Gender</span>: <?php echo $fetch['Gender'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>EmailId</span>: <?php echo $fetch['EmailId'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Username</span>: <?php echo $fetch['username'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Password</span>:  <?php echo $fetch['Password'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Department</span>:  <?php echo $fetch['Department'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Designation</span>:  <?php echo $fetch['Designation'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Qualification</span>:  <?php echo $fetch['HighestQualification'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>PayScale</span>:  <?php echo $fetch['PayScale'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Exp</span>:  <?php echo $fetch['exp'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Address </span>:  <?php echo $fetch['Address'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Number</span>:  <?php echo $fetch['number'];?></p>
                                              </div>
											 <?php
											  }
											  ?>
											  
											   <?php
											  if(!empty($_POST['id1']))
											  {
											  ?>
                                                  <p><span>Student Name</span>: <?php echo $fetch['stud_name'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Student Father Name</span>: <?php echo $fetch['stud_father_name'];?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Course Id</span>: <?php echo $fetch['course_id'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Student Id</span>: <?php echo $fetch['stud_id'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Section Id</span>: <?php echo $fetch['sec_id'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Section</span>: <?php echo $fetch['section'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Roll Number</span>: <?php echo $fetch['rollno'];?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Gender</span>:  <?php echo $fetch['gender'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Date Of Birth</span>:  <?php echo $fetch['dob'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Date Of Joining</span>:  <?php echo $fetch['doj'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Email Id</span>:  <?php echo $fetch['emailid'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Password</span>:  <?php echo $fetch['Password'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Student Phone</span>:  <?php echo $fetch['stud_phone'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Parent Phone</span>:  <?php echo $fetch['parent_phone'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Address</span>:  <?php echo $fetch['Address'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Current Semister</span>:  <?php echo $fetch['current_sem'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Student Photo</span>:  <?php echo $fetch['stud_photo'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>regulation</span>:  <?php echo $fetch['regulation'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>status</span>:  <?php echo $fetch['status'];?></p>
                                              </div>
											  <div class="bio-row">
                                                  <p><span>Dept Id</span>:  <?php echo $fetch['dept_id'];?></p>
                                              </div>
											  
											 <?php
											  }
											  ?>
											  
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <?php
                                                 if(!empty($_POST['id']))
                                                   {
	                                                    ?>  
                                              <form input type="text" class="form-horizontal" role="form" name="" method="post" action="adminfacultyupdate.php"> 
											  
                                                     
	                                               
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">NameoftheFaculty</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyname" name="NameoftheFaculty" placeholder=" " value="<?php echo $fetch['NameoftheFaculty'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">FatherName</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="fathername" name="FatherName" placeholder=" " value="<?php echo $fetch['FatherName'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DateofBirth</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="dob" name="DateofBirth" placeholder=" " value="<?php echo $fetch['DateofBirth'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">DateofJoining</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="doj" name="DateofJoining" placeholder=" " value="<?php echo $fetch['DateofJoining'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="gender" name="Gender" placeholder=" " value="<?php echo $fetch['Gender'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">EmailId</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="emailid" name="EmailId" placeholder=" " value="<?php echo $fetch['EmailId'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">username</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="username" name="username" placeholder=" " value="<?php echo $fetch['username'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="password" name="Password" placeholder=" " value="<?php echo $fetch['Password'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Department</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="department" name="Department" placeholder=" " value="<?php echo $fetch['Department'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Designation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="designation" name="Designation" placeholder=" " value="<?php echo $fetch['Designation'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Qualification</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="qualification" name="HighestQualification" placeholder=" " value="<?php echo $fetch['HighestQualification'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">PayScale</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="payscale" name="PayScale" placeholder=" " value="<?php echo $fetch['PayScale'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">exp</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="exp" name="exp" placeholder=" " value="<?php echo $fetch['exp'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="exp" name="Address" placeholder=" " value="<?php echo $fetch['Address'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">number</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="number" placeholder=" " value="<?php echo $fetch['number'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="UPDATE" class="btn btn-primary">UPDATE</button>
                                                          <button type="button" class="btn btn-danger">CANCEL</button>
														  </div>
														  </div>
														  </form>
														  <?php
														  }
														  ?>
														  
														  <?php
                                                 if(!empty($_POST['id1']))
                                                   {
	                                                    ?>  
                                              <form input type="text" class="form-horizontal" role="form" name="" method="post" action="adminstudentupdate.php"> 
											  
                                                     
	                                               
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyname" name="stud_name" placeholder=" " value="<?php echo $fetch['stud_name'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Father Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="fathername" name="stud_father_name" placeholder=" " value="<?php echo $fetch['stud_father_name'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Course Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="dob" name="course_id" placeholder=" " value="<?php echo $fetch['course_id'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="doj" name="stud_id" placeholder=" " value="<?php echo $fetch['stud_id'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Section Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="gender" name="sec_id" placeholder=" " value="<?php echo $fetch['sec_id'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Section</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="emailid" name="section" placeholder=" " value="<?php echo $fetch['section'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Roll Number</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="username" name="rollno" placeholder=" " value="<?php echo $fetch['rollno'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Gender</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="password" name="gender" placeholder=" " value="<?php echo $fetch['gender'];?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Date Of Birth</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="department" name="dob" placeholder=" " value="<?php echo $fetch['dob'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Date Of Joining</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="designation" name="doj" placeholder=" " value="<?php echo $fetch['doj'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email Id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="qualification" name="emailid" placeholder=" " value="<?php echo $fetch['emailid'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="payscale" name="Password" placeholder=" " value="<?php echo $fetch['Password'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Phone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="exp" name="stud_phone" placeholder=" " value="<?php echo $fetch['stud_phone'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Parent Phone</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="exp" name="parent_phone" placeholder=" " value="<?php echo $fetch['parent_phone'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Address</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="Address" placeholder=" " value="<?php echo $fetch['Address'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Current Semister</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="current_sem" placeholder=" " value="<?php echo $fetch['current_sem'];?>">
                                                      </div>
                                                  </div><div class="form-group">
                                                      <label class="col-lg-2 control-label">Student Photo</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="stud_photo" placeholder=" " value="<?php echo $fetch['stud_photo'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Regulation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="regulation" placeholder=" " value="<?php echo $fetch['regulation'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Status</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="status" placeholder=" " value="<?php echo $fetch['status'];?>">
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label">dept_id</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="facultyphone" name="dept_id" placeholder=" " value="<?php echo $fetch['dept_id'];?>">
                                                      </div>
                                                  </div>
												  
												  
												  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" name="UPDATE" class="btn btn-primary">UPDATE</button>
                                                          <button type="button" class="btn btn-danger">CANCEL</button>
														  </div>
														  </div>
														  </form>
														  <?php
														  }
														  ?>
										
                                        </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
