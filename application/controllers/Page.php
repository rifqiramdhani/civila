<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('My_model');
    }

    public function index(){
        $this->template->load('page/template', 'page/home');
    }

    public function daftarvila(){
        // $data['datavila'] = $this->My_model->getdata('vila')->result();

        $lokasi = $this->input->get('lokasi');
        $checkin = $this->input->get('checkin');
        $checkout = $this->input->get('checkout');
        $kapasitas = $this->input->get('kapasitas');

        $query = 'SELECT * FROM `vila` WHERE lokasi_vila = "'. $lokasi .'" AND kapasitas_vila = "'. $kapasitas .'" ORDER BY harga_vila ASC';

        $data['datavila'] = $this->db->query($query)->result();
        $data['checkin'] = $checkin;
        $data['checkout'] = $checkout;

        $this->template->load('page/template', 'page/daftarvila', $data);
    }

    public function detailvila($id_vila){
        $data['detail_vila'] = $this->My_model->getdata_where('vila', ['id_vila' => $id_vila])->row_array();

        $data['foto_vila'] = $this->My_model->getdata_where('foto', ['id_vila' => $id_vila])->result();
        $data['thumbnail_vila'] = $this->My_model->getdata_where('foto', ['id_vila' => $id_vila])->row_array();


        $data['fasilitas_vila'] = explode(',', $data['detail_vila']['fasilitas_vila']);

        $data['checkin'] = $this->input->get('checkin');
        $data['checkout'] = $this->input->get('checkout');

        $this->template->load('page/template', 'page/detailvila', $data);
    }
}
