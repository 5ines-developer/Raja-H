<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function bannerGet($value='')
	{
		return $this->db->get('banner')->result();
	}

	// contact us
	public function contact($data)
	{
		$this->db->insert('enquiry', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */