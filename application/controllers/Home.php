<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_home');
	}

	public function index()
	{
		$data['title'] = 'Home | Raja Housing';
		$data['result'] = $this->m_home->bannerGet();
		$this->load->view('pages/index', $data);
		
	}

	public function contact()
	{
		
		if($this->input->post()){
			$data = array(
				'name' 	=> $this->input->post('name', true), 
				'email' => $this->input->post('email', true), 
				'phone' => $this->input->post('phone', true), 
				'subj' 	=> $this->input->post('sub', true), 
				'msg' 	=> $this->input->post('msg', true), 
			);
			if($this->m_home->contact($data)){
				$this->sendMail($data);
				redirect('thank-you','refresh');
			}else{
				$this->session->set_flashdata('error', 'Server error occured. Please try agin or <br> contact this number <a href="tel:9590779922">9590 779 922</a>');
				redirect('contact-us','refresh');
			}
		}else{
			$data['title'] = 'Contact us | Raja Housing';
			$this->load->view('pages/contact', $data);
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
	
	// site map
	public function sitemap()
	{
		$data['title'] = 'Contact us | Raja Housing';
		$data['result'] = $this->m_home->sitemap();
		$this->load->view('pages/sitemap', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */