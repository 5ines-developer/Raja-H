<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//Do your magic here
        $this->load->model('m_project');
		$this->load->model('m_home');
    }
    
    //load projects
    public function index($name="")
    { 
        $id = $this->input->get('q');
        $category = $this->input->get('c'); 
        $name = str_replace("-"," ",$name);
        $category = str_replace("-"," ",$category);
        $output = $this->m_project->projectGet($id,$category,$name);

        if (!empty($output)) {
           foreach ($output as $key => $value) {
                $value->floor   = $this->m_project->floorGet($value->id);
                $value->gallery = $this->m_project->galleryGet($value->id);
                $value->amenity = $this->m_project->amenityGet($value->id);
                $value->nearby  = $this->m_project->nearbyGet($value->id);

            }
        }        
        $data['result'] = $output;  
        $this->load->view('projects/property-detail', $data, FALSE);  
    }


    public function projectList($name="")
    {
        $id     = $this->input->get('q');
        $sub    = $this->input->get('c'); 
        $sub    = str_replace("-"," ",$sub);
        $name   = str_replace("-"," ",$name);
        $output = $this->db->where('subcategory',$id)->get('supercategory')->result();
        $category = 'super category';
        if (!empty($output)) {
            foreach ($output as $key => $value) {
                $value->detail = $this->m_project->projectGet($value->id,$category,$value->supercategory);
            }
        }
        $data['result'] = $output;  
        $this->load->view('projects/project-list.php', $data);
    }


    public function contact()
    {

        if($this->input->post()){
            $data = array(
                'name'  => $this->input->post('name', true), 
                'email' => $this->input->post('email', true), 
                'phone' => $this->input->post('phone', true), 
                'subj'  => $this->input->post('sub', true), 
                'msg'   => $this->input->post('msg', true), 
                'subj'  => 'Project enquiry - '.str_replace('-', ' ', $this->input->post('url'))
            );  
            if($this->m_home->contact($data)){
                $this->sendMail($data);
                redirect('thank-you','refresh');
            }else{
                $this->session->set_flashdata('error', 'Server error occured. Please try agin or <br> contact this number <a href="tel:9590779922">9590 779 922</a>');
                redirect($this->input->post('url').'?'.$this->input->post('query'),'refresh');
            }
        }
        
    }

    public function thank_you()
    {
        $data['title'] = 'Contact us | Raja Housing';
        $this->load->view('pages/thank', $data);
    }

    function sendMail($data)
    {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $this->config->item('to');
        $data['data'] = $data;
        $msg = $this->load->view('email/enquiry', $data, true);
        $this->email->set_newline("\r\n");
        $this->email->from($from , 'Rajahousing');
        $this->email->to($to);
        $this->email->subject('Property Enqiry'); 
        $this->email->message($msg);
        if($this->email->send())  
        {  
            return true;
        } 
        else
        {
            return false;
        }
    }

}

/* End of file Controllername.php */
