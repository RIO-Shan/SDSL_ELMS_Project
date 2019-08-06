<?php

/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/21/2019
 * Time: 12:34 PM
 */
class emp_changepassword_model extends CI_Model
{

    //Check Current Password
    public function checkPassword($empno, $md5currpwd)
    {

        $this->db->select('id');
        $this->db->from('tblemployees');
        $this->db->where(array('EmpId' => $empno, 'Password' => $md5currpwd));

        $query = $this->db->get();
        //$result = $query->row();
        return ($query->num_rows() == 1) ? true : false;
    }


    //Upadate new Password
    public function updatePassword($empno, $md5nwpwd)
    {
        $value = array('Password' => $md5nwpwd);
        $this->db->where('EmpId', $empno);
        $this->db->update('tblemployees', $value);

        return ($this->db->affected_rows() != 1) ? false : true;


    }
}