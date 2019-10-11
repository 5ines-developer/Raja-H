<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_banner');
    }

    //manage banner
    public function index($id = null)
    {
        $data['title']  = 'Banner - Raja housing';
        $data['result'] = $this->m_banner->bannerGet(); 
        $this->load->view('banner/manage-banner', $data);  
    }

    //add banner
    public function add($var = null)
    {
        $data['title']  = 'Banner - Raja housing';
        $this->load->view('banner/add-banner', $data, FALSE);
        
    }


    public function insert($var = null)
    {
         $data       = $this->input->post('image');
        $banner_id  = $this->input->post('banner_id');
        $alt      = $this->input->post('alt');
        $subtitle      = $this->input->post('subtitle');
        $fimagecheck      = $this->input->post('fimagecheck');
        

        if (!empty($data)) {
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $imageName = time().'.png';

            file_put_contents('../banner/'.$imageName, $data);
            
        }

        $insert = array(
			'uniq' 		=>	$banner_id,
			'alt'		=>  $alt, 
            'status'    =>  '1',
			'subtitle'    =>  $subtitle,
            );

        if (!empty($fimagecheck)) {
            $insert['image'] = 'banner/'.$imageName;
        }
       
        $result = $this->m_banner->insert($insert);
       if($result){
			$this->session->set_flashdata('success', 'Banner added Successfully');
			redirect('banner/manage','refresh');
       }else{
			$this->session->set_flashdata('error', 'Some error occured please try again');
			redirect('banner/add','refresh');
       }
    }


    public function delete($id = null)
    {
        if($this->m_banner->delete($id)){
			$this->session->set_flashdata('success', 'Banner deleted Successfully');
			redirect('banner/manage','refresh');
       }else{
			$this->session->set_flashdata('error', 'Some error occured please try again');
			redirect('banner/manage','refresh');
       }
    }

    public function edit($id = '')
    {
        $data['result'] = $this->m_banner->edit($id);
        $data['title']  = 'Banner - Raja housing';
        $this->load->view('banner/edit-banner', $data);         
    }


    // enquiry
    public function enquiry($id)
    {
        $data['title']  = 'Enquiry - Raja housing';
        if(!empty($id)){
            $data['result'] = $this->m_banner->enquiry($id);
            $this->load->view('other/enquiry-detail', $data); 
        }else{
            $data['result'] = $this->m_banner->enquiry();
            $this->load->view('other/enquiry-list', $data); 
        }
    }




}