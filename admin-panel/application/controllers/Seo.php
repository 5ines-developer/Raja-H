<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {

		/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') { $this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_seo');
    }

    /**
    *manage SEO
    *@ulr : seo/manage
    **/ 
	public function index()
	{
		$data['title']  = 'SEO - Raja housing';
		$data['result'] = $this->m_seo->getPage();
		$this->load->view('seo/list', $data);
	}

	
    /**
    *add page for seo
    *@ulr : seo/add-page
    **/
    public function edit($id='')
    {
    	$data['title']  = 'SEO - Raja housing';
    	$data['result'] = $this->m_seo->edit($id);
    	$this->load->view('seo/edit', $data);
    }

    /**
    *update seo details
    *@ulr : seo/update
    **/
    public function update($value='')
    {

       $insert = array(

       	'page' 		=> $this->input->post('page') , 
       	'title' 	=> $this->input->post('title') , 
       	'keywords' 	=> $this->input->post('keywords') , 
       	'm_desc' 	=> $this->input->post('description') ,
       	'og_id' 	=> $this->input->post('og_id') , 
       	'og_image' 	=> $this->input->post('og_image') , 
       	'og_title' 	=> $this->input->post('og_title') , 
       	'og_site' 	=> $this->input->post('og_site') , 
       	'og_url' 	=> $this->input->post('og_url') , 
       	'og_desc' 	=> $this->input->post('og_desc') ,
       	'og_type' 	=> $this->input->post('og_type') ,
       	't_card' 	=> $this->input->post('t_card') , 
       	't_site' 	=> $this->input->post('t_site') , 
       	't_image' 	=> $this->input->post('t_image') , 
       	't_image' 	=> $this->input->post('t_url') , 
       	't_url' 	=> $this->input->post('t_url') , 
       	't_title' 	=> $this->input->post('t_title') , 
       	't_desc' 	=> $this->input->post('t_desc') ,
       	'g_tag' 		=> $this->input->post('gmanager') , 
       	'g_analytics' 	=> $this->input->post('ganalytics') , 
       	'schema' 		=> $this->input->post('schema') , 
       	'id' 		=> $this->input->post('id') , 
       );


        if($this->m_seo->update($insert)){
			$this->session->set_flashdata('success', 'Seo Details updated Successfully');
			redirect('seo/edit/'.$insert['id'],'refresh');
       	}else{
			$this->session->set_flashdata('error', 'Some error occured please try again');
			redirect('seo/edit/'.$insert['id'],'refresh');
       	}
    }


    public function delete($id = null)
    {
        if($this->m_seo->delete($id)){
			$this->session->set_flashdata('success', 'Seo Details deleted Successfully');
			redirect('seo/manage','refresh');
       }else{
			$this->session->set_flashdata('error', 'Some error occured please try again');
			redirect('seo/manage','refresh');
       }
    }

}

/* End of file Seo.php */
/* Location: ./application/controllers/Seo.php */