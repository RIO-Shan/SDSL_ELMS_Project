<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/22/2019
 * Time: 3:41 PM
 */
class forgot_password_con extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('forgot_password_model');
        $this->load->model('emp_changepassword_model');
    }

    public function pwdRecoveryCheck()
    {
        $empid = $this->input->post('empid');
        $username = $this->input->post('username');

        $result = $this->forgot_password_model->getPwdRecoveryCheck($empid, $username);

        if ($result != false) {
            $pwdCheckInfo['pwdChk'] = 'Match';
            $pwdCheckInfo['chgEmpId'] = $result;
            $this->load->view('forgot_password', $pwdCheckInfo);
        } else {
            $this->session->set_flashdata("error", "Your Details are Invalid");
            redirect("Page_controller/forgotPasswordView", "refresh");
        }

    }

    public function updatePassword()
    {
        $updPwd = $this->input->post('confirmpassword');
        $md5nwpwd = md5($updPwd);
        $empno = $_GET['id'];

        $result = $this->emp_changepassword_model->updatePassword($empno, $md5nwpwd);

        if ($result == true) {
            $this->session->set_flashdata("success", "Your Password Updated Successfully");
            redirect("Page_controller/forgotPasswordView", "refresh");
        } else {
            $this->session->set_flashdata("error", "Sorry!!! Error occured during upadaing your password");
            redirect("Page_controller/forgotPasswordView", "refresh");
        }


    }
}