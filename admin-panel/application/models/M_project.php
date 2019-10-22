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


	public function insert_detail($insert = null,$name='')
	{
		
		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail')->row();
		if (!empty($query)) {
			$this->db->where('projectid', $insert['projectid']);
			$this->db->update('projectdetail', $insert);
			$insert_id = $query->id;
		}else{
			$this->db->insert('projectdetail', $insert);
			$insert_id = $this->db->insert_id();	
		}	
		$name = array('page' => $name);

		$this->inser_seo($name,$insert_id);
		return true;
	}

	public function inser_seo($name='',$insert_id='')
	{
		$this->db->where('project_id', $insert_id);
		$query = $this->db->get('seo');
		if ($query->num_rows() > 0) {
			$this->db->where('project_id', $insert_id);
			return $this->db->update('seo', $name);
		}else{
			return $this->db->insert('seo', $name);	
		}	
	}


	public function insert_area($insert = null)
	{

		$this->db->where('projectid', $insert['projectid']);
		$query = $this->db->get('projectdetail');
		if ($query->num_rows() > 0) {
			$this->db->where('projectid', $insert['projectid']);
			return  $this->db->update('projectdetail', $insert);
			
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
			return $this->db->update('projectdetail', $insert);
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
			$this->db->update('projectdetail', $insert);
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
			return  $this->db->update('projectdetail', $insert);
			
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

	public function gallery_delete($galId)
	{		
		$query = $this->db->where('id', $galId)->get('gallery')->row();
		if (!empty($query)) {
			unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$query->image);
			unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$query->thumb);
			return $this->db->where('id', $galId)->delete('gallery');
		}else{
			return false;
		}	
	}

	public function floor_delete($fId)
	{		
		$query = $this->db->where('fid', $fId)->get('floorimage')->row();
		if (!empty($query)) {
			unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$query->fimage);
			unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$query->fthumb);
			return $this->db->where('fid', $fId)->delete('floorimage');
		}else{
			return false;
		}	
	}

	public function am_delete($aid)
	{
		return $this->db->where('aid', $aid)->delete('amenity');
	}

	public function near_delete($id)
	{
		return $this->db->where('id', $id)->delete('nearby');
	}

	public function delete_project($id = null,$cat='')
	{
		if ($cat == 'parent category') {
			$this->delete_parent($id,$cat);
		 }
		 elseif($cat == 'sub category'){
			 $this->delete_sub($id,$cat);
		 }elseif($cat == 'super category'){
			 $this->delete_super($id,$cat);
		 }	
		 return true;
	}


	public function delete_parent($id='',$cat='')
	{	 	
		$query = $this->db->where('category', $id)->get('subcategory')->result();
		if (!empty($query)) {
			foreach ($query as $key => $value) {
				$sup = $this->db->where('subcategory', $value->id)->get('supercategory')->result();
				foreach ($sup as $sup1 => $sup2) {
					$supcat = 'super category';
					$this->project_delete($sup2->id,$supcat);
				}
				$this->db->where('subcategory', $value->id)->delete('supercategory');

			$subcat = 'sub category';
			$this->project_delete($value->id,$subcat);
			}
			$this->db->where('category', $id)->delete('subcategory');
		}

		$this->project_delete($id,$cat);
		$this->db->where('id', $id)->delete('category');
		return true;
	}


	public function delete_sub($id='',$cat='')
	{
		$sup = $this->db->where('subcategory', $id)->get('supercategory')->result();
		foreach ($sup as $sup1 => $sup2) {
			$supcat = 'super category';
			$this->project_delete($sup2->id,$supcat);
		}
		$this->db->where('subcategory', $value->id)->delete('supercategory');
		$this->project_delete($value->id,$cat);
		$this->db->where('id', $id)->delete('subcategory');
		return true;
	}

	public function delete_super($id='',$cat='')
	{
		$this->project_delete($id,$cat);
		$this->db->where('subcategory', $id)->delete('supercategory');
		return true;

	}

	public function project_delete($id='',$cat='')
	{
		$project = $this->db->where('projectid', $id)->where('cat_type', $cat)->get('projectdetail')->row();
		if (!empty($project)) {
			$this->gall_delete($project->id);	
			$this->floor_del($project->id);	
			$this->amenity_del($project->id);	
			$this->nearby_del($project->id);
			$this->db->where('projectid', $id)->where('cat_type', $cat)->delete('projectdetail');
		}
		return true;
		
	}

	
	function gall_delete($projectid = null)
	{
		$gal = $this->db->where('projectid', $projectid)->get('gallery')->result();
		if (!empty($gal)) {
			foreach ($gal as $gal1 => $gal2) {
				unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$gal2->image);
				unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$gal2->thumb);
			}
			return $this->db->where('projectid', $projectid)->delete('gallery');
		}	
	}

	public function floor_del($projectid = null)
	{
		$floor = $this->db->where('fprojectid', $projectid)->get('floorimage')->result();
		if (!empty($floor)) {
			foreach ($floor as $floor1 => $floor2) {
				unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$floor2->fimage);
				unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$floor2->fthumb);
			}
			return $this->db->where('fprojectid', $projectid)->delete('floorimage');
		}
	}
	public function amenity_del($projectid = null)
	{
		return $this->db->where('projectid', $projectid)->delete('amenity');
	}
	public function nearby_del($projectid = null)
	{
		return $this->db->where('projectid', $projectid)->delete('nearby');
	}


	

	

}

/* End of file M_project.php */
/* Location: ./application/models/M_project.php */