<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_banner extends CI_Model {

    //banner get
    public function bannerGet($var = null)
    {
        return $this->db->order_by('id', 'desc')->get('banner')->result();    
    }


    //insert banner
    public function insert($insert = null)
    {
        
        $this->db->where('uniq', $insert['uniq']);
        $query = $this->db->get('banner');
        if($query->num_rows() > 0){
            $this->db->where('uniq', $insert['uniq']);
            return $this->db->update('banner', $insert);
        }else{
            return $this->db->insert('banner', $insert);
        } 
    }


    public function delete($id = null)
    {
        $this->db->where('id', $id);
        $this->db->select('image');
        $query = $this->db->get('banner')->row();

        if (!empty($query)) {
            $this->db->where('id', $id);
            $this->db->delete('banner');

            unlink($_SERVER['DOCUMENT_ROOT'].'/raja-housing/'.$query->image);

            
            return true;
            
        }else{
            return false;
        }
    }

    public function edit($id = null)
    {
        return $this->db->where('id', $id)->get('banner')->row();
    }

    //enquiry
    public function enquiry($id='')
    {
        if(!empty($id)){
            $this->db->where('id', $id);
            $this->changeEstatus($id);
        }
        return $this->db->order_by('id', 'desc')->get('enquiry')->result();
    }

    public function changeEstatus($id = null)
    {
        $this->db->where('id', $id)->update('enquiry', array('status' => '1' ));
        
    }

    public function enquiryStatus()
    {
       $query = $this->db->where('status', '2')->get('enquiry');
       return $query->num_rows();
    }


        //enquiry
    public function referral($id='')
    {
        if(!empty($id)){
            $this->db->where('id', $id);
            $this->referralstatus($id);
        }
        return $this->db->order_by('id', 'desc')->get('referal_bonus')->result();
    }

    public function referralstatus($id='')
    {
       return $this->db->where('id', $id)->update('referal_bonus',array('status' => '1'));
    }

    public function referalcount($value='')
    {
        $query = $this->db->where('status', '0')->get('referal_bonus');
       return $query->num_rows();
    }

    

}

/* End of file ModelName.php */
