<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_wisata');
	}

	public function index()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/index');
	}

	



	public function register()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/register');
	}

	public function rekreasi()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/index');
	}

	public function kuliner()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/kuliner');
	}


	public function team()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/team');
	}
	
	public function contact()
	{
		$this->load->view('frontend/_partials/header');
		$this->load->view('frontend/contact');
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */