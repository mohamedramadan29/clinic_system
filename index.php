<!DOCTYPE html>
<html lang="en">

<head>
    <title> Title  </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\main.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.php">
                            <img class="img-fluid" src="files\assets\images\logo.pngf" alt="Theme-Logo" width="75%" </a>
                            <a class="mobile-options">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Mohemd</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>Mohedm</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">

                <div class="pcoded-wrapper">

                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active pcoded-trigger">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext"> Request Order </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="categories">
                                                <span class="pcoded-mtext">Categories</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="category_items" target="">
                                                <span class="pcoded-mtext"> Category Items </span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="request_order" target="">
                                                <span class="pcoded-mtext"> Request Section </span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="order_reports" target="">
                                                <span class="pcoded-mtext"> Reports </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="calc">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Calculator</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext"> Clients </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="all-clients">
                                                <span class="pcoded-mtext">All Clients </span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.htm">
                                                <span class="pcoded-mtext">Watch Clients </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext"> Employee Alerts </span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="alert">
                                                <span class="pcoded-mtext"> Alerts </span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="goals">
                                                <span class="pcoded-mtext"> Goals </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <div class="pcoded-navigatio-lavel"> Files </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                            <span class="pcoded-mtext"> All Files </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="navbar-light.htm">
                                            <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                            <span class="pcoded-mtext">Specific Category </span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="pcoded-navigatio-lavel"> Settings </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                            <span class="pcoded-mtext">Settings </span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                            <span class="pcoded-mtext"> Sign Out </span>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <!-- START SLIDER  -->
                                        <div class="card">
                                            <div class="card-block">
                                                <div class="hero_section">
                                                    <div class="overlay"></div>
                                                    <div class="data">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="info">
                                                                    <h2> Request Order </h2>
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit <br>
                                                                          consectetur adipisicing elit
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <img src="files/assets/images/slider/hero.svg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- END SLIDER  -->
                                            <div class="row">

                                                <!-- task, page, download counter  start -->
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-yellow update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">$30200</h4>
                                                                    <h6 class="text-white m-b-0">All Earnings</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-1" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-green update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">290+</h4>
                                                                    <h6 class="text-white m-b-0">Page Views</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-2" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-pink update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">145</h4>
                                                                    <h6 class="text-white m-b-0">Task Completed</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-3" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-c-lite-green update-card">
                                                        <div class="card-block">
                                                            <div class="row align-items-end">
                                                                <div class="col-8">
                                                                    <h4 class="text-white">500</h4>
                                                                    <h6 class="text-white m-b-0">Downloads</h6>
                                                                </div>
                                                                <div class="col-4 text-right">
                                                                    <canvas id="update-chart-4" height="50"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer">
                                                            <p class="text-white m-b-0"><i class="feather icon-clock text-white f-14 m-r-10"></i>update : 2:15 am</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-md-12">
                                                    <div class="card table-card">
                                                        <div class="card-header">
                                                            <h5>Application Sales</h5>
                                                            <div class="card-header-right">
                                                                <ul class="list-unstyled card-option">
                                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-block">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover  table-borderless">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>
                                                                                <div class="chk-option">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label class="check-task">
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon feather icon-check txt-default"></i>
                                                                                            </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                Application
                                                                            </th>
                                                                            <th>Sales</th>
                                                                            <th>Change</th>
                                                                            <th>Avg Price</th>
                                                                            <th>Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="chk-option">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label class="check-task">
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon feather icon-check txt-default"></i>
                                                                                            </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-inline-block align-middle">
                                                                                    <h6>Able Pro</h6>
                                                                                    <p class="text-muted m-b-0">Powerful Admin Theme</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>16,300</td>
                                                                            <td><canvas id="app-sale1" height="50" width="100"></canvas></td>
                                                                            <td>$53</td>
                                                                            <td class="text-c-blue">$15,652</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="chk-option">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label class="check-task">
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon feather icon-check txt-default"></i>
                                                                                            </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-inline-block align-middle">
                                                                                    <h6>Photoshop</h6>
                                                                                    <p class="text-muted m-b-0">Design Software</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>26,421</td>
                                                                            <td><canvas id="app-sale2" height="50" width="100"></canvas></td>
                                                                            <td>$35</td>
                                                                            <td class="text-c-blue">$18,785</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="chk-option">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label class="check-task">
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon feather icon-check txt-default"></i>
                                                                                            </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-inline-block align-middle">
                                                                                    <h6>Guruable</h6>
                                                                                    <p class="text-muted m-b-0">Best Admin Template</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>8,265</td>
                                                                            <td><canvas id="app-sale3" height="50" width="100"></canvas></td>
                                                                            <td>$98</td>
                                                                            <td class="text-c-blue">$9,652</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="chk-option">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label class="check-task">
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr">
                                                                                                <i class="cr-icon feather icon-check txt-default"></i>
                                                                                            </span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="d-inline-block align-middle">
                                                                                    <h6>Flatable</h6>
                                                                                    <p class="text-muted m-b-0">Admin App</p>
                                                                                </div>
                                                                            </td>
                                                                            <td>10,652</td>
                                                                            <td><canvas id="app-sale4" height="50" width="100"></canvas></td>
                                                                            <td>$20</td>
                                                                            <td class="text-c-blue">$7,856</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="text-center">
                                                                    <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- social download  start -->
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="card social-card bg-simple-c-blue">
                                                        <div class="card-block">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="m-b-0">Mail</h6>
                                                                    <p>231.2w downloads</p>
                                                                    <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="card social-card bg-simple-c-pink">
                                                        <div class="card-block">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="m-b-0">twitter</h6>
                                                                    <p>231.2w downloads</p>
                                                                    <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-12">
                                                    <div class="card social-card bg-simple-c-green">
                                                        <div class="card-block">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6 class="m-b-0">Instagram</h6>
                                                                    <p>231.2w downloads</p>
                                                                    <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                                                    </div>
                                                </div>
                                                <!-- social download  end -->

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer bg-inverse">
            <p class="text-center">Copyright &copy; 2023 , All rights reserved.</p>
        </div>
        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <script data-cfasync="false" src="cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>
        <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
        <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
        <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
        <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
        <!-- Chart js -->
        <script type="text/javascript" src="files\bower_components\chart.js\js\Chart.js"></script>
        <!-- amchart js -->
        <script src="files\assets\pages\widget\amchart\amcharts.js"></script>
        <script src="files\assets\pages\widget\amchart\serial.js"></script>
        <script src="files\assets\pages\widget\amchart\light.js"></script>
        <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="files\assets\js\SmoothScroll.js"></script>
        <script src="files\assets\js\pcoded.min.js"></script>
        <!-- custom js -->
        <script src="files\assets\js\vartical-layout.min.js"></script>
        <script type="text/javascript" src="files\assets\pages\dashboard\custom-dashboard.js"></script>
        <script type="text/javascript" src="files\assets\js\script.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
</body>

</html>