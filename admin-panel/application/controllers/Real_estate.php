<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_estate extends CI_Controller {

		/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_real');
    }

	public function index()
	{
		$data['title']  = 'Real Estate Updates - Raja housing';
        $data['result'] = $this->m_real->realGet(); 
        $this->load->view('real/add', $data);
	}


	public function insert($value='')
	{

		$this->form_validation->set_rules('detail', 'Content', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$detail      = $this->input->post('detail');
			$this->load->library('upload');
	        $this->load->library('image_lib');
	        $files = $_FILES;
	        if (file_exists($_FILES['image']['tmp_name'])) {
	        $config['upload_path'] = '../real/';
	        $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif';
	        $config['max_width'] = 0;
	        $config['encrypt_name'] = true;
	        $this->load->library('upload');
	        $this->upload->initialize($config);
	        if (!is_dir($config['upload_path'])) {
	        mkdir($config['upload_path'], 0777, true);
	        }
	        if (!$this->upload->do_upload('image')) {
	        $error = array('error' => $this->upload->display_errors());
	        $this->session->set_flashdata('error', $this->upload->display_errors());
	        redirect('real-estate-updates','refresh');
	        } else {
	        $upload_data = $this->upload->data();
	        $file_name  = $upload_data['file_name'];
	        $banner    = 'real/'.$file_name;
	        }
	        }

	        $insert = array('content' => $detail);

	        if (file_exists($_FILES['image']['tmp_name'])) {
            	$insert['image'] = $banner;
        	}

	        $result = $this->m_real->insert($insert);
	       if($result){
				$this->session->set_flashdata('success', 'Real estate updates added Successfully');
				redirect('real-estate-updates','refresh');
	       }else{
				$this->session->set_flashdata('error', 'Some error occured please try again');
				redirect('real-estate-updates','refresh');
	       }
		} else {
			$error = validation_errors();
			$this->session->set_flashdata('error', $error);
			redirect('real-estate-updates','refresh');
		}

		
		

	}

}

/* End of file Real-estate.php */
/* Location: ./application/controllers/Real-estate.php */