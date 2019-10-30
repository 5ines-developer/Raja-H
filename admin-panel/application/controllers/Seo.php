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


    public function seoDefault($var = null)
    {
        $data['title'] = 'SEO | rajahousing';
        if (!empty($this->input->post())) {
            $insert = array(
                'g_tag' 		=> $this->input->post('gmanager') , 
                'g_analytics' 	=> $this->input->post('ganalytics') , 
                'schema' 		=> $this->input->post('schema') , 
            );
            if($this->m_seo->defaultUpdate($insert)){
                $this->session->set_flashdata('success', 'Seo Details updated Successfully');
                redirect('seo/seoDefault','refresh');
               }else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('seo/seoDefault','refresh');
               }
        }else{
            $data['result'] = $this->m_seo->getDseo();            
            $this->load->view('seo/default', $data, FALSE);      
        }
        
    }

}

/* End of file Seo.php */
/* Location: ./application/controllers/Seo.php */