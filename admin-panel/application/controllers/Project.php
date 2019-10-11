<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {


	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_project');
    }

    //load view project add
	public function index()
	{
		$data['title'] = 'Project | Raja Housing';
		// $data['result'] = $this->m_project->projectGet();
		$this->load->view('project/list', $data);
		
	}

}

/* End of file Project.php */
/* Location: ./application/controllers/Project.php */