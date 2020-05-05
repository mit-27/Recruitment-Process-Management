<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Status</title>
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
                        <li><a href="<?php echo R_CALENDAR_URL; ?>"><i class="fa fa-calendar"></i>Calendar</a>
                        </li>
                        <li><a href="<?php echo R_CANDIDATE_URL; ?>"><i class="fas fa-user-plus"></i>Add Candidate</a>
                        </li>
                        <li class="active"><a href="<?php echo R_STATUS_URL; ?>"><i class="fa fa-balance-scale"></i>Status</a>
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
                      <div id="cal" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_CALENDAR_URL; ?>" class="">Calendar</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Calendar tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Add Candidate tab -->
                      <div id="add_candidate" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_CANDIDATE_URL; ?>">Add Candidates</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Add Candidate tab -->
                      <!-- ================================================================= -->
                      <!-- Starting of Status tab -->
                      <div id="status" class="tab-pane in active tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_STATUS_URL; ?>">Status</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Status tab -->
                      <!-- ================================================================ -->
                      <!-- Starting of Schedule Tab -->
                      <div id="schedule" class="tab-pane tab-custon-menu-bg animated flipInX">
                          <ul class="main-menu-dropdown">
                              <li><a href="<?php echo R_SCHEDULE_URL; ?>">Schedule</a>
                              </li>
                          </ul>
                      </div>
                      <!-- Ending of Schedule Tab -->
                      <!-- =============================================================== -->
                      <!-- Starting of Candidate tab -->
                      <div id="selected_candidate" class="tab-pane tab-custon-menu-bg animated flipInX">
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
                             <h2>Status</h2>
                         </div>
                         <ul class="breadcome-menu">
                             <li><a href="<?php echo R_DASHBOARD_URL; ?>">Home</a> <span class="bread-slash">/</span>
                             </li>
                             <li><span class="bread-blod">Status</span>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
    </div>

    <!-- Breadcome End-->
    <!-- ==================================================================================================================================== -->
    <!-- Data table area Start-->
    <div class="admin-dashone-data-table-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Candidate Status</h1>
                                <div class="sparkline8-outline-icon">
                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline8-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="id">No</th>
                                            <th data-field="cname">Candidate name</th>
                                            <th data-field="jtitle" >JobTitle</th>
                                            <th data-field="email" >Email</th>
                                            <th data-field="phone" >Phone</th>
                                            <th data-field="status" >Status</th>
                                            <th data-field="scheduled">Interview Scheduled</th>
                                            <th data-field="Schedule"></th>
                                            <th data-field="Change"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($can_details))
                                        {
                                            $i = 1;

                                          foreach ($can_details->result_array() as $row)
                                          {
                                            echo "<tr data-toggle='modal' data-target='#myModal' data-id=".$row['cd_id'].">";
                                            echo "<td>";
                                            echo $i;
                                            $i = $i +1;
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['cd_name'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['cd_job_title'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['cd_email'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['cd_phone'];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $row['cd_status'];
                                            echo "</td>";
                                            if($row['cd_interview_status'] == 1)
                                            {
                                              echo '<td class="datatable-ct"><i class="fa fa-check"></i>
                                              </td>';
                                              echo "<td><button type='button' onclick='send_id(this.id);'  name='schedule'  id=".$row['cd_id']." disabled class='btn btn-primary schedule_interview'><i class='fa fa-calendar-times-o' aria-hidden='true'></i> Schedule Interview</button></td>";
                                            }
                                            else {
                                              echo '<td class="datatable-ct"><i class="fa fa-times"></i>
                                              </td>';
                                              if($row['cd_status'] == "Interested")
                                              {
                                                echo "<td><button type='button' onclick='send_id(this.id);' name='schedule'  id=".$row['cd_id']." class='btn btn-primary schedule_interview'><i class='fa fa-calendar-times-o' aria-hidden='true'></i> Schedule Interview</button></td>";
                                              }
                                              else
                                              {
                                                echo "<td><button type='button' onclick='send_id(this.id);'  name='schedule'  id=".$row['cd_id']." disabled class='btn btn-primary schedule_interview'><i class='fa fa-calendar-times-o' aria-hidden='true'></i> Schedule Interview</button></td>";
                                              }
                                            }
                                            echo "<td><button type='button'  name='edit'  id=".$row['cd_id']." class='btn btn-info edit_data'><i class='fa fa-pencil' aria-hidden='true'></i> Edit</button></td>";
                                            print "</tr>";
                                          }
                                        } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



        <!-- Modal -->
        <div class="modal fade" id="add_data_Modal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
                <form action="update_candidate" method="post">
                  <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-3">
                              <label class="login2 pull-right pull-right-pro">Candidate Name</label>
                          </div>
                          <div class="col-lg-9">
                              <input type="text" name="cname" class="form-control" id="cname" required />
                          </div>
                      </div>
                  </div>
                  <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-3">
                              <label class="login2 pull-right pull-right-pro">Email</label>
                          </div>
                          <div class="col-lg-9">
                              <input type="email" name="cemail" class="form-control" id="cemail" required/>
                          </div>
                      </div>
                  </div>
                  <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-3">
                              <label class="login2 pull-right pull-right-pro">Phone No</label>
                          </div>
                          <div class="col-lg-9">
                              <input type="phone" name="cphone" class="form-control" id="cphone" required/>
                          </div>
                      </div>
                  </div>
                  <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-3">
                              <label class="login2 pull-right pull-right-pro">Job Title</label>
                          </div>
                          <div class="col-lg-9">
                              <div class="form-select-list">
                                  <select class="form-control custom-select-value" name="cjobtitle" id="cjobtitle">
                                      <option value="jt1">Job Title 1</option>
                                      <option value="jt2">Job Title 2</option>
                                      <option value="jt3">Job Title 3</option>
                                      <option value="jt4">Job Title 4</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <input type="number" name="cid" hidden id="cid">
                  <div class="form-group-inner">
                      <div class="row">
                          <div class="col-lg-3">
                              <label class="login2 pull-right pull-right-pro">Candidate's Status</label>
                          </div>
                          <div class="col-lg-9">
                              <div class="form-select-list">
                                  <select class="form-control custom-select-value" name="cstatus" id="cstatus">
                                      <option value="NPC">Not Picking Up Call</option>
                                      <option value="Interested">Intreseted For Interview</option>
                                      <option value="Not Interested">Not Intrested For Interview</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                  <button type="submit" class="btn btn-info" >Update</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
              </div>



            </div>

          </div>
        </div>



    <!-- Data table area End-->
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
    <script src="<?php echo REC_ASSETS_PATH; ?>/js/vendor/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
    $(document).on('click', '.edit_data', function(){
           var can_id = $(this).attr("id");
           $.ajax({
                url: "<?php echo R_DASHBOARD_URL; ?>"+ "/find_can_details",
                method:"POST",
                data:{can_id:can_id},
                dataType:"json",
                success:function(data){
                     $('#cname').val(data.cd_name);
                     $('#cid').val(can_id);
                     $('#cemail').val(data.cd_email);
                     $('#cphone').val(data.cd_phone);
                     $('#cjobtitle').val(data.cd_job_title);
                    $('#cstatus').val(data.cd_status);
                     $('#insert').val("Update");
                     $('#add_data_Modal').modal('show');
                }
           });
      });

      function send_id(id)
      {
          window.location.assign("<?php echo R_DASHBOARD_URL; ?>"+ "/schedule_btn_action/"+id);
      }
    
    //   $(document).on('click', '.schedule_interview', function(){
    //        var can_id = $(this).attr("id");
    //        $.ajax({
    //             url: "<?php echo R_DASHBOARD_URL; ?>"+ "/schedule_btn_action",
    //             method:"POST",
    //             data:{can_id:can_id}
    //        });
    //   });

    </script>
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
