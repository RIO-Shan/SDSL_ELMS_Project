<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_controller extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        $this->load->model('auth_model');

    }

    public function User_Login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        //Call for Method in model
        $result = $this->auth_model->getLoginData($username, $password);

        //if user exsists set session data
        if ($result == !false) {
            $_SESSION['user_logged'] = true;
            $_SESSION['empno'] = $result->EmpId;
            $_SESSION['fname'] = $result->Firstname;
            $_SESSION['lname'] = $result->LastName;
            $_SESSION['status'] = $result->Status;

            //If user is inactive user
            if ($_SESSION['status'] == 0) {
                $this->session->set_flashdata("error", "Your Account is Deactivated Please Contact your Administrator !!!");
                redirect("Page_controller/index", "refresh");

            //If user is active
            } else {
                $this->session->set_flashdata("log_success", "You are logged in");
                redirect("attendance_con/attendanceView", "refresh");

            }

            //If username or password wrong
        } else {

            $this->session->set_flashdata("error", "Your Username or Password Incorrect");
            redirect("Page_controller/index", "refresh");
        }
    }

    //logout function
    public function logout()
    {
        unset($_SESSION);
        session_destroy();
        redirect("Page_controller/index", "refresh");
    }


}

?>