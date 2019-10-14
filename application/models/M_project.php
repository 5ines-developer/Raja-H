<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_project extends CI_Model {


    public function projectlist(Type $var = null)
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
    

    public function projectGet($id='',$category='',$name='')
    {        
        return $this->db->where('projectid', $id)->where('cat_type',$category)->get('projectdetail')->result();        
    }

    public function floorGet($id='')
    {
        return $this->db->where('fprojectid', $id)->get('floorimage')->result();
    }

    public function galleryGet($id='')
    {
        return $this->db->where('projectid', $id)->get('gallery')->result();
    }

        public function amenityGet($id='')
    {
        return $this->db->where('projectid', $id)->get('amenity')->result();
    }

        public function nearbyGet($id='')
    {
        return $this->db->where('projectid', $id)->get('nearby')->result();
    }



    public function categoryName($id = null,$cat='')
    {
        if ($cat == 'parent category') {
            return $this->db->select('category as name')->where('id',$id)->get('category')->row('name');            
        }elseif($cat == 'sub category'){
            return $this->db->select('subcategory as name')->where('id',$id)->get('subcategory')->row('name');
        }elseif($cat == 'super category'){
            return $this->db->select('supercategory as name')->where('id',$id)->get('supercategory')->row('name');
        }
    }

    

}

/* End of file ModelName.php */
