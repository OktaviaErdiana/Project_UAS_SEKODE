<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_wisata');
    }

    public function index()
    {
        $this->load->view('frontend/_partials/header');
        $this->load->view('backend/index');
    }

    public function komentar()
    {
        $this->load->view('frontend/_partials/header');
        $this->load->view('backend/komentar');
    }

}


    ?>