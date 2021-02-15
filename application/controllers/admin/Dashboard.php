<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$data['vila'] = $this->My_model->query_data_vila();
		$this->template->load('template', 'admin/vila/index', $data);
	}

	public function tambah()
	{
		$data['level'] = "Admin";

		$this->template->load('template', 'admin/vila/tambah', $data);
	}


	public function edit($id)
	{
		$data['level'] = "Admin";

		$data['vila'] = $this->My_model->query_detail_vila($id);
		$this->template->load('template', 'admin/vila/edit', $data);
	}

	public function prosestambah()
	{

		$this->form_validation->set_rules('nama_vila', 'Nama Vila', 'required');
		$this->form_validation->set_rules('harga_vila', 'Harga Vila', 'required');
		$this->form_validation->set_rules('alamat_vila', 'Alamat Vila', 'required');
		$this->form_validation->set_rules('kapasitas_vila', 'Kapasitas Vila', 'required');
		$this->form_validation->set_rules('fasilitas_vila', 'Fasilitas Vila', 'required');
		$this->form_validation->set_rules('lokasi_vila', 'Lokasi Vila', 'required');
		$this->form_validation->set_rules('rating_vila', 'Rating Vila', 'required');

		if ($this->form_validation->run() == false) {
			$this->tambah();
		} else {
			$data = [
				'nama_vila' => $this->input->post('nama_vila'),
				'harga_vila' => $this->input->post('harga_vila'),
				'lokasi_vila' => $this->input->post('lokasi_vila'),
				'alamat_vila' => $this->input->post('alamat_vila'),
				'narahubung_vila' => $this->input->post('narahubung_vila'),
				'kapasitas_vila' => $this->input->post('kapasitas_vila'),
				'fasilitas_vila' => $this->input->post('fasilitas_vila'),
				'rating_vila' => $this->input->post('rating_vila'),
			];

			$sql = $this->My_model->query_tambah_vila($data);
			$lastIdVila = $this->My_model->query_data_vila_terakhir();

			$filesCount = count($_FILES['files']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				$_FILES['file']['name']     = $_FILES['files']['name'][$i];
				$_FILES['file']['type']     = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['files']['error'][$i];
				$_FILES['file']['size']     = $_FILES['files']['size'][$i];


				$config['upload_path']       = './assets/frontend/img/detail_vila/';
				$config['allowed_types']     = 'jpeg|jpg|png';
				$config['max_size']          = '10240';
				$config['encrypt_name']         = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					$fileData = $this->upload->data();
					$uploadData[$i]['foto'] = $fileData['file_name'];
					$uploadData[$i]['id_vila'] = $lastIdVila['id_vila'];
					
					$this->db->insert('foto', $uploadData[$i]);

					if($i == 0){
						$this->My_model->query_edit_vila(['foto_vila' => $uploadData[0]['foto']], ['id_vila' => $lastIdVila['id_vila']]);
					}

				} else {
					$error = array('error' => $this->upload->display_errors());
					$flashcog = [
						'message' => $error['error'],
						'title' => 'File Upload',
						'type' => 'error'
					];
					$this->session->set_flashdata($flashcog);
					redirect(base_url('admin/dashboard/tambah'));
				}
			}


			if ($sql) {
				$flashcog = [
					'message' => 'Data berhasil ditambahkan',
					'title' => 'Data vila',
					'type' => 'success'
				];
				$this->session->set_flashdata($flashcog);
				redirect(base_url('admin/dashboard'));
			} else {
				$flashcog = [
					'message' => 'Data gagal ditambahkan',
					'title' => 'Data vila',
					'type' => 'error'
				];
				$this->session->set_flashdata($flashcog);
				redirect(base_url('admin/dashboard'));
			}
		}
	}

	public function prosesedit($id)
	{
		$this->form_validation->set_rules('nama_vila', 'Nama Vila', 'required');
		$this->form_validation->set_rules('harga_vila', 'Harga Vila', 'required');
		$this->form_validation->set_rules('alamat_vila', 'Alamat Vila', 'required');
		$this->form_validation->set_rules('kapasitas_vila', 'Kapasitas Vila', 'required');
		$this->form_validation->set_rules('fasilitas_vila', 'Fasilitas Vila', 'required');
		$this->form_validation->set_rules('lokasi_vila', 'Lokasi Vila', 'required');
		$this->form_validation->set_rules('rating_vila', 'Rating Vila', 'required');

		$vila = $this->My_model->query_detail_vila($id);

		// echo base_url('/assets/frontend/img/detail_vila/' . $vila['foto_vila']);

		if ($this->form_validation->run() == false) {
			$this->edit($id);
		} else {
			$foto_vila = $_FILES['file']['name'];
			if ($foto_vila) {
				$config['upload_path']       = './assets/frontend/img/detail_vila/';
				$config['allowed_types']     = 'jpeg|jpg|png';
				$config['max_size']          = '10240';
				$config['encrypt_name']         = TRUE;
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('file')) {
					$image_name = $this->upload->data('file_name');

					unlink(FCPATH .'/assets/frontend/img/detail_vila/' . $vila['foto_vila']);
				} else {
					$error = array('error' => $this->upload->display_errors());
					$flashcog = [
						'message' => $error['error'],
						'title' => 'File Upload',
						'type' => 'error'
					];
					$this->session->set_flashdata($flashcog);
					redirect(base_url('admin/mobil/edit/' . $id));
				}

				$data = [
					'nama_vila' => $this->input->post('nama_vila'),
					'harga_vila' => $this->input->post('harga_vila'),
					'lokasi_vila' => $this->input->post('lokasi_vila'),
					'alamat_vila' => $this->input->post('alamat_vila'),
					'narahubung_vila' => $this->input->post('narahubung_vila'),
					'kapasitas_vila' => $this->input->post('kapasitas_vila'),
					'fasilitas_vila' => $this->input->post('fasilitas_vila'),
					'rating_vila' => $this->input->post('rating_vila'),
					'foto_vila' => $image_name
				];
			} else {
				$data = [
					'nama_vila' => $this->input->post('nama_vila'),
					'harga_vila' => $this->input->post('harga_vila'),
					'lokasi_vila' => $this->input->post('lokasi_vila'),
					'alamat_vila' => $this->input->post('alamat_vila'),
					'narahubung_vila' => $this->input->post('narahubung_vila'),
					'kapasitas_vila' => $this->input->post('kapasitas_vila'),
					'fasilitas_vila' => $this->input->post('fasilitas_vila'),
					'rating_vila' => $this->input->post('rating_vila')
				];
			}


			$sql = $this->My_model->query_edit_vila($data, ['id_vila' => $id]);

			if ($sql) {
				$flashcog = [
					'message' => 'Data berhasil diperbaharui',
					'title' => 'Data vila',
					'type' => 'success'
				];
				$this->session->set_flashdata($flashcog);
				redirect(base_url('admin/dashboard'));
			} else {
				$flashcog = [
					'message' => 'Data gagal diperbaharui',
					'title' => 'Data vila',
					'type' => 'error'
				];
				$this->session->set_flashdata($flashcog);
				redirect(base_url('admin/dashboard'));
			}
		}
	}

	public function delete($id)
	{
		$this->My_model->query_hapus_vila(['id_vila' => $id]);
	}
}
