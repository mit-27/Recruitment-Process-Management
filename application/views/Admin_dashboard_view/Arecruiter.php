<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Recruiter</title>
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
                            <!-- ======================================================================================================= -->
                            <!-- Starting of Account Holder's Details -->
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
                            <!-- End of Account Holder's Details -->
                            <!-- ======================================================================================================== -->
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
                    <li class="active"><a href="<?php echo A_RECRUITER_URL; ?>"><i class="fas fa-user-plus"></i>Add Recruiter</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                      <!-- Starting of Home tab -->
                      <div id="home" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo A_DASHBOARD_URL; ?>">Dashboard</a>
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
                      <div id="add_recruiter" class="tab-pane in active tab-custon-menu-bg animated flipInX">
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
<!-- ===================================================================================================================== -->
    <!-- Breadcome start-->
    <div class="breadcome-area mg-t-40 mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Add Recruiter</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="<?php echo A_DASHBOARD_URL; ?>">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Add Recruiter</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->
    <!-- ADD Recruiter Form Start -->
    <div class="basic-form-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset mg-t-30">
                        <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Add Recruiter</h1>
                                <div class="sparkline12-outline-icon">
                                    <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                            <?php
                        if($this->session->flashdata('usernamenot'))
                        {
                          echo '<div class="container w-40"><div class="alert alert-danger container" role="alert">'.$this->session->flashdata('usernamenot').'</div></div>';

                        }
                        if($this->session->flashdata('recsuccess'))
                        {
                          echo '<div class="container w-40"><div class="alert alert-success container" role="alert">'.$this->session->flashdata('recsuccess').'</div></div>';

                        }
                         ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="all-form-element-inner">
                                            <form method="post" action="add_rec" id="myform">
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Full Name</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="rec_name" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Username</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text"   class="form-control" name="rec_username" placeholder="UserName" required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Email</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="email" class="form-control" name="rec_email" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="login2 pull-right pull-right-pro">Password</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="password" class="form-control" name="rec_password" required/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                            <label class="login2 pull-right pull-right-pro"><span
                                                                    class="basic-ds-n">Recruiter's</span> Gender</label>
                                                        </div>
                                                        <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3">
                                                            <div class="bt-df-checkbox">
                                                                <input class="pull-left radio-checked" type="radio"
                                                                    checked="" value="Male" id="optionsRadios1"
                                                                    name="rec_gender"> Male <br>
                                                                <input class="pull-left" type="radio" value="Female"
                                                                    id="optionsRadios2" name="rec_gender"> Female
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                  <div class="row">
                                                      <div class="col-lg-4">
                                                          <div class="login-input-head">
                                                              <p>Phone Number</p>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-8">
                                                          <div class="login-input-area">
                                                              <input type="text" name="rec_phone"  required/>
                                                              <i class="fa fa-phone login-user" aria-hidden="true"></i>
                                                          </div>
                                                      </div>
                                                  </div>

                                                </div>
                                                <div class="form-group-inner">
                                                  <div class="row">
                                                      <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                          <div class="login-input-head">
                                                              <p>Job Title</p>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                          <div class="interested-input-area">
                                                              <select name="rec_jobtitle" required>
                                                                  <option value="admin" selected="" disabled="yes"> Recruiter's Job Title</option>
                                                                  <option value="jbTitle1">Job Title 1</option>
                                                                  <option value="jbTitle2">Job Title 2</option>
                                                                  <option value="jbTitle3">Job Title 3</option>
                                                                  <option value="jbTitle4">Job Title 4</option>
                                                              </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-white"
                                                                        type="reset">Cancel</button>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                                        type="submit">Save Change</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
    <!-- Add Recruiter Form End -->
    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 Henoycomb pvt. ltd. All rights reserved.</p>
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
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/tableExport.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/data-table-active.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo ADMIN_ASSETS_PATH; ?>/js/main.js"></script>


</body>

</html>
