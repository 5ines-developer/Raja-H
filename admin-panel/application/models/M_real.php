<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_real extends CI_Model {

	    //banner get
    public function realGet($var = null)
    {
        return $this->db->order_by('id', 'desc')->get('realestate')->row();    
    }

	    //insert banner
    public function insert($insert = null)
    {
        
        $query = $this->db->get('realestate');
        if($query->num_rows() > 0){
            return $this->db->update('realestate', $insert);
        }else{
            return $this->db->insert('realestate', $insert);
        } 
    }
	

}

/* End of file M_real.php */
/* Location: ./application/models/M_real.php */