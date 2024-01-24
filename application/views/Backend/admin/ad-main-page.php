<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Admin Panel</title>
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="<?php echo base_url(); ?>assets/backend_assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="<?php echo base_url(); ?>assets/backend_assets/bundles/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend_assets/bundles/material/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend_assets/css/material_style.css">
    <!-- Theme Styles -->
    <link href="<?php echo base_url(); ?>assets/backend_assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/backend_assets/css/theme-color.css" rel="stylesheet" type="text/css" />
 

     <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico" />

    <link href="<?php echo base_url(); ?>assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  
  <!-- new -->
   <link href="<?php echo base_url(); ?>assets/wnoty/wnoty.css" rel="stylesheet" type="text/css" />  
   <link href="<?php echo base_url(); ?>assets/wnoty/jquery-confirm.min.css" rel="stylesheet" type="text/css" />  
   <!-- New -->
 <link href="<?php echo base_url(); ?>assets/calendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" /> 
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <!-- start header -->
         <?php $this->load->view('Backend/admin/admin-temp/header'); ?> 
        <div class="page-container">
            <!-- start sidebar menu -->
            <?php $this->load->view('Backend/admin/admin-temp/sidebar'); ?> 
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper mt-10">
                <div class="page-content mt-10">
                        <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                           <!--  <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol> -->
                        </div>
                    </div>
                        <div class="state-overview">
                        <div class="row">
                              <!-- <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-orange">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                   <div class="info-box-content">
                                        <span class="info-box-text">Products</span>
                                        <span class="info-box-number"><?php //echo $this->db->where('isActive', 1)->count_all_results('manager'); ?></span>
                                 
                                    </div>
                                 
                                </div>
                            
                            </div> -->
                              
                        
                          
                        </div>
                    </div>
                    <div class="row  mt-10">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box  mt-10">
                                <div class="card-head center">
                                    <h2>Welcome  <?php echo $this->session->userdata('name'); ?>  </h2>

                                  
                                 
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <div class="doctor-profile">
                                
                                        
                                            <img src=" <?php echo base_url('assets/default.png'); ?>  "class="doctor-pic" alt="">
                                     

                                        <div class="profile-usertitle">
                                            <div class="doctor-name"> <?php echo $this->session->userdata('name'); ?> </div>
                                                <?php  if($admin_data->user_status && $admin_data->user_status == '1') {

                                                $query = $this->db->get_where('leader_board',array('isActive'=> '1','id'=>$admin_data->team));
                                                $result = $query->row();
                                                ?>
                                                <h4 style="font-weight:bold">  <?php echo  $result->team; ?>  </h4>
                                                <?php  } ?>
                                        </div>
                                        <p> <?php echo $this->session->userdata('email'); ?></p>
                                        <div>
                                            <p><i class="fa fa-phone"></i><a href="<?php echo "+91 ".$admin_data->number; ?> "><?php echo "+91 ".$admin_data->number; ?> </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Leder board -->
                        <div class="col-12 col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-head">
									<header>Leader Board Points</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div id='basicPieChart'>
									</div>
								</div>
							</div>
						</div>
                        <div class="col-md-6 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Announcements</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body no-padding height-9">
									<div class="row">
										<ul class="docListWindow">
                                      <?php  $i = 1;
                                           foreach ($announcement as $member) {?>
											<li>
												<div class="prog-avatar">
													<!-- <img src="img/doc/doc1.jpg" alt="" width="40" height="40"> -->
												</div>
												<div class="details">
													<div class="title">
														<a href="#"><?= $member->title ?></a> 
													</div>
													<div>
													
													</div>
												</div>
											</li>
                                            <?php $i++; } ?>
											
										</ul>
										<!-- <div class="text-center full-width">
											<a href="#">View all</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
                          <!-- Leder board -->
                            <!-- Events -->
                        <div class="col-md-12 col-sm-12">

<!-- 
                            <div class="d-flex justify-content-end">
                            <?php  if($admin_data->user_status == '0') { ?>
                            <a type="button" data-bs-toggle="modal" data-bs-target="#smallModel" 
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10  btn-circle btn-primary text-right"  style="text-transform: capitalize;">Add Event</a>
                                    <?php  } ?>
                                </div> -->


                            <div class="card">
                                <div class="card-head">
                                    <header>Events</header>
                                </div>
                                
                                    <div class="card-body b-l calender-sidebar">
                                <div id="calendar"></div>
                                
                            </div>
                            </div>
                            </div>
                    </div>
                    <!-- Events -->
                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
       <!-- start footer -->
          <?php $this->load->view('Backend/admin/admin-temp/footer'); ?> 

          <!-- <script src="<?php echo base_url(); ?>assets/plotyjs/plotly.min.js"></script> -->
          <!-- <script src="<?php echo base_url(); ?>assets/plotyjs/plotlyjs-data.js"></script> -->
     <!-- new -->
 <script src="<?php echo base_url(); ?>assets/moment/moment.js"></script>
    <script type="text/javascript"
      src="<?php echo base_url(); ?>assets/calendar/dist/fullcalendar.min.js"></script>
</body>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
//   function basicPieChart() {
//     var data = [
//       {
//         values: [19, 26, 55,40],
//         labels: ["Residential", "Non-Residential", "Utility", "Data"],
//         type: "pie",
//       },
//     ];

//  // Configuration options to remove mode bar and hover effect
//  var config = {
//     displayModeBar: false,
//     };
//     Plotly.newPlot("basicPieChart", data, {}, config);
//   }

//   // Call the function after Plotly is loaded
//   basicPieChart();

//   // Data
//   $.ajax({
//     url: '<?php echo base_url("Admin/getPointsBychart"); ?>',
//     method: 'GET',
//     // data: { id: id },
//     dataType: 'json',
//     success: function(response) {
//       // Assuming response.data contains the values and response.labels contains the labels
//     //   var values = response.data;
//     //   var labels = response.labels;
//     console.log(response);

//       //basicPieChart(values, labels);



//       // Open the modal
//       $('#staticBackdrop').modal('show');
//     },
//     error: function(xhr, status, error) {
//       console.log(error); // Handle the error if any
//     }
//   });


function updatePieChart(data) {
    var values = data.map(item => parseInt(item.points));
    var labels = data.map(item => item.team);
   // Define custom colors for each slice
//    var colors = ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 206, 86)', 'rgb(75, 192, 192)'];
var colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'];
    var pieData = [
      {
        values: values,
        labels: labels,
        type: "pie",
        marker: {
          colors: colors,
        },
      },
    ];

    // Configuration options to remove mode bar and hover effect
    var config = {
      displayModeBar: false,
    };

    Plotly.newPlot("basicPieChart", pieData, {}, config);
  }

  // Make an AJAX request to retrieve the data for the ID
  $.ajax({
    url: '<?php echo base_url("Admin/getPointsBychart"); ?>',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      // Call the function with the retrieved data
      updatePieChart(response);
    },
    error: function(xhr, status, error) {
      console.log(error); // Handle the error if any
    }
  });
// --------------------------Chart-----------------------------------------------------
// --------------------------calender-----------------------------------------------------

//calender
$(document).ready(function() {

var date = new Date();
var d = date.getDate();
var m = date.getMonth();
var y = date.getFullYear();
//var today = new Date('2022-11-2');

var calendar = $('#calendar').fullCalendar({

 editable: true,
 header: {
  left: 'prev,next today',
  center: 'title',
  right: 'month' //,agendaWeek,agendaDay
 },
 width: 580,
 height: 800, // Set a fixed height for the calendar
 contentHeight: 600, // Set the height of the content area
 events: '<?php echo base_url(); ?>Admin/load',

allDayDefault: false,

 eventRender: function(event, element, view) {
 /*new*/
  element.find('.fc-event-time').hide();
      element.find('.fc-time').hide();
  element.attr('data-id', event.dataid);

 if (event.allDay === 'true') {
   event.allDay = true;
  } else {
   event.allDay = false;
  }
 },
 selectable: true,
 selectHelper: true,
 eventOrder: true,

 select: function(start, end, allDay) {
 
  $('[name="startdate"]').val(start.format("YYYY-MM-DD"));
  $('[name="month"]').val(start.format("MM-YYYY"));
  $('#TimesheetDataModal').modal('show');  // modal show

  var date = start.format("YYYY-MM-DD");
  

 if (title) {
 var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
 var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
 $.ajax({
     url: 'add_events.php',
     data: 'title='+ title+'&start='+ start +'&end='+ end,
     type: "POST",
     success: function(json) {
     alert('Added Successfully');
     }
 });
 calendar.fullCalendar('renderEvent',
 {
     title: title,
     start: start,
     end: end,
     allDay: allDay
 },
 true
 );
 }
 calendar.fullCalendar('unselect');
 },


 editable: true,
 eventDrop: function(event, delta) {
 var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
 var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
 $.ajax({
     url: 'update_events.php',
     data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
     type: "POST",
     success: function(json) {
      alert("Updated Successfully");
     }
 });
 },
 eventClick: function(event) {
/*    var decision = confirm("Do you really want to do that?"); 
  if (decision) {
  $.ajax({
      type: "POST",
      url: "delete_event.php",
      data: "&id=" + event.id,
       success: function(json) {
           $('#calendar').fullCalendar('removeEvents', event.id);
            alert("Updated Successfully");}
  });
  }*/
   var date = event.start.format("YYYY-MM-DD");
  
   $('#TimesheetDataModal').modal('show'); //modal show
  },
 eventResize: function(event) {
     var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({
      url: 'update_events.php',
      data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
      type: "POST",
      success: function(json) {
       alert("Updated Successfully");
      }
     });
  },
  /**/

 
});
});

//calender end
</script>


</html>