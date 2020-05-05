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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo TAB_LOGO; ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/bootstrap.min.css">
    <!-- Font awesome CDN
        ============================================ -->
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/normalize.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS_PATH; ?>/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
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
                        <a href="http://www.honeycombsoftwares.com/"><img src="<?php echo COMPANY_LOGO; ?>" alt="Henoycomb Company Logo" /></a>
                        <a href="http://www.honeycombsoftwares.com/"><img src="<?php echo COMPANY_NAME; ?>" alt="Henoycomb Company Name" /></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                    class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name"><?php echo $uname; ?></span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="<?php echo  A_AC_DETAILS_URL;?>"><span
                                                class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My
                                            Profile</a>
                                    </li>
                                    <li><a href="<?php echo  A_LOGOUT_URL;?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log
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
                        <li><a href="<?php echo A_DASHBOARD_URL; ?>"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li><a href="<?php echo A_CALENDAR_URL; ?>"><i class="fa fa-calendar"></i>Calendar</a>
                        </li>
                        <li><a href="<?php echo A_SCANDIDATE_URL; ?>"><i class="fas fa-user-check"></i>Candidate</a>
                        </li>
                        <li><a href="<?php echo A_RECRUITER_URL; ?>"><i class="fas fa-user-plus"></i>Add Recruiter</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                      <!-- Starting of Home tab -->
                      <div id="home" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo A_DASHBOARD_URL; ?>" class="in active">Dashboard</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Home tab -->
                      <!-- ============================================================== -->
                      <!-- Starting of Calendar tab -->
                      <div id="calendar" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo A_CALENDAR_URL ?>" class="">Calendar</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Calendar tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Candidate tab -->
                      <div id="selected_candidate" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo A_SCANDIDATE_URL; ?>">Selected Candidates</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Candidate tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Add Recruiter tab -->
                      <div id="add_recruiter" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo A_RECRUITER_URL; ?>">Recruiter</a>
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
                                 <li><a data-toggle="collapse" data-target="#home" href="#"><i
                                             class="fa fa-home"></i>Home
                                         <span class="admin-project-icon adminpro-icon adminpro-down-arrow">
                                         </span></a>
                                     <ul id="home" class="collapse dropdown-header-top">
                                         <li><a href="<?php echo A_DASHBOARD_URL; ?>">Dashboard</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a data-toggle="collapse" data-target="#calendar" href="#"><i
                                             class="fa fa-calendar"></i>Calendar
                                         <span
                                             class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                     <ul id="calendar" class="collapse dropdown-header-top">
                                         <li><a href="<?php echo A_CALENDAR_URL; ?>">Calendar</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a data-toggle="collapse" data-target="#selected_candidate" href="#"><i
                                             class="fas fa-user-check"></i>Candidate
                                         <span
                                             class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                     <ul id="selected_candidate" class="collapse dropdown-header-top">
                                         <li><a href="<?php echo A_SCANDIDATE_URL; ?>">Candidate</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li><a data-toggle="collapse" data-target="#add_recruiter" href="#"><i
                                             class="fas fa-user-plus"></i>Add Recruiter
                                         <span
                                             class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                     <ul id="add_recruiter" class="collapse dropdown-header-top">
                                         <li><a href="<?php echo A_RECRUITER_URL; ?>">recruiter</a>
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
                <form id="adminpro-order-form" class="adminpro-form" method="post" action="admin_profile_upload">
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
                                        <input type="text" name="fullname" value="<?php if(isset($admin_details)){echo $admin_details[0]['pi_name'];}?>" required  />
                                        <i class="fa fa-user login-user" aria-hidden="true" ></i>
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
                                        <input type="email" name="email" required value="<?php if(isset($admin_details)){echo $admin_details[0]['pi_email'];}?>" />
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
                                        <input type="text" name="phone" required value="<?php if(isset($admin_details)){echo $admin_details[0]['pi_phone'];}?>" />
                                        <i class="fa fa-phone login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Gender</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="interested-input-area">
                                        <select name="gender">
                                            <option value="admin"  value="<?php if(isset($admin_details)){echo $admin_details[0]['pi_gender'];}?>">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

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
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.scrollUp.min.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.form.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/main.js"></script>
</body>

</html>
