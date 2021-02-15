<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('fungsi');
        $this->load->library('form_validation');
    }

    public function cek_login()
    {
        if ($this->session->userdata('login') == true) {
            redirect(base_url("admin/dashboard"));
        }
    }

    public function login()
    {
        $this->cek_login();

        $this->template->load('template_auth', 'auth');
    }


    public function proseslogin()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->login();
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('admin', ['email' => $email])->row_array();

            if ($user) {
                $data = [
                    'login' => true,
                    'email' => $email,
                ];

                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Maaf email belum terdaftar
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('auth/login');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function page404()
    {
        $this->load->view('404');
    }

}
