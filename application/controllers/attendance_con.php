<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/14/2019
 * Time: 11:29 PM
 */
class attendance_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('attendance_model');
    }

    public function attendanceView()
    {
        //Authenticate user before view page
        if (isset($_SESSION['user_logged']) and $_SESSION['user_logged'] == true) {
            $this->load->view('attendance');

            //If Not logged Session not set redirect to login page
        } else {
            $this->session->set_flashdata("error", "Please Log into the system to view this page!!!");
            redirect("Page_controller", "refresh");


        }


    }


}