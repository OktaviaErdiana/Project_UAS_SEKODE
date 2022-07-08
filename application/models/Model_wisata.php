<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_wisata extends CI_Model {

    function cek_login($data){		
		$query = $this->db->get_where('user', $data);
	return $query;
	}	

}

/* End of file  Model_wisata.php */
/* Location: ./application/models/ Model_wisata.php */