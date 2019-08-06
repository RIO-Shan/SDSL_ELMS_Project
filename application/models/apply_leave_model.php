<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/28/2019
 * Time: 9:59 PM
 */
class apply_leave_model extends CI_Model
{

    public function getLeaveDetails()
    {
        $this->db->select('*');
        $this->db->from('tblleavetype');

        $query = $this->db->get();

        $result = $query->result_array();

        if ($query->num_rows() >= 1) {
            return $result;
        } else {
            return flase;
        }

    }
}