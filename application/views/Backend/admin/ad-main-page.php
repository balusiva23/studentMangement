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
 
 
 <!-- Owl Carousel Assets -->
 <link href="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/owl-carousel/owl.theme.css" rel="stylesheet">

 <style>
    .page-container-bg-solid .page-bar, .page-content-white .page-bar {
   
    margin: 15px -20px 0px !important;
}
 </style>
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
                <div class="page-content">
                        <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                       
                        </div>
                    </div>
                       
                    <div class="row ">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box  ">
                                <div class="card-head center">
                                    <h2>Welcome  <?php echo $this->session->userdata('name'); ?>  </h2>

                                  
                                 
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <div class="doctor-profile">
                                
                                        
                                            <img src=" <?php echo base_url('assets/logo.jpg'); ?>" alt="" style="    max-width: 112px;">

                                            <!-- <img alt="image"  src="<?php if($admin_data->profile ) { echo base_url('assets/uploads/profile/').$admin_data->profile; }else{ echo base_url('assets/default.png'); } ?> "  class="doctor-pic" > -->
                                     

                                        <!-- <div class="profile-usertitle">
                                            <div class="doctor-name"> <?php echo $this->session->userdata('name'); ?> </div>
                                                <?php  if($admin_data->user_status && $admin_data->user_status == '1') {

                                                $query = $this->db->get_where('leader_board',array('isActive'=> '1','id'=>$admin_data->team));
                                                $result = $query->row();
                                                ?>
                                                <h4 style="font-weight:bold">  <?php echo  $result->team; ?>  </h4>
                                                <?php  } ?>
                                        </div> -->
                                        <!-- <p> <?php echo $this->session->userdata('email'); ?></p> -->
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  -->
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0"
                            class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class="">
                        </li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner owl-carousel" role="listbox" id="owl-demo2">
                        <!-- <div class="item active"> <img src="<?php echo base_url(); ?>assets/backend_assets/img/slider/slider1.jpg" alt="">
                        </div>
                        <div class="item"> <img src="<?php echo base_url(); ?>assets/backend_assets/img/slider/slider2.jpg" alt=""> </div>
                        <div class="item"> <img src="<?php echo base_url(); ?>assets/backend_assets/img/slider/slider3.jpg" alt=""> </div> -->
                    <?php 
                    function limitWords($text, $limit) {
                        $words = explode(' ', $text);
                        $limitedWords = array_slice($words, 0, $limit);
                        return implode(' ', $limitedWords);
                    }
                    
                    // Example usage:
                    
                   
                    
                    foreach ($card as $key => $value) {
                         $query = $this->db->get_where('leader_board',array('isActive'=> '1','id'=>$value->team));
                         $result = $query->row();

                         $limitedString = limitWords($value->desc, 20);
                        
                        ?>

                   <div class="item">
                    <div class="blogThumb" style="margin: 4px;">
                    <div class="thumb-center" style="    height: 290px;"><img class="img-responsive" alt="user" src="<?php echo base_url('assets/uploads/profile/').$value->file_url; ?>" style="width: 100%;"></div>
                    <div class="white-box " style="margin-top:0px;padding-top:0px;margin-top:0px; height: 200px;  position: relative;">
                    <!-- <div class="text-muted"><span class="m-r-10">June 16</span>
                        <a class="text-muted m-l-10" href="#"><i class="fa fa-heart-o"></i> 56</a>
                    </div> -->
                    <h3 class="m-t-10 m-b-10"><?= $value->title ?></h3>
                    <p style="over-flow:hidden"><?= $limitedString ?> </p>
                    <div class="d-flex justify-content-end">
                    <button class="btn  btn-rounded waves-effect waves-light m-t-10" style="background:<?= $result->color ?>;color:white;  position: absolute;
                  bottom: 10px; right: 10px;"><?= $result->team ?></button> </div>
                    </div>
                    </div>
                    </div>
                        
                        <?php } ?>
                  
           
          
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic"
                        role="button" data-slide="prev"> <span
                            class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a> <a class="right carousel-control" href="#carousel-example-generic"
                        role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"
                            aria-hidden="true"></span> <span class="sr-only">Next</span>
                    </a>
                </div>
                      
                        <!-- Event card -->
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

      	<!-- owl carousel -->
	<script src="<?php echo base_url(); ?>assets/owl-carousel/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>assets/owl-carousel/owl-carousel-data.js"></script>
</body>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>


function updatePieChart(data) {
    var values = data.map(item => parseInt(item.points));
    var labels = data.map(item => item.team);
    var colors = data.map(item => item.color);
   // console.log(colors);
   // Define custom colors for each slice
//    var colors = ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 206, 86)', 'rgb(75, 192, 192)'];
   //var colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'];
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
 // console.log('click');
 <?php  if($admin_data->user_status == '1') { ?>
   $('#smallModel').modal('show');
   <?php } ?>

  var date = start.format("YYYY-MM-DD");
  
 let title
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

   var date = event.start.format("YYYY-MM-DD");
   var dataid = event.dataid; // Retrieve the dataid attribute

// console.log("Date: " + date);
// console.log("DataID: " + dataid);

  //$('#UpdateEvent').modal('show');

  <?php if ($admin_data->user_status == '0') { ?>
         //         var id = $(this).data('id');
             $('#exampleModalLabel').text('Update Event')
        $.ajax({
            url: '<?php echo base_url("Admin/geteventregByID"); ?>',
            method: 'GET',
            data: { date: date,id:dataid },
            dataType: 'json',
            success: function(response) {
                // Populate the modal with the data returned from the server
                $('#smallModel [name="id"]').val(response.id);
                $('#smallModel [name="title"]').val(response.title);
                $('#smallModel [name="desc"]').val(response.desc);
                $('#smallModel [name="userId"]').val(response.userId);
                $('#smallModel [name="team"]').val(response.team);
                $('#smallModel [name="startdate"]').val(response.startdate);

                console.log("Success");
                $('#smallModel').modal('show');
            },
            error: function(xhr, status, error) {
                console.log(error); // Handle the error if any
            }
        });
    <?php } ?>

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

<div class="modal fade" id="smallModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form  id="form_sample_add" class="form-horizontal" method="post " enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Register Event
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="form-group row">
                <label class="control-label col-md-2"> Name
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="name" data-required="1" placeholder="Enter Name"
                        class="form-control input-height" required value="<?php  echo $admin_data->name; ?>"/>
                </div>
                </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Email
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="email" data-required="1" placeholder="Enter Email"
                        class="form-control input-height" required  value="<?php  echo $admin_data->email; ?>"/>
                </div>
                </div>
                <div class="form-group row">
                <label class="control-label col-md-2"> Title
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="text" name="title" data-required="1" placeholder="Enter Title"
                        class="form-control input-height" required/>
                </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-2"> Register 
                        <span class="required"> * </span>
                    </label>
                    <div class="col-md-8">
                        <textarea type="text" name="desc" data-required="1" row="3" placeholder="Enter Register"
                            class="form-control input-height" required></textarea>
                    </div>
                </div>
                <!-- <div class="form-group row">
                <label class="control-label col-md-2"> Start Date
                    <span class="required"> * </span>
                </label>
                <div class="col-md-8">
                    <input type="date" name="start_date" data-required="1" placeholder="Enter Title"
                        class="form-control input-height" required />
                </div>
                </div>
                <div class="form-group row">
                <label class="control-label col-md-2">  End Date
                    <span class="required"> </span>
                </label>
                <div class="col-md-8">
                    <input type="date" name="end_date" data-required="1" placeholder="Enter Title"
                        class="form-control input-height" />
                </div>
                </div>
                </div> -->
               
           
                <div class="modal-footer">
                <input type="hidden" name="startdate">
                      <input type="hidden" name="month">
                      <input type="hidden" name="id">
                      <input type="hidden" name="userid" value="<?php  echo $admin_data->id; ?>">
                      <input type="hidden" name="team" value="<?php  echo $admin_data->team; ?>">
                    <button type="button" class="btn btn-secondary cancel" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-primary" id="save_event">Register Now</button>
                </div>
            </div>
            </form>
        </div>
    </div>
 
</html>
<!-- register -->

<script>
  //add events
  $(document).on('click','#save_event',function(){
        event.preventDefault();
        $("#form_sample_add").valid();


       
         var slot = $("input[name='title']").val();
         var start_date = $("input[name='startdate']").val();
       
     

    // Check if all required fields are filled out
    if (slot !== '' && start_date ) {
        
        $.ajax({
        type:'post',
        url: '<?php echo base_url("Admin/register_events");?>',
        data: new FormData($("#form_sample_add")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#form_sample_add')[0].reset();

          $('#smallModel').modal('hide');
         $(".modal-backdrop").remove();
        $.wnoty({
        type: 'success',
        message: data.message,
        autohideDelay: 1000,
        position: 'top-right'

        });
                 setTimeout(function(){
         location.reload(true);
        },2000);

        }else if(data.status == 'error'){

          $.wnoty({
                type: 'error',
                message: data.message,
                autohideDelay: 2000,
                position: 'top-right'

                });
        }
        },
        });
        } else {

        }

        return false;
        })
    //update_reg_event

    $(document).on('click','#update',function(){
        event.preventDefault();
           $("#form_sample_add").valid();
         
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Admin/update_reg_event");?>',
        data: new FormData($("#form_sample_add")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#form_sample_add')[0].reset();
          $('#smallModel').modal('hide');
         $(".modal-backdrop").remove();

        $.wnoty({
        type: 'success',
        message: data.message,
        autohideDelay: 1000,
        position: 'top-right'

        });
         setTimeout(function(){
         location.reload(true);
        },2000);
  


       }else if(data.status == 'error'){
       
        $('#smallModel').modal('hide');
         $(".modal-backdrop").remove();
              $.wnoty({
                    type: 'error',
                    message: data.message,
                    autohideDelay: 2000,
                    position: 'top-right'

                    });
               setTimeout(function(){
         location.reload(true);
        },2000);
        }
        },
        });
       
     
        return false;
        })
    //     <?php  if($admin_data->user_status == '1') { ?>
    //    $(document).on('click', '.register', function(e) {
    //       //  $(".register").on("click", function() {
    //         e.preventDefault(); // Prevent the default action
    //            // console.log("Event " +date);
            
            
    //         var id = $(this).data('id');
    //          $('#exampleModalLabel').text('Update Event')

    //         // Make an AJAX request to retrieve the data for the ID
    //         $.ajax({
    //             url: '<?php echo base_url("Admin/geteventregByID"); ?>?id=' + id,
    //             method: 'GET',
    //             data: { id: id },
    //             dataType: 'json',
    //             success: function(response) {
    //                 // Populate the modal with the data returned from the server
    //                 $('#smallModel [name="id"]').val(response.id);
    //                 $('#smallModel [name="title"]').val(response.title);
    //                 $('#smallModel [name="desc"]').val(response.desc);
    //                 $('#smallModel [name="userId"]').val(response.userId);
    //                 $('#smallModel [name="team"]').val(response.team);
    //                 $('#smallModel [name="startdate"]').val(response.startdate);
                  
    //                 console.log("Successs ");
    //                 $('#smallModel').modal('show');
    //                 // setTimeout(function() {
    //                 //     $('#staticBackdrop').modal('show');
    //                 // }, 500);
    //             },
    //             error: function(xhr, status, error) {
    //                 console.log(error); // Handle the error if any
    //             }
    //         });
    //     });

    //       <?php } ?>

        $(document).on('click', '.cancel', function() {
            $(".modal-backdrop").remove();
            location.reload(true);
        });
    
    
</script>