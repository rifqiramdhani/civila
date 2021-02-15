<?php defined('BASEPATH') or exit('No direct script access allowed');

class Analytic extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'fungsi']);
		$this->load->model('My_model');
		$this->cek_login();
	}

	public function cek_login()
	{
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('auth/login'));
		}
	}

	public function index()
	{
		$data['level'] = "Admin";

        $date  = date("Y-m-d");

        $yesterday = date("Y-m-d", strtotime("yesterday")); 

        $pengunjunghariini  = $this->db->query("SELECT * FROM visitor WHERE date='" . $date . "' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

        $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM visitor")->row();

        $totalpengunjung = isset($dbpengunjung->hits) ? ($dbpengunjung->hits) : 0; // hitung total pengunjung

        $bataswaktu = time() - 300;

        $pengunjungonline  = $this->db->query("SELECT * FROM visitor WHERE online > '" . $bataswaktu . "'")->num_rows(); // hitung pengunjung online

        // today
        $pengunjung06 = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $date ."' AND time BETWEEN '00:00:00' AND '06:00:00'")->num_rows();
        $pengunjung612 = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $date ."' AND time BETWEEN '06:00:00' AND '12:00:00'")->num_rows();
        $pengunjung1218 = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $date ."' AND time BETWEEN '12:00:00' AND '18:00:00'")->num_rows();
        $pengunjung1800 = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $date ."' AND time BETWEEN '18:00:00' AND '23:59:00'")->num_rows();

        // yesterday
        $pengunjung06yesterday = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $yesterday ."' AND time BETWEEN '00:00:00' AND '06:00:00'")->num_rows();
        $pengunjung612yesterday = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $yesterday ."' AND time BETWEEN '06:00:00' AND '12:00:00'")->num_rows();
        $pengunjung1218yesterday = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $yesterday ."' AND time BETWEEN '12:00:00' AND '18:00:00'")->num_rows();
        $pengunjung1800yesterday = $this->db->query("SELECT * FROM `visitor` WHERE date = '". $yesterday ."' AND time BETWEEN '18:00:00' AND '23:59:00'")->num_rows();

        $grafikpengunjungtoday = [0,$pengunjung06,$pengunjung612, $pengunjung1218,$pengunjung1800];
        $grafikpengunjungyesterday = [0,$pengunjung06yesterday, $pengunjung612yesterday, $pengunjung1218yesterday, $pengunjung1800yesterday];

        $data['grafikkemarin'] = $grafikpengunjungyesterday;
        $data['grafikhariini'] = $grafikpengunjungtoday;
        $data['pengunjunghariini'] = $pengunjunghariini;
        $data['totalpengunjung'] = $totalpengunjung;
        $data['pengunjungonline'] = $pengunjungonline;

		$this->template->load('template', 'admin/analytic', $data);
	}
}