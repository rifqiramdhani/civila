<?php 

class My_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $this->load->library('datatables');
    }

    public function getdata($table){
        return $this->db->get($table);
    }

    public function getdata_where($table, $where){
        return $this->db->get_where($table, $where);
    }

    public function insertdata($table, $data){
        return $this->db->insert($table, $data);
    }
    
    public function deletedata($table, $where){
        return $this->db->delete($table, $where);
    }

   
}
