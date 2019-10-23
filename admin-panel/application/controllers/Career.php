<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_career');
    }


    public function index()
    {
        $data['title'] = 'Jobs List';
        $data['jobs'] = $this->m_career->jobList();
        $this->load->view('career/list', $data);
    }

    public function add($var = null)
    {

        $data['title'] = 'Jobs Add';
        if(!empty($this->input->post())){
            $data = array(
                'title' => $this->input->post('title', true), 
                'openings' => $this->input->post('openings', true), 
                'qualification' => $this->input->post('qualification', true), 
                'experience' => $this->input->post('experience', true), 
                'language' => $this->input->post('language', true), 
                'location' => $this->input->post('location', true), 
                'skils' => $this->input->post('skills', true), 
                'responsiblity' => $this->input->post('responsiblity', true), 
                'key_role' => $this->input->post('role', true), 
                'des' => $this->input->post('desc', true), 
                'creaderby' => $this->session->userdata('ra_id')
            );

            if (!empty($_FILES['cimage']['name'])) {
                $data['image'] = $carimage;
            }



            if($this->m_career->addJob($data)){
                $this->session->set_flashdata('success', 'Successfully added');
                redirect('career','refresh');
            }else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('career','refresh');
            }
        }else{
            $this->load->view('career/add', $data);
        }
    }

    // edit
    public function edit($id = null)
    {
        $data['title'] = 'Edit Jobs';
        if(!empty($this->input->post())){
            $data = array(
                'title' => $this->input->post('title', true), 
                'openings' => $this->input->post('openings', true), 
                'qualification' => $this->input->post('qualification', true), 
                'experience' => $this->input->post('experience', true), 
                'language' => $this->input->post('language', true), 
                'location' => $this->input->post('location', true), 
                'skils' => $this->input->post('skills', true), 
                'responsiblity' => $this->input->post('responsiblity', true), 
                'key_role' => $this->input->post('role', true), 
                'des' => $this->input->post('desc', true), 
                'creaderby' => $this->session->userdata('sha_id')
            );

             if (!empty($_FILES['cimage']['name'])) {
                $data['image'] = $carimage;
            }

            if($this->m_career->editJob($data, $id)){
                $this->session->set_flashdata('success', 'Successfully Updated');
                redirect('career/edit/'.$id,'refresh');
            }else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('career/edit/'.$id,'refresh');
            }


        }else{
            $data['jobs'] = $this->m_career->jobGet($id);
            $this->load->view('career/edit', $data);
        }
    }


    // status change
    public function status($id = null)
    {
        if($this->input->get('q') == 'close'){
            $data  = array('status' => 2);
        }else{
            $data  = array('status' => 1);
        }
        if($this->m_career->editJob($data, $id)){
            $this->session->set_flashdata('success', 'Successfully Updated');
            redirect('career/edit/'.$id,'refresh');
        }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('career/edit/'.$id,'refresh');
        }
    }


    // delete career
    public function delete($id = null)
    {
        
        if($this->m_career->delete($id)){
            $this->session->set_flashdata('success', 'Successfully Deleted');
            redirect('career/','refresh');
        }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('career/','refresh');
        }
    }


    // applications
    public function applications()
    {   
        $data['title'] = 'applications';
        $data['application'] = $this->m_career->applications();
        $this->load->view('career/applications', $data);
    }


    public function image($id='')
    {
        $data['result'] = $this->m_career->imageGet($id);
        $this->load->view('career/image-add', $data);
    }

    public function imageAdd($id='')
    {
        $data['title'] = 'Jobs Add';
        
            $this->load->library('upload');
            $this->load->library('image_lib');
            $files = $_FILES;
            if (file_exists($_FILES['cimage']['tmp_name'])) {
            $config['upload_path'] = '../career-image/';
            $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif';
            $config['max_width'] = 0;
            $config['encrypt_name'] = true;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0777, true);
            }
                if (!$this->upload->do_upload('cimage')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('career/image','refresh');
                } else {
                    $upload_data = $this->upload->data();
                    $file_name  = $upload_data['file_name'];
                    $carimage    = 'career-image/'.$file_name;
                }
            }

            $insert = array('image' => $carimage,'status' => '1' );


            if($this->m_career->imageAdd($insert)){
            $this->session->set_flashdata('success', 'Successfully Deleted');
            redirect('career/image','refresh');
            }else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('career/image','refresh');
            }
        
    }


    public function image_activate($value='')
    {
        $id = $this->input->get('id');
        $status = $this->input->get('s');
        if($this->m_career->activate($id,$status)){
            $this->session->set_flashdata('success', 'Offer updated Successfully');
            redirect('career/image','refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('career/image','refresh');
       }
    }

}

/* End of file Career.php */
