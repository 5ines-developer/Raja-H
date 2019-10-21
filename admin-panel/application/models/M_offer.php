<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_offer extends CI_Model {

	public function offerGet($id='')
	{
		return $this->db->get('offer')->row();
	}

	public function insert($insert='')
	{
		$query = $this->db->get('offer')->row();
		if (empty($query)) {
			return $this->db->insert('offer', $insert);
		}else{
			return $this->db->update('offer', $insert);
		}
	}

	public function delete($id = null)
    {
        $this->db->where('id', $id);
        $this->db->select('image');
        $query = $this->db->get('offer')->row();

        if (!empty($query)) {
            $this->db->where('id', $id);
            $this->db->delete('offer');
            unlink('../'.$query->image);           
            return true;            
        }else{
            return false;
        }
    }


    public function edit($id = null)
    {
        return $this->db->where('id', $id)->get('offer')->row();
    }

    public function activate($id,$status)
    {
    	return $this->db->where('id', $id)->update('offer',array('status' => $status));
    }

	

}

/* End of file M_offer.php */
/* Location: ./application/models/M_offer.php */