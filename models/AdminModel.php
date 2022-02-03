<?php
class AdminModel extends CI_model{

    function create($formArray)
    {
        $this->db->insert('dq_contact_tbl',$formArray);
        


    }

    function all() {
       return $users =  $this->db->get('dq_contact_tbl')->result_array();
      

    }

    function getUser($Id){
        $this->db->where('id',$Id);
       return $user =  $this->db->get('dq_contact_tbl')->row_array();
    }
    
    function fetchSingleData($data,$table,$where)
    {
        $query = $this->db->select($data)
                      ->from($table)
                      ->where($where)
                      ->get();
        return $query->row_array();
    }

    function updateData($table,$data,$where)
    {
        $query = $this->db->update($table,$data,$where);
        return $query;
    }

    function leadall() 
    {
        return $users =  $this->db->get('dq_lead_tbl')->result_array();
    }

    function fetchLeadSingleData($data,$table,$where)
    {
        $query = $this->db->select($data)
                      ->from($table)
                      ->where($where)
                      ->get();
        return $query->row_array();
    }

    function updateLeadData($table,$data,$where)
    {
        $query = $this->db->update($table,$data,$where);
        return $query;
    }

    function adminall() 
    {
        return $users =  $this->db->get('admin_log')->result_array();
    }

    function fetchadminSingleData($data,$table,$where)
    {
        $query = $this->db->select($data)
                      ->from($table)
                      ->where($where)
                      ->get();
        return $query->row_array();
    }

    function admin($table,$data)
    {
        $query = $this->db->insert($table,$data);
        return $query;
    }

    public function loginAdmin($data)
    {
        $this->db->select('*');
        $this->db->from('admin_log');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
         $query = $this->db->get();
         return $query->row_array();

    }

   }
   ?>