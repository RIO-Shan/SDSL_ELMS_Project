<?php
/**
 * Created by PhpStorm.
 * User: MDS Heshan
 * Date: 7/19/2019
 * Time: 11:27 PM
 */

class profile_model extends CI_Model
{

    //Get Employee data
    public function getEmployeeData($empNo)
    {

        $this->db->select(array('EmailId', 'FirstName', 'LastName', 'Gender', 'Dob', 'Department', 'Address', 'City', 'Country', 'Phonenumber'));
        $this->db->from('tblemployees');
        $this->db->where(array('EmpId' => $empNo));

        $query = $this->db->get();

        $empData = $query->row();

        if ($empData != null) {
            return $empData;
        } else {
            return false;
        }
    }

    //Update Employee Data
    public function setEmpData($empid, $fname, $lname, $mnumber, $gender, $dob, $address, $city, $country)
    {
        $value = array('FirstName' => $fname, 'LastName' => $lname, 'Phonenumber' => $mnumber, 'Gender' => $gender, 'Dob' => $dob, 'Address' => $address, 'City' => $city, 'Country' => $country);
        $this->db->where('EmpId', $empid);
        $this->db->update('tblemployees', $value);

        return ($this->db->affected_rows() != 1) ? false : true;

//        $this->db->trans_complete();
//
//        if ($this->db->trans_status() === FALSE) {
//            return "Query Failed";
//        } else {
//            // do whatever you want to do on query success
//        }


    }

}