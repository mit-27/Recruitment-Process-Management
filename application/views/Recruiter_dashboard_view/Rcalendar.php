<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Calendar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo REC_ASSETS_PATH; ?>/img/logo/tablogo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/bootstrap.min.css">
    <!-- Font awesome CDN
        ============================================ -->
    <script src="https://kit.fontawesome.com/2f33c29c83.js"></script>
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/form/all-type-forms.css">
    <!-- switcher CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-switcher.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo REC_ASSETS_PATH; ?>/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Color Css Files
		============================================ -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-one.css" title="color-one" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-two.css" title="color-two" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-three.css" title="color-three" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-four.css" title="color-four" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-five.css" title="color-five" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-six.css" title="color-six" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-seven.css" title="color-seven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-eight.css" title="color-eight" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-nine.css" title="color-nine" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-ten.css" title="color-ten" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-eleven.css" title="color-eleven" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo REC_ASSETS_PATH; ?>/css/switcher/color-twelve.css" title="color-twelve" media="screen" />

    <script src="<?php echo REC_ASSETS_PATH; ?>/js/vendor/jquery-1.11.3.min.js"></script>


    <link rel="stylesheet" href="<?php echo CAL_ASSETS_PATH; ?>/fullcalendar.min.css" />
           <script src="<?php echo CAL_ASSETS_PATH; ?>/lib/moment.min.js"></script>

           <script src="<?php echo CAL_ASSETS_PATH; ?>/fullcalendar.min.js"></script>
           <script src="<?php echo CAL_ASSETS_PATH; ?>/gcal.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
var calendar = $("#calendar").fullCalendar({
  editable:true,
header:{
 left:'prev,next today',
 center:'title',
 right:'month,agendaWeek,agendaDay'
},
eventSources: [
                   {
                       url: '<?php echo R_DASHBOARD_URL; ?>/get_events',
                       type: 'POST',
                       color: '#65a9d7',
                       textColor: '#3c3d3d'

                   }
               ],
eventRender : function(event,element)
{
  element.popover({
    html : true,
    animation : true,
    container : 'body',
    trigger : 'hover',
    title : event.title,
    placement : 'top',
    content : event.Interviewer
  });
}
,
selectable:true,
selectHelper:true,
eventClick: function(event, jsEvent, view) {
      $('#cid').val(event.id);
      $('#itv').val(event.Interviewer);
      $('#ir').val(event.interview_round);
      $('#cname').val(event.title);
      $('#start_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      if(event.end) {
        $('#end_date').val(moment(event.end).format('YYYY/MM/DD HH:mm'));
      } else {
        $('#end_date').val(moment(event.start).format('YYYY/MM/DD HH:mm'));
      }
      $('#editModal').modal();
}
})
})

</script>





</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="compnay-logo">
                      <a href="http://www.honeycombsoftwares.com/" class="clogo"><img src="<?php echo COMPANY_LOGO; ?>" alt="Henoycomb Company Logo" class="img-fluid"/></a>
                      <a href="http://www.honeycombsoftwares.com/" class="cname"><img src="<?php echo COMPANY_NAME; ?>" alt="Henoycomb Company Name" class="img-fluid" /></a>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                            <!-- ======================================================================================================= -->
                            <!-- Starting of Account Holder's Details -->
                            <li class="nav-item">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                    <span class="admin-name"><?php echo $uname; ?></span>
                                    <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                </a>
                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                    <li><a href="<?php echo R_AC_DETAILS_URL; ?>"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>My Profile</a>
                                    </li>
                                    <li><a href="<?php echo R_LOGOUT_URL; ?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
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
                        <li><a href="<?php echo R_DASHBOARD_URL; ?>"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="active"><a href="<?php echo R_CALENDAR_URL; ?>"><i class="fa fa-calendar"></i>Calendar</a>
                        </li>
                        <li><a href="<?php echo R_CANDIDATE_URL; ?>"><i class="fas fa-user-plus"></i>Add Candidate</a>
                        </li>
                        <li><a href="<?php echo R_STATUS_URL; ?>"><i class="fa fa-balance-scale"></i>Status</a>
                        </li>
                        <li><a href="<?php echo R_SCHEDULE_URL; ?>"><i class="fas fa-user-clock"></i>Schedule</a>
                        </li>
                        <li><a href="<?php echo R_SCANDIDATE_URL; ?>"><i class="fas fa-user-check"></i>Candidate</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                      <!-- Starting of Home tab -->
                      <div id="Home" class="tab-pane tab-custon-menu-bg animated flipInX">
                           <ul class="main-menu-dropdown">
                               <li><a href="<?php echo R_DASHBOARD_URL; ?>" class="in active">Dashboard</a>
                               </li>
                           </ul>
                      </div>
                      <!-- Ending of Home tab -->
                      <!-- ============================================================== -->
                      <!-- Starting of Calendar tab -->
                      <div id="cal" class="tab-pane in active tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_CALENDAR_URL; ?>" class="">Calendar</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Calendar tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Add Candidate tab -->
                      <div id="Interface" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_CANDIDATE_URL; ?>">Add Candidates</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Add Candidate tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Status tab -->
                      <div id="Miscellaneous" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_STATUS_URL; ?>">Status</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Status tab -->
                      <!-- ================================================================ -->
                      <!-- Starting of Schedule Tab -->
                      <div id="Charts" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_SCHEDULE_URL; ?>">Schedule</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Schedule Tab -->
                      <!-- =============================================================== -->
                      <!-- Starting of Candidate tab -->
                      <div id="Tables" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_SCANDIDATE_URL; ?>">Candidate</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Candiadte tab -->
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
                              <li><a data-toggle="collapse" data-target="#home" href="#"><i class="fa fa-home"></i>Home
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow">
                                      </span></a>
                                  <ul id="home" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_DASHBOARD_URL; ?>">Dashboard</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#cal" href="#"><i class="fa fa-calendar"></i>Calendar
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="cal" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_CALENDAR_URL; ?>">Calendar</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#add_candidate" href="#"><i class="fas fa-user-plus"></i>Add Candidate
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="add_candidate" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_CANDIDATE_URL; ?>">Add Candidate</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#status" href="#"><i class="fa fa-balance-scale"></i>Status
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="status" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_STATUS_URL; ?>">Status</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#schedule" href="#"><i class="fas fa-user-clock"></i>Schedule
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="schedule" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_SCHEDULE_URL; ?>">Schedule</a>
                                      </li>
                                  </ul>
                              </li>
                              <li><a data-toggle="collapse" data-target="#selected_candidate" href="#"><i class="fas fa-user-check"></i>Selected Candidate
                                      <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                  <ul id="selected_candidate" class="collapse dropdown-header-top">
                                      <li><a href="<?php echo R_SCANDIDATE_URL; ?>">Candidate</a>
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
    <!-- ==================================================================================================================================== -->
    <!-- Breadcome start-->
    <div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>Calendar</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="Rdashboard.html">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Calendar</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcome End-->
    <!-- ==================================================================================================================================== -->

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h1>Calendar</h1>
      <div id="calendar" style="background: #fff; margin-bottom: 5% !important; padding: 2%; box-shadow: 0 2vw 4vw rgba(0,0,0,0.2), 0 1vw 2vw rgba(0,0,0,0.2), 0 0.5vw 1vw rgba(0,0,0,0.2); border-radius:0.5%;">

      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog"  role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Candidate Interview</h4>
      </div>
      <div class="modal-body">
      <form  action="calender_update" method="post">
     
               
                  <input type="hidden" class="form-control" name="can_id" id="cid" />
                
        
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Candidate Name</label>
                <div class="col-md-8 ui-front">
                <input type="text" class="form-control" name="can_name" value="" id="cname">
                </div>
        </div>
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Interview Status</label>
          <div class="col-md-8 ui-front">
            <div class="form-select-list">
                <select class="form-control custom-select-value" id="ir" name="interview_round">
                    <option value="0">Not Started</option>
                    <option value="0.25">Round 1 Completed</option>
                    <option value="0.5">Round 2 Completed</option>
                    <option value="0.75">Round 3 Completed</option>
                    <option value="1">Selected for Job</option>
                </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="p-in" class="col-md-4 label-heading">Interviewer</label>
          <div class="col-md-8 ui-front">
            <div class="form-select-list">
              <select class="form-control custom-select-value"
                  name="Interviewer" id="itv">
                  <option value="itv1">Interviewer 1</option>
                  <option value="itv2">Interviewer 2</option>
                  <option value="itv3">Interviewer 3</option>
                  <option value="itv4">Interviewer 4</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="start_date" id="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="end_date" id="end_date">
                </div>
        </div>
        <div class="form-group">
                    <label for="p-in" class="col-md-4 label-heading">Cancel Interview</label>
                    <div class="col-md-8">
                        <input type="checkbox" name="delete" value="1">
                    </div>
            </div>
      </div>

      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <input type="submit" class="btn btn-primary" value="Update Interview">
    </form>
      </div>
  </div>
</div>











    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2019 Henoycomb Software Pvt. Ltd. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
    <!-- =================================================================================================================================== -->
    <!-- jquery
		============================================ -->

    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/Chart.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/raphael.min.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/jquery.mapael.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/france_departments.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/world_countries.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/usa_states.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/tableExport.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/data-table-active.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/data-table/bootstrap-table-export.js"></script>
    <!-- switcher JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/switcher/styleswitch.js"></script>
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/switcher/switch-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/main.js"></script>
</body>
</html>
