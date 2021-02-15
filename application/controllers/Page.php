<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public $lokasi;
    public $checkin;
    public $checkout;
    public $kapasitas;


    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $this->visitor();
        $this->template->load('page/template', 'page/home');
    }

    // public function analytic(){
    //     $this->template->load('page/template', 'page/analytic');
    // }

    public function daftarvila(){

        $this->lokasi = $this->input->get('lokasi');
        $this->checkin = $this->input->get('checkin');
        $this->checkout = $this->input->get('checkout');
        $this->kapasitas = $this->input->get('kapasitas');

        $data['datavila'] = $this->User_model->query_daftar_vila($this->lokasi, $this->kapasitas);

        $data['checkin'] = $this->checkin;
        $data['checkout'] = $this->checkout;
        $data['lokasi'] = $this->lokasi;
        $data['kapasitas'] = $this->kapasitas;
        

        $this->template->load('page/template', 'page/daftarvila', $data);
    }

    public function detailvila($id_vila){
        $data['detail_vila'] = $this->User_model->query_detail_vila($id_vila);

        $data['thumbnail_vila'] = $this->User_model->query_thumbnail_vila($id_vila)->row_array();
        $data['foto_vila'] = $this->User_model->query_foto_vila($id_vila)->result();

        $data['fasilitas_vila'] = explode(',', $data['detail_vila']['fasilitas_vila']);

        $data['kapasitas'] = $this->input->get('kapasitas');
        $data['lokasi'] = $this->input->get('lokasi');
        $data['checkin'] = $this->input->get('checkin');
        $data['checkout'] = $this->input->get('checkout');

        $this->template->load('page/template', 'page/detailvila', $data);
    }

    function data_user(){
        $nama_user = $this->input->post('nama_user');
        $email_user = $this->input->post('email_user');
        $telepon_user = $this->input->post('telepon_user');
        $alamat_user = $this->input->post('alamat_user');
        $vocher_user = $this->input->post('vocher_user');
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $narahubung = $this->input->post('narahubung');
        $nama_vila = $this->input->post('nama_vila');

        $data = [
            'nama_user' => $nama_user,
            'email_user' => $email_user,
            'telepon_user' => $telepon_user,
            'alamat_user' => $alamat_user,
            'vocher_user' => $vocher_user
        ];

        $sql = $this->User_model->query_tambah_user($data);

        $hp = $narahubung;
        $hp62 = substr_replace($hp, '62', 0, 1);

        if($sql){
            if(empty($vocher_user)){
                redirect('http://api.whatsapp.com/send?phone=' . $hp62 . '&text=Nama%20:%20' . $nama_user . '%0AEmail%20:%20' . $email_user . '%0ATelepon%20:%20' . $telepon_user . '%0AAlamat%20:%20' . $alamat_user . '%0A%0ASaya%20ingin%20memesan%20' . $nama_vila . '%20pada%20tanggal%20' . $checkin . '%20sampai%20' . $checkout);
            }else{
                redirect('http://api.whatsapp.com/send?phone=' . $hp62 . '&text=Nama%20:%20' . $nama_user . '%0AEmail%20:%20' . $email_user . '%0ATelepon%20:%20' . $telepon_user . '%0AAlamat%20:%20' . $alamat_user . '%0AKode Vocher%20:%20' . $vocher_user . '%0A%0ASaya%20ingin%20memesan%20' . $nama_vila . '%20pada%20tanggal%20' . $checkin . '%20sampai%20' . $checkout);
            }
        }
        
    }

    public function visitor(){
        $ip    = $this->input->ip_address(); // Mendapatkan IP user
        $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
        $waktu = time(); //
        $timeinsert = date("Y-m-d H:i:s");

        // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
        $s = $this->db->query("SELECT * FROM visitor WHERE ip='" . $ip . "' AND date='" . $date . "'")->num_rows();
        $ss = isset($s) ? ($s) : 0;


        // Kalau belum ada, simpan data user tersebut ke database
        if ($ss == 0
        ) {
            $this->db->query("INSERT INTO visitor(ip, date, hits, online, time) VALUES('" . $ip . "','" . $date . "','1','" . $waktu . "','" . $timeinsert . "')");
        }

        // Jika sudah ada, update
        else {
            $this->db->query("UPDATE visitor SET hits=hits+1, online='" . $waktu . "' WHERE ip='" . $ip . "' AND date='" . $date . "'");
        }


        $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();

        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        $bataswaktu = time() - 300;

        $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online


        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

        return $data;
    }
}
