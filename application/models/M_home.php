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

	// sitemap
	public function sitemap()
	{
		$this->db->select('id, category, uniq');
		$category = $this->db->get('category')->result();
		return $this->getSubcat($category);
		
	}

	public function getSubcat($category = null)
	{

		foreach ($category as $key => $value) {
			$value->child = $this->db->select('id, subcategory, uniq')->where('category', $value->id)->get('subcategory')->result();
		}
		return $this->getSupCategery($category);
		// return $category;

	}

	public function getSupCategery($category)
	{
		foreach ($category as $key => $value) {
			foreach ($value->child as $key1 => $value1) {
				$value1->child = $this->db->select('id, supercategory, uniq')->where('subcategory', $value1->id)->get('supercategory')->result();
			}
		}
		return $category;
	}
	

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */