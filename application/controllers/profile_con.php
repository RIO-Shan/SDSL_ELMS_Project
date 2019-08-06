<?php
/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/19/2019
 * Time: 11:25 PM
 */

class profile_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('profile_model');
    }

    public function profileView()
    {
        //If user Logged and request page
        if (isset($_SESSION['user_logged']) and $_SESSION['user_logged'] == true) {

            $empNo = $_SESSION['empno'];

            //Get Employee data from model
            $result = $this->profile_model->getEmployeeData($empNo);

            //Push Employee data to FrontEnd
            $EmployeeData['EmpDtl'] = $result;
            $this->load->view('myprofile', $EmployeeData);

            //If user not logged to view page
        } else {
            $this->session->set_flashdata("error", "Please Log into the system to view this page!!!");
            redirect("Page_controller/index", "refresh");
        }
    }

    //Employee Info Updation method
    public function updateEmployee()
    {
        //Set Parameters to Emp Update
        $empid = $this->input->post('empcode');
        $fname = $this->input->post('firstName');
        $lname = $this->input->post('lastName');
        $mnumber = $this->input->post('mobileno');
        $gender = $this->input->post('gender');
        $dob = $this->input->post('dob');
        $address = $this->input->post('address');
        $city = $this->input->post('city');
        $country = $this->input->post('country');

        //Update Employee Details Method_Model
        $result = $this->profile_model->setEmpData($empid, $fname, $lname, $mnumber, $gender, $dob, $address, $city, $country);

        //If successfully Update
        if ($result != false) {
            $this->session->set_flashdata("success", "Your Informations Successfully Updated");
            redirect("profile_con/profileView", "refresh");
            //If Error Occured
        } else {
            $this->session->set_flashdata("error", "Sorry Error occured during updation!!");
            redirect("profile_con/profileView");
        }

    }
}