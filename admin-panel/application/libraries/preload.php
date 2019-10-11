<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class preload
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_banner');
        
    }

    public function enquiry()
    {
        return  $this->ci->m_banner->enquiryStatus();
    }

   


}

/* End of file LibraryName.php */
