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
</head>
<!-- END HEAD -->


<!-- New -->
 <link href="<?php echo base_url(); ?>assets/calendar/dist/fullcalendar.css" rel="stylesheet" type="text/css" /> 
 <style>
    .tabbable-line > .tab-content{
        padding : 0px 0px !important;
    }
    .page-container-bg-solid .page-bar, .page-content-white .page-bar {
   
    margin: 50px -20px 0px !important;
}
.error{
      color: red;
     }
 </style>
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <?php $this->load->view('Backend/admin/admin-temp/header'); ?> 
        <div class="page-container">
            <!-- start sidebar menu -->
          <?php $this->load->view('Backend/admin/admin-temp/sidebar'); ?> 
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All
                                Events</div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            
                        
                            <div class="tabbable-line">

                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                   
                                                    <div class="card-body ">
                                                    <div class="row">
                                                    <div class="col-md-2"></div>
                                                        <div class="col-md-8 col-sm-12">


                                                          <div class="d-flex justify-content-end">
                                                           <?php  if($admin_data->user_status == '0') { ?>
                                                            <a type="button" data-bs-toggle="modal" data-bs-target="#smallModel" 
                                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10  btn-circle btn-primary text-right"  style="text-transform: capitalize;">Add Event</a>
                                                                    <?php  } ?>
                                                                </div>


                                                            <div class="card">
                                                                <div class="card-head">
                                                                    <header>Events</header>
                                                                </div>
                                                               
                                                                    <div class="card-body b-l calender-sidebar">
                                                                <div id="calendar"></div>
                                                                
                                                            </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2"></div>
                                                         <!-- col -->
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



                    <!-- end admited patient list -->
                </div>
            </div>
            <!-- end page content -->

        </div>
        <!-- end page container -->
        <!-- start footer -->
 
        <!-- end footer -->

        <div class="modal fade" id="smallModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form  id="form_sample_add" class="form-horizontal" method="post " enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add Event
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
               
           
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-primary" id="save_nav">Save</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
             <form  id="form_sample_1" class="form-horizontal" method="post " enctype="multipart/form-data">
             <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Update Event
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-primary" id="save_nav">Save</button>
                </div>
            </div>
                <div class="modal-footer">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary"  id="update">update</button>
                </div>
                  </form>
            </div>
        </div>
   <?php $this->load->view('Backend/admin/admin-temp/footer'); ?> 
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/material/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend_assets/bundles/flatpicker/js/flatpicker.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/backend_assets/data/date-time.init.js"></script> -->
 <!-- new -->
 <script src="<?php echo base_url(); ?>assets/moment/moment.js"></script>
    <script type="text/javascript"
      src="<?php echo base_url(); ?>assets/calendar/dist/fullcalendar.min.js"></script>
</body>



</html>
   <!-- // defaultDate: moment('<?php echo $tyear.'-'.$tmonth; ?>'), -->
<script>

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



// smallModel

$(document).on('click','#save_nav',function(){
        event.preventDefault();
        $("#form_sample_add").valid();


       
         var slot = $("input[name='title']").val();
         var start_date = $("input[name='start_date']").val();
       
     

    // Check if all required fields are filled out
    if (slot !== '' && start_date ) {
          


        $.ajax({
        type:'post',
        url: '<?php echo base_url("Admin/add_events");?>',
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

  

          $('#example4').on('click', '.tblEditBtn', function() {
       // $('.tblEditBtn').click(function() {
            // Get the data attributes from the button
            var id = $(this).data('id');
            

            // Make an AJAX request to retrieve the data for the ID
            $.ajax({
                url: '<?php echo base_url("Admin/getAnnouncementByID"); ?>?id=' + id,
                method: 'GET',
                data: { id: id },
                dataType: 'json',
                success: function(response) {
                    // Populate the modal with the data returned from the server
                    $('#staticBackdrop [name="id"]').val(response.id);
                    $('#staticBackdrop [name="title"]').val(response.title);
                  
           
               
                     // Open the modal
                    $('#staticBackdrop').modal('show');
                },
                error: function(xhr, status, error) {
                    console.log(error); // Handle the error if any
                }
            });
        });
    

         $(document).on('click','#update',function(){
        event.preventDefault();
           $("#form_sample_1").valid();
         
         $.ajax({
        type:'post',
        url: '<?php echo base_url("Admin/update_announcement");?>',
        data: new FormData($("#form_sample_1")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#form_sample_1')[0].reset();
          $('#staticBackdrop').modal('hide');
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
       
        $('#staticBackdrop').modal('hide');
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

         //delete
    $(document).on('click','.delete', function (e) {
    //var id = $(this).parents('tr').find('#id').val();
    var id = $(this).attr('data-id');
   $.confirm({
    title: 'Delete Warning!',
    content: 'Are you sure, you want to delete this?',
    boxWidth: '25%',
    useBootstrap: false,
    buttons: {
    delete: {
    text: 'Delete',
    btnClass: 'btn-primary',
    action: function(){
    $.ajax({
    type: 'post',
    url: '<?php echo base_url('Admin/delete_events') ?>',
    data: {id:id},
    success: function (response) {
     var data=$.parseJSON(response);
     if(data.status == 'success'){

    $.wnoty({
    type: 'success',
    message: data.message,
    autohideDelay: 1000,
    position: 'top-right'

    });
    setTimeout(function(){
         location.reload(true);
        },2000);
     }
    } 
   });
    }
    },
    close: function () {
    }
    }
    });

    });    


</script>

</html>