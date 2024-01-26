<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller {

    function __construct() {
        parent::__construct();
      
           $this->load->model('notification_model');
        
    }



   public function get_admin_notifications_count() {
      $admin_id = $this->session->userdata('user_login_id');
    //$user_id = 1;
    $this->load->model('notification_model');
    $count = $this->notification_model->get_admin_notifications_count($admin_id);
    echo $count;
  }
     
     



  public function get_notifications() {
    $user_id = $this->session->userdata('user_login_id');
    //$user_id = 1;
   // $this->load->model('notification_model');
   // $notifications = $this->notification_model->get_notifications($user_id);
        $admin_id = $this->session->userdata('user_login_id');
        $role = $this->session->userdata('role');
     // Retrieve unread notifications based on the role
        $notifications = $this->notification_model->get_unread_admin_notifications();// $this->get_unread_notifications_by_role($admin_id, $role);
       //print_r($notifications);die();
      foreach ($notifications as $notification) {
        $notificationIcon = 'fa fa-check';
        $notificationColor = 'deepPink-bgcolor';
        //$notificationText = 'Congratulations!';
        
        if ($notification->status === 'unread') {
            // If the notification is unread, update the icon and color
         // ($notification->icon) ? $notificationIcon = $notification->icon :  $notificationIcon = 'fa fa-check';

        //  ($notification->color) ? $notificationColor = $notification->color :  $notificationColor = 'bg-success';
           // $notificationColor = 'bg-success';
            $notificationText = $notification->title;
            $formattedDate = date('d-M-Y', strtotime($notification->created_at));
        }


        echo '<li>';
        echo '    <a  class="unread" data-notification-id = "'.$notification->id.'" data-table = "announcement" >';
        echo '        <span class="time">'.$formattedDate.'</span>';
        echo '        <span class="details">';
        echo '            <span class="notification-icon circle purple-bgcolor"><i class="fa fa-comments-o"></i></span>';
        echo '            ' . $notificationText . '</span>';
        echo '    </a>';
        echo '</li>';
     
    }

  } 


    public function mark_notification_as_read() {
        $this->load->model('Notification_model');
        $notification_id = $this->input->post('notification_id');
        $table = $this->input->post('table');
        // Mark the notification as read
        $this->Notification_model->mark_notification_as_read($notification_id, $table);//$this->session->userdata('role')

        // Return success response
        $response['status'] = 'success';
        echo json_encode($response);
    }  
    public function All_mark_notification_as_read() {
        $this->load->model('Notification_model');
        $table = 'announcement';
         $userid = $this->session->userdata('user_login_id');
        // Mark the notification as read
        $this->Notification_model->All_mark_notification_as_read($table,$userid);//$this->session->userdata('role')

        // Return success response
        $response['status'] = 'success';
        echo json_encode($response);
    } 
   
  }

 ?>