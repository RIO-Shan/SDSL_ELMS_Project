<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/21/2019
 * Time: 12:23 PM
 */
class emp_changepassword_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('emp_changepassword_model');
    }

    //ChangePassword Page View If Logged or Not
    public function empChangePasswordView()
    {
        if (isset($_SESSION['user_logged']) and $_SESSION['user_logged'] == true) {
            $this->load->view('emp_changepassword');

        } else {
            $this->session->set_flashdata("error", "Please Log into the system to view this page!!!");
            redirect("Page_controller/index", "refresh");
        }

    }

    //Password Change Method
    public function empChangePassword()
    {
        //Set Parameters
        $empno = $_SESSION['empno'];
        $currpassword = $this->input->post('password');
        $md5currpwd = md5($currpassword);

        //Call For Check Current Password Method
        $pwdmatch = $this->emp_changepassword_model->checkPassword($empno, $md5currpwd);

        if ($pwdmatch == true) {

            $newpassword = $this->input->post('newpassword');
            $md5nwpwd = md5($newpassword);

            //Update New Password Method in Model
            $result = $this->emp_changepassword_model->updatePassword($empno, $md5nwpwd);

            if ($result == true) {
                $this->session->set_flashdata("success", "Your Password Successfully Changed");
                redirect("emp_changepassword_con/empChangePasswordView");
            } else {
                $this->session->set_flashdata("error", "Sorry!!! Error occured during upadaing your password");
                redirect("emp_changepassword_con/empChangePasswordView");
            }

            //If Current Password Not Match
        } else {
            $this->session->set_flashdata("error", "Your current password is wrong");
            redirect("emp_changepassword_con/empChangePasswordView");
        }

    }
}