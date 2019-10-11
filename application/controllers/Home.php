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

	public function detail($value='')
	{
		$this->load->view('property-detail');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */