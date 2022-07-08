<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_wisata');
    }
    public function index(){
        $this->load->view('frontend/_partials/header');
        $this->load->view('frontend/login');
    }
    public function register(){
        $this->load->view('frontend/_partials/header');
        $this->load->view('frontend/register');
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => $password
			);
	$hasil = $this->Model_wisata->cek_login($data);
	if ($hasil->num_rows() == 1) {

		foreach ($hasil->result() as $sess) {
		$sess_data['logged_in'] = 'Sudah Login';
		$sess_data['nama'] = $sess->nama;
		$sess_data['username'] = $sess->username;
		$sess_data['role'] = $sess->role;
		$this->session->set_userdata($sess_data);
		}
	$status = $this->session->userdata('role');
	if ($status == 1) 
		 {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(site_url("Beranda"));
		}elseif ($status == 2) {
			$this->session->set_flashdata('login_berhasil', ' ');
			redirect(site_url("Backend"));
		}
	}else{
			$this->session->set_flashdata('login_gagal', ' ');
			redirect(site_url("Login"));
		}
		

	
}


}





?>