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

        $data['seo']        = $this->m_home->seoGet($name);

        if (!empty($output)) {
           foreach ($output as $key => $value) {
                $value->floor   = $this->m_project->floorGet($value->id);
                $value->gallery = $this->m_project->galleryGet($value->id);
                $value->amenity = $this->m_project->amenityGet($value->id);

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
        $data['seo']        = $this->m_home->seoGet($name);
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


            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');

            if ($this->form_validation->run() == TRUE) {
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
                    $this->sendpara($data);
                    redirect('thank-you','refresh');
                }else{
                    $this->session->set_flashdata('error', 'Server error occured. Please try agin or <br> contact this number <a href="tel:9590779922">9590 779 922</a>');
                    redirect($this->input->post('url').'?'.$this->input->post('query'),'refresh');
                }

            } else {
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);
                redirect('contact-us','refresh');
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


    public function sendpara($data='')
    {
        $input = array (
        'rep_id' => 'rhvidhya',
        'subject' => $data['subj'],
        'notes' => $data['msg'],
        'proje_1' => '',
        'f_name' => $data['name'],
        'l_name' => ' ',
        'email' => $data['email'],
        'phonefax' => $data['phone'],
        'channel_id' => 'Website Contact Us',
        'alert_client' => 0,
        'alert_rep' => 0);


        $url = 'https://cloud.paramantra.com/paramantra/api/data/new/format/json';
        $api_key='rAhouJaPaI';
        $app_name='rajahousingltd';

        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: $api_key ","ACTION-ON: $app_name"));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $input);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
            curl_setopt($ch, CURLOPT_USERPWD, $api_key );
            $data_resp = curl_exec($ch);
            curl_close($ch);

        $data_resp;
        return true;
    }

}

/* End of file Controllername.php */
