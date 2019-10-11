<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function bannerGet($value='')
	{
		return $this->db->get('banner')->result();
	}

	

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */