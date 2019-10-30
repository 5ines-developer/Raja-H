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
		$page = 'home';
		$data['result'] 	= $this->m_home->bannerGet();
		$data['feature'] 	= $this->m_home->featureGet();
		$data['offer'] 		= $this->m_home->offerGet();
		$data['seo'] 		= $this->m_home->seoGet($page);
		$this->load->view('pages/index', $data);
		
	}

	public function about($value='')
	{
		$page = 'page';
		$data['seo'] 		= $this->m_home->seoGet($page);
		$this->load->view('pages/about-us', $data, FALSE);
	}

	public function contact()
	{
		$page = 'contact us';
		if($this->input->post()){
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');

			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'name' 	=> $this->input->post('name', true), 
					'email' => $this->input->post('email', true), 
					'phone' => $this->input->post('phone', true), 
					'subj' 	=> $this->input->post('sub', true), 
					'msg' 	=> $this->input->post('msg', true), 
				);

				$home = $this->input->post('home'); 

				if($this->m_home->contact($data)){
					$this->sendMail($data);
					$this->sendpara($data);
					redirect('thank-you','refresh');
				}else{
					$this->session->set_flashdata('error', 'Server error occured. Please try agin or <br> contact this number <a href="tel:9590779922">9590 779 922</a>');

					if (!empty($home)) {
						redirect(base_url(),'refresh');
					}else{
						redirect('contact-us','refresh');
					}
				}

			} else {
				$error = validation_errors();
				$this->session->set_flashdata('error', $error);
				if (!empty($home)) {
						redirect(base_url(),'refresh');
				}else{
						redirect('contact-us','refresh');
				}
			}
		}else{
			$data['seo'] 		= $this->m_home->seoGet($page);
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

	// career
	public function career()
	{
		$page = 'career';
		if($this->input->post()){
			
			
			$config = array(
				'upload_path' => "./resume/",
				'allowed_types' => 'doc|docx|pdf|DOC|DOCX|PDF',
				'overwrite' => TRUE,
				'encrypt_name' => TRUE
				
			);
			$this->load->library('upload', $config);
			if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
			$this->upload->do_upload('file');
			$path 	=  'resume/'.$this->upload->data('file_name');									
			$data = array(
				'name' 	=> $this->input->post('name', true), 
				'email' => $this->input->post('email', true), 
				'experience' => $this->input->post('experience', true), 
				'position' 	=> $this->input->post('position', true), 
				'phone' 	=> $this->input->post('phone', true), 
				'msg' 	=> $this->input->post('msg', true), 
				'file' 	=> $path, 
			);

			if($this->m_home->application($data)){
				$this->session->set_flashdata('success', 'Job Successfully submited <br> Our Hr Department Contact you soon');
				redirect('career','refresh');
			}else{
				$this->session->set_flashdata('error', 'Server error occured. Please try agin later');
				redirect('career','refresh');
			}
		}else{
			$data['jobs'] = $this->m_home->jobs();
			$data['seo'] 		= $this->m_home->seoGet($page);
			$this->load->view('pages/career', $data);
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

	public function real_estate($value='')
	{
		$data['result'] = $this->m_home->real_estate();
		$this->load->view('pages/real-estate', $data);
	}


	public function refer_bonus($value='')
	{

		if($this->input->post()){
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric');
			$this->form_validation->set_rules('fname', 'Friend Name', 'trim|required');
			$this->form_validation->set_rules('fphone', 'Friend Number', 'trim|required|numeric');
			$this->form_validation->set_rules('femail', 'Friend Email', 'trim|required|valid_email');
			if ($this->form_validation->run() == TRUE) {
				$data = array(
					'name' 		=> $this->input->post('name', true), 
					'email' 	=> $this->input->post('email', true), 
					'phone' 	=> $this->input->post('phone', true), 
					'gender' 	=> $this->input->post('gender', true), 
					'friend_name' 	=> $this->input->post('fname', true), 
					'friend_phone' 	=> $this->input->post('fphone', true), 
					'friend_email' 	=> $this->input->post('femail', true), 
					'friend_city' 	=> $this->input->post('fcity', true), 
				);
				if($this->m_home->insertRefer($data)){
					$this->sendRefer($data);
					$this->session->set_flashdata('success', 'Your request Successfully submited <br> Our team will Contact you soon');
					redirect('thank-you','refresh');
				}else{
					$this->session->set_flashdata('error', 'Server error occured. Please try agin or <br> contact this number <a href="tel:9590779922">9590 779 922</a>');
				}
			} else {
				$error = validation_errors();
				$this->session->set_flashdata('error', $error);
				redirect('referral-bonus','refresh');
			}
		}else{
			$this->load->view('pages/referal-bonus');
		}
	}

	function sendRefer($data)
    {
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        $to = $this->config->item('to');
        $data['data'] = $data;
        $msg = $this->load->view('email/refer-bonus', $data, true);
		$this->email->set_newline("\r\n");
		$this->email->from($from , 'Rajahousing');
        $this->email->to($to);
        $this->email->subject('Friend Referrals'); 
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

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */