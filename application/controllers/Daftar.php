<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Daftar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_wisata');
    }

    public function index()
    {
        $this->load->view('frontend/_partials/header');
        $this->load->view('frontend/daftar');
    }

    public function rekreasi()
    {
        $this->load->view('frontend/_partials/header');
        $this->load->view('frontend/daftar_rekreasi');
    }

    public function kuliner()
    {
        $this->load->view('frontend/_partials/header');
        $this->load->view('frontend/daftar_kuliner');
    }
}

?>