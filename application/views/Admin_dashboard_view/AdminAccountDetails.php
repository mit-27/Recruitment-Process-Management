<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Profile</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/img/logo/tablogo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/bootstrap.min.css">
    <!-- Font awesome CDN
        ============================================ -->
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/Admin_Dashboard/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="compnay-logo">
                        <a href="http://www.honeycombsoftwares.com/"><img src="<?php echo base_url(); ?>Assets/Admin_Dashboard/img/CompanyLogo.png" alt="Henoycomb Company Logo" /></a>
                        <a href="http://www.honeycombsoftwares.com/"><img src="<?php echo base_url(); ?>Assets/Admin_Dashboard/img/CompanyName.png" alt="Henoycomb Company Name" /></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name">Janak Darji</span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="AdminAccountDetails.html"><span
                                                class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My
                                            Profile</a>
                                    </li>
                                    <li><a href="../src/login.html"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log
                                            Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end-->
    <!-- ===================================================================================================================================== -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs custom-menu-wrap">
                        <li><a data-toggle="tab" href="#Home"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#mailbox"><i class="fa fa-calendar"></i>Calendar</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="fas fa-user-check"></i>Candidate</a>
                        </li>
                        <li><a data-toggle="tab" href="#Miscellaneous"><i
                                    class="fa fa-history"></i>History</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="fas fa-user-clock"></i>Time Sheet</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="fas fa-user-plus"></i>Add Recruiter</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <!-- Starting of Home tab -->
                        <div id="Home" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="dashboard.html" class="in active">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Home tab -->
                        <!-- ============================================================== -->
                        <!-- Starting of Calendar tab -->
                        <div id="mailbox" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="calendar.html" class="">Calendar</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Calendar tab -->
                        <!-- ================================================================= -->
                        <!-- Starting of Candidate tab -->
                        <div id="Interface" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="sele_candidate.html">Selected Candidates</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Candidate tab -->
                        <!-- ================================================================= -->
                        <!-- Starting of History tab -->
                        <div id="Miscellaneous" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="history.html">History</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of History tab -->
                        <!-- ================================================================ -->
                        <!-- Starting of Time sheet Tab -->
                        <div id="Charts" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="time-sheet.html">Time-sheet</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Time sheet Tab -->
                        <!-- =============================================================== -->
                        <!-- Starting of Add Recruiter tab -->
                        <div id="Tables" class="tab-pane tab-custon-menu-bg animated flipInX">
                            <ul class="main-menu-dropdown">
                                <li><a href="recruiter.html">Recruiter</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Ending of Recruiter tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- ==================================================================================================================================== -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#"><i
                                            class="fa fa-home"></i>Home
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow">
                                        </span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="dashboard.html">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#"><i
                                            class="fa fa-calendar"></i>Calendar
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="calendar.html">Calendar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#others" href="#"><i
                                            class="fas fa-user-check"></i>Candidate
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="others" class="collapse dropdown-header-top">
                                        <li><a href="sele_candidate.html">Candidate</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#"><i
                                            class="fa fa-history"></i>History
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="History.html">History</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#"><i
                                            class="fas fa-user-clock"></i>Time Sheet
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top">
                                        <li><a href="time-sheet.html">Time-Sheet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Tablesmob" href="#"><i
                                            class="fas fa-user-plus"></i>Add Recruiter
                                        <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                    <ul id="Tablesmob" class="collapse dropdown-header-top">
                                        <li><a href="recruiter.html">recruiter</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- ============================================================================================================ -->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>My Profile</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><span class="bread-slash">Account</span> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">My Profile</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================================================================ -->
    <!-- Profile Details -->
    <!-- Profile Form Start-->
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <form id="adminpro-order-form" class="adminpro-form">
                    <div class="col-lg-6">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo img-fluid">
                                        <a href="http://www.honeycombsoftwares.com/"><img src="img/logo/CompanyName.png"
                                                alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <h1>My Profile</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Full Name</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="fullname" />
                                        <i class="fa fa-user login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Email Address</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="email" name="email" />
                                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Phone Number</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="phone" />
                                        <i class="fa fa-phone login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Category</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="interested-input-area">
                                        <select name="interestedcategory">
                                            <option value="admin" selected="" disabled="yes">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="login-button login-button-lg">Update
                                            Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!--Profile Form End-->
    <!-- ============================================================================================================ -->
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 Henoycomb softwers pvt. ltd. all rights reserved.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.scrollUp.min.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>Assets/Admin_Dashboard/js/main.js"></script>
</body>

</html>
