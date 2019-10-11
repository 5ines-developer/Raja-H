<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_category extends CI_Model {

	    //banner get
    public function categoryGet($var = null)
    {
    	$this->db->select('c.category,a.name as admin ,c.id as cat_id ,c.id as cat_id');
    	$this->db->order_by('c.id', 'desc');
    	$this->db->from('category c');
    	$this->db->join('admin a', 'a.id = c.added_by', 'inner');
        return $this->db->get()->result();    
    }

        //insert banner
    public function insert($insert = null)
    {
        
        $this->db->where('uniq', $insert['uniq']);
        $query = $this->db->get('category');
        if($query->num_rows() > 0){
            $this->db->where('uniq', $insert['uniq']);
            return $this->db->update('category', $insert);
        }else{
            return $this->db->insert('category', $insert);
        } 
    }

    public function delete($id = null)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
        if ($this->db->affected_rows() > 0) {
            $this->deletesuper($id);
            $this->deletesub($id);
            return true;
        }else{
            return false;
        }

    }


    public function deletesub($id='')
    {
        $this->db->where('category', $id);
        $this->db->delete('subcategory');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return true;
        }
    }


    public function deletesuper($id='')
    {
        $this->db->where('category', $id);
        $sub = $this->db->get('subcategory')->result();
        if (!empty($sub)) {
            foreach ($sub as $key => $value) {
                $this->db->where('subcategory', $value->id);
                $this->db->delete('supercategory');
            } 
            return true;
        }else{
            return true;
        }
    }


    public function edit($id = null)
    {
        return $this->db->where('id', $id)->get('category')->row();
    }

        	//update admin user
	public function update($update='',$id='')
	{
		$this->db->where('id', $id);
        $this->db->update('category', $update);
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
	}

    public function insertSub($insert='')
    {
        $this->db->where('uniq', $insert['uniq']);
        $query = $this->db->get('subcategory');
        if($query->num_rows() > 0){
            $this->db->where('uniq', $insert['uniq']);
            return $this->db->update('subcategory', $insert);
        }else{
            return $this->db->insert('subcategory', $insert);
        } 
    }

    public function editSub($id='')
    {
        return $this->db->where('id', $id)->get('subcategory')->row();
    }


    public function updateSub($name='',$id='')
    {
        $this->db->where('id', $id);
        $this->db->update('subcategory', array('subcategory' =>$name));
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }


    public function subDelete($id='')
    {
        $this->db->where('id', $id);
        $this->db->delete('subcategory');
        if ($this->db->affected_rows() > 0) {
            $this->db->where('subcategory', $id);
            $this->db->delete('supercategory');
            return true;
        }else{
            return true;
        }
    }

    //view category
    public function view($id='')
    {
        $this->db->select('s.subcategory, c.category,c.id as catId,s.id as subId,s.added_by as subadded,c.added_by as catadded,a.name as admin');
        $this->db->where('s.category', $id);
        $this->db->from('subcategory s');
        $this->db->join('category c', 'c.id = s.category', 'left');
        $this->db->join('admin a', 'a.id = s.added_by', 'left');
        return $this->db->get()->result();
    }


    public function insertSup($insert='')
    {
        $this->db->where('uniq', $insert['uniq']);
        $query = $this->db->get('supercategory');
        if($query->num_rows() > 0){
            $this->db->where('uniq', $insert['uniq']);
            return $this->db->update('supercategory', $insert);
        }else{
            return $this->db->insert('supercategory', $insert);
        } 
    }


    public function superview($id='')
    {
        $this->db->select('s.subcategory, sp.supercategory,s.id as subId,sp.id as supId,s.added_by as subadded,sp.added_by as supadded,a.name as admin');
        $this->db->where('sp.subcategory', $id);
        $this->db->from('subcategory s');
        $this->db->join('supercategory sp', 'sp.subcategory = s.id', 'left');
        $this->db->join('admin a', 'a.id = sp.added_by', 'left');
        return $this->db->get()->result();
    }

    public function editSup($id='')
    {
        return $this->db->where('id', $id)->get('supercategory')->row();
    }

    public function updateSup($name='',$id='')
    {
        $this->db->where('id', $id);
        $this->db->update('supercategory', array('supercategory' =>$name));
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return false;
        }
    }


    public function supDelete($id='')
    {
        $this->db->where('id', $id);
        $this->db->delete('supercategory');
        if ($this->db->affected_rows() > 0) {
            return true;
        }else{
            return true;
        }
    }

    

	

}

/* End of file M_category.php */
/* Location: ./application/models/M_category.php */