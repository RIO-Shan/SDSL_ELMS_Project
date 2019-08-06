<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/28/2019
 * Time: 9:58 PM
 */
class apply_leave_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('apply_leave_model');
    }

    public function applyLeaveView()
    {
        if (isset($_SESSION['user_logged']) and $_SESSION['user_logged'] == true) {

            $results = $this->apply_leave_model->getLeaveDetails();
            $LeaveTypes['Types'] = $results;

            $this->load->view('apply_leave', $LeaveTypes);

        } else {
            $this->session->set_flashdata("error", "Please Log in to the system to view this page!!!");
            redirect("Page_Controller/index", "refresh");
        }
    }

    public function insertLeave()
    {
        $leaveType = $this->input->post('leavetype');
        $fromDate = $this->input->post('fromdate');
        $toDate = $this->input->post('todate');
        $desc = $this->input->post('description');

        if ($fromDate < $toDate){
            echo "yes";
        }else{
            echo "no";
    }

        echo $fromDate;
        echo '<br>';
        echo date("d m, y ");
    }

}