<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  {{-- <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ URL::asset('asset/css/bootstrap.min.css') }} ">
  <!-- bootstrap theme -->
  {{-- <link href="css/bootstrap-theme.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{URL::asset('asset/css/bootstrap-theme.css')}}">
  <!--external css-->
  <!-- font icon -->
  {{-- <link href="css/elegant-icons-style.css" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/elegant-icons-style.css')}}">
  {{-- <link href="css/font-awesome.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/font-awesome.min.css')}}">
  <!-- full calendar css-->
  {{-- <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{{URL::asset('asset/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}">
  {{-- <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" /> --}}
<link rel="stylesheet" href="{{URL::asset('asset/assets/fullcalendar/fullcalendar/fullcalendar.css')}}">
  <!-- easy pie chart-->
  {{-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" /> --}}
<link rel="stylesheet" href="{{URL::asset('asset/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}">
  <!-- owl carousel -->
  {{-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css"> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/owl.carousel.css')}}">
  {{-- <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{URL::asset('asset/css/jquery-jvectormap-1.2.2.css')}}">
  <!-- Custom styles -->
  {{-- <link rel="stylesheet" href="css/fullcalendar.css"> --}}
  <link rel="stylesheet" href="{{URL::asset('asset/css/fullcalendar.css')}}">
  {{-- <link href="css/widgets.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/widgets.css')}}">
  {{-- <link href="css/style.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/style.css')}}">
  {{-- <link href="css/style-responsive.css" rel="stylesheet" /> --}}
  <link rel="stylesheet" href="{{URL::asset('asset/css/style-responsive.css')}}">
  {{-- <link href="css/xcharts.min.css" rel=" stylesheet"> --}}
<link rel="stylesheet" href="{{URL::asset('asset/css/xcharts.min.css') }}">
  {{-- <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{URL::asset('asset/css/jquery-ui-1.10.4.min.css')}}">
  <!-- =======================================================
    Theme Name: 
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo"><span class="lite"></span></a>
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
                            <i class="icon-task-l"></i>
                            <span class="badge bg-important">6</span>
                        </a>
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
                            <span class="username">SOUKA Adjovi</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mon Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> Email</a>
              </li>
              <li>
                <a href="login.html"><i class="icon_key_alt"></i>Déconnexion</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
          <a class="" href="{{URL('/')}}">
                          <i class="icon_house_alt"></i>
                          <span>Accueil</span>
                      </a>
          </li>
          
          
          <li>
            <a class="" href="{{URL('widgets')}}">
                          <i class="icon_genius"></i>
                          <span>Formulaire</span>
                      </a>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>liste</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>

        
        <!-- sidebar menu end-->
      </div>
    </aside>