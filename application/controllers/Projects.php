<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_project');
    }
    
    //load projects
    public function index($name="")
    { 
        $id = $this->input->get('q');
        $category = $this->input->get('c'); 
        $name = str_replace("-"," ",$name);
        $category = str_replace("-"," ",$category);
        $output = $this->m_project->projectGet($id,$category,$name);
        foreach ($output as $key => $value) {

        }
        $data['result'] = $output;        
        $this->load->view('projects/property-detail', $data, FALSE);
  
    }

}

/* End of file Controllername.php */
