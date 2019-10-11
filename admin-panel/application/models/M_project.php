<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class M_project extends CI_Model {

	//get all project details

	public function category($value='')
	{	
		
		$this->db->select('c.category as cname,c.id as cid,a.name as admin');
		$this->db->from('category c');
		$this->db->join('admin a', 'a.id = c.added_by', 'left');
		return $this->db->get()->result();			
	}

	public function subcategory($var = null)
	{
		$this->db->select('c.category as cname,sb.subcategory as sname,sb.id as subid,a.name as admin,c.id as cid');		
		$this->db->from('subcategory sb');
		$this->db->join('category c', 'c.id = sb.category', 'left');
		$this->db->join('admin a', 'a.id = sb.added_by', 'left');
		return $this->db->get()->result();	
	}

	public function supcategory($var = null)
	{
		$this->db->select('c.category as cname,sb.subcategory as sname,sp.supercategory as supName,sp.id as supid,c.id as cid,sb.id as subid,a.name as admin');
		$this->db->from('supercategory sp');	
		$this->db->join('subcategory sb', 'sb.id = sp.subcategory', 'left');
		$this->db->join('category c', 'c.id = sb.category', 'left');
		$this->db->join('admin a', 'a.id = sp.added_by', 'left');
		return $this->db->get()->result();	
	}


	public function projectGet($id = '',$type='')
	{		
		return $this->db->where('projectid', $id)->where('cat_type', $type)->get('projectdetail')->row();		
	}

	public function floorimage($id = null)
	{
		return $this->db->where('fprojectid', $id)->get('floorimage')->result();
	}
	public function amenityGet($id = null)
	{
		return $this->db->where('projectid', $id)->get('amenity')->result();
	}

	public function galleryGet($id = null)
	{
		return $this->db->where('projectid', $id)->get('gallery')->result();
	}

	public function locationGet($id = null)
	{
		return $this->db->where('projectid', $id)->get('nearby')->result();
	}


	public function insert_detail($insert = null)
	{
		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail');
		if ($query->num_rows() > 0) {
			$this->db->where('projectid', $insert['projectid']);
			return $this->db->update('projectdetail', array('detail' => $insert['detail']));
		}else{
			return $this->db->insert('projectdetail', $insert);	
		}	
	}


	public function insert_area($insert = null)
	{

		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail');
		if ($query->num_rows() > 0) {
			$this->db->where('projectid', $insert['projectid']);
			return  $this->db->update('projectdetail', array('areastatement' => $insert['areastatement']));
			
		}else{
			return $this->db->insert('projectdetail', $insert);	
			
		}
	}


	public function insert_master($insert = null)
	{

		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail');
		if ($query->num_rows() > 0) {
			$this->db->where('projectid', $insert['projectid']);
			return $this->db->update('projectdetail', array('materplan' => $insert['materplan'],'masterimage' => $insert['masterimage']));
		}else{
			return $this->db->insert('projectdetail', $insert);	
		}
	}


	public function insert_floor($insert = null)
	{
		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail')->row();
		if (!empty($query)) {
			$this->db->where('projectid', $insert['projectid']);
			$this->db->update('projectdetail', array('floorplan' => $insert['floorplan']));
			return  $query->id;
		}else{
			$this->db->insert('projectdetail', $insert);	
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}
	}


	public function insert_floorimage($insert)
	{
		return $this->db->insert('floorimage', $insert);	
	}

	public function insert_amenity($insert = null)
	{
		return $this->db->insert('amenity', $insert);	
	}

	public function delete_amenity($id = null)
	{
		$this->db->where('projectid', $id);
		return $this->db->delete('amenity');
	}


	public function insert_gallery($insert = null)
	{
		return $this->db->insert('gallery', $insert);
	}

	

	public function insert_location($insert = null)
	{

		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail');
		if ($query->num_rows() > 0) {
			$this->db->where('projectid', $insert['projectid']);
			return  $this->db->update('projectdetail', array('location' => $insert['location']));
			
		}else{
			return $this->db->insert('projectdetail', $insert);	
			
		}
	}

	public function insert_nearby($insert = null)
	{
		return $this->db->insert('nearby', $insert);	
	}

	public function delete_nearby($id = null)
	{
		$this->db->where('projectid', $id);
		return $this->db->delete('nearby');
	}


	

	

}

/* End of file M_project.php */
/* Location: ./application/models/M_project.php */