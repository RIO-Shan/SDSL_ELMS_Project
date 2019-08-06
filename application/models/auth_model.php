<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model
{

    public function getLoginData($username, $password)
    {
        //set input password to md5 format
        $et_password = md5($password);

        //query
        $this->db->select(array('EmpId', 'Firstname', 'LastName', 'Status'));
        $this->db->from('tblemployees');
        $this->db->where(array('EmailId' => $username, 'Password' => $et_password));

        //result set
        $query = $this->db->get();

        //get result set as object
        $user = $query->row();

        //Check Data exsist if return data object
        if ($query->num_rows() == 1) {
            return $user;
        } else {
            return false;

        }

    }

}


?>