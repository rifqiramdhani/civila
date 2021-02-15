<?php

class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function query_daftar_vila($lokasi, $kapasitas)
    {
        $query = 'SELECT * FROM `vila` WHERE lokasi_vila = "' . $lokasi . '" AND kapasitas_vila = "' . $kapasitas . '" ORDER BY harga_vila ASC';
        return $this->db->query($query)->result();
    }

    public function query_thumbnail_vila($id_vila)
    {
        return $this->db->get_where('vila', ['id_vila' => $id_vila]);
    }

    public function query_foto_vila($id_vila)
    {
        return $this->db->get_where('foto', ['id_vila' => $id_vila]);
    }

    public function query_detail_vila($id_vila)
    {
        return $this->db->get_where('vila', ['id_vila' => $id_vila])->row_array();
    }

    public function query_tambah_user($data){
        return $this->db->insert('user', $data);
    }

}
