<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_offer');
    }

    //manage offer
	public function index()
	{
		$data['title']  = 'Special offers - Raja Housing';
        $data['result'] = $this->m_offer->offerGet();
		$this->load->view('offer/manage', $data);
	}

    public function add($value='')
    {
        $data['title']  = 'Special offers - Raja Housing';
        $this->load->view('offer/add', $data);
    }


    public function insert($var = null)
    {
        $data           = $this->input->post('image');
        $link           = $this->input->post('link');
        $subtitle       = $this->input->post('subtitle');
        $fimagecheck    = $this->input->post('fimagecheck');
        $edit           = $this->input->post('edit');
        $id             = $this->input->post('id');
        

        if (!empty($data)) {
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $imageName = time().'.gif';

            file_put_contents('../offer/'.$imageName, $data);
            
        }

        $insert = array(
            'link'      =>  $link,
            'status'    =>  '1',
            'added_by'    =>  $this->session->userdata('ra_id'),
            );

        if (!empty($fimagecheck)) {
            $insert['image'] = 'offer/'.$imageName;
        }
       
        $result = $this->m_offer->insert($insert);
       if($result){
            $this->session->set_flashdata('success', 'Offer added Successfully');
            redirect('offer/manage','refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');

            if (!empty($edit)) {
               redirect('offer/manage','refresh');
            }else{
                redirect('offer/edit/'.$id ,'refresh');
            }
       }
    }

    public function delete($id = null)
    {
        if($this->m_offer->delete($id)){
            $this->session->set_flashdata('success', 'Offer deleted Successfully');
            redirect('offer/manage','refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('offer/manage','refresh');
       }
    }


    public function edit($id = '')
    {
        $data['result'] = $this->m_offer->edit($id);
        $data['title']  = 'Special offers - Raja Housing';
        $this->load->view('offer/edit', $data);         
    }


    public function activate($value='')
    {
        $id = $this->input->get('id');
        $status = $this->input->get('s');
        if($this->m_offer->activate($id,$status)){
            $this->session->set_flashdata('success', 'Offer updated Successfully');
            redirect('offer/edit/'.$id ,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('offer/edit/'.$id ,'refresh');
       }
    }

}

/* End of file Offer.php */
/* Location: ./application/controllers/Offer.php */