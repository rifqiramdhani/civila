<?php 

class My_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function query_data_vila(){
        return $this->db->get('vila')->result();
    }

    public function query_daftar_vila($lokasi, $kapasitas){
        $query = 'SELECT * FROM `vila` WHERE lokasi_vila = "'. $lokasi .'" AND kapasitas_vila = "'. $kapasitas .'" ORDER BY harga_vila ASC';
        return $this->db->query($query)->result();
    }

    public function query_foto_vila($id_vila){
        return $this->db->get_where('foto', ['id_vila' => $id_vila]);
    }

    public function query_detail_vila($id_vila){
        return $this->db->get_where('vila', ['id_vila' => $id_vila])->row_array();
    }

    public function query_tambah_vila($data){
        return $this->db->insert('vila', $data);
    }

    public function query_data_vila_terakhir(){
        return $this->db->query('SELECT * FROM vila ORDER BY id_vila DESC LIMIT 1')->row_array();
    }

    public function query_edit_vila($data, $where){
        return $this->db->update('vila', $data, $where);
    }

    public function query_hapus_vila($where){
        return $this->db->delete('vila', $where);
    }


}