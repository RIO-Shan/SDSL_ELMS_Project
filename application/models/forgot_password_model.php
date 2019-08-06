<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/22/2019
 * Time: 3:47 PM
 */
class forgot_password_model extends CI_Model
{

    public function getPwdRecoveryCheck($empid, $username)
    {
        $this->db->select('EmpId');
        $this->db->from('tblemployees');
        $this->db->where(array('EmpId' => $empid, 'EmailId' => $username));

        $query = $this->db->get();

        $result = $query->row();

        if ($query->num_rows() == 1) {
            return $result;
        } else {
            return false;
        }

    }
}