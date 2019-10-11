<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_category');
    }

    //manage banner
    public function index($id = null)
    {
        $data['title']  = 'Category - Raja housing';
        $data['result'] = $this->m_category->categoryGet(); 
        $this->load->view('category/manage-category', $data);  
    }



    //add banner
    public function add($var = null)
    {
        $data['title']  = 'Category - Raja housing';
        $this->load->view('category/add-category', $data, FALSE);
        
    }


    public function insert($var = null)
    {
        $name       = $this->input->post('name');
        $uniq       = $this->input->post('uniq');

        $insert = array(
            'uniq'      =>  $uniq,
            'category'  =>  $name,
            'status'    =>  '1',
            'added_by'  =>  $this->session->userdata('ra_id'),
            );


        $result = $this->m_category->insert($insert);
       if($result){
            $this->session->set_flashdata('success', 'category added Successfully');
            redirect('category/manage','refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/add','refresh');
       }
    }


    public function delete($id = null)
    {
        if($this->m_category->delete($id)){
            $this->session->set_flashdata('success', 'category deleted Successfully');
            redirect('category/manage','refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/manage','refresh');
       }
    }

    public function edit($id = '')
    {
        $data['result'] = $this->m_category->edit($id);
        $data['title']  = 'Category - Raja housing';
        $this->load->view('category/edit-category', $data);         
    }

    public function update($value='')
    {

            $name   =   $this->input->post('name');
            $id   =   $this->input->post('id');
            
            $update = array(
                'category'      =>  $name,
            );

            $result = $this->m_category->update($update,$id);
            if($result){
                $this->session->set_flashdata('success', 'Category updated Successfully');
                redirect('category/edit/'.$id);
            }else{
                $this->session->set_flashdata('error', 'Some error occured please try again');
                redirect('category/edit/'.$id);
            }
    }

    public function view($id='')
    {
        $data['result'] = $this->m_category->view($id);
        $data['title']  = 'Category - Raja housing';
        $this->load->view('category/view-category', $data); 
    }


    // sub category///

    // add sub category load view page
    public function addSub($value='')
    {
        $data['title']  = 'Category - Raja housing';
        $this->load->view('sub-category/add-subcategory', $data, FALSE);
    }

    // insert sub category
    public function insertSub($var = null)
    {
        $name       = $this->input->post('name');
        $uniq       = $this->input->post('uniq');
        $category   = $this->input->post('category');
        $cat        = $this->input->post('cat');

        $insert = array(
            'uniq'      =>  $uniq,
            'subcategory'  =>  $name,
            'category'  =>  $category,
            'added_by'  =>  $this->session->userdata('ra_id'),
            );

        $result = $this->m_category->insertSub($insert);
       if($result){
            $this->session->set_flashdata('success', 'Sub category added Successfully');
            redirect('category/view/'.$category.'/'.$cat,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/sub-add/'.$category.'/'.$cat,'refresh');
       }
    }

    public function editSub($id = '')
    {
        $data['result'] = $this->m_category->editSub($id);
        $data['title']  = 'Category - Raja housing';
        $this->load->view('sub-category/edit-subcategory', $data);         
    }


    public function updateSub($id='')
    {
        $name   = $this->input->post('name');
        $id     = $this->input->post('id');
        $category     = $this->input->post('category');
        $cat     = $this->input->post('cat');
        $result = $this->m_category->updateSub($name,$id);
       if($result){
            $this->session->set_flashdata('success', 'Sub category updated Successfully');
            redirect('category/sub-edit/'.$id.'/'.$category.'/'.$cat,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/sub-edit/'.$id.'/'.$category.'/'.$cat,'refresh');
       }
        
    }

    public function deleteSub($catid='',$id = null,$cat=null)
    {

        if($this->m_category->subDelete($id)){
            $this->session->set_flashdata('success', 'Sub category deleted Successfully');
            redirect('category/view/'.$catid.'/'.$cat,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/view/'.$catid.'/'.$cat,'refresh');
       }
    }



    //super category
    public function addSuper($id='')
    {
        $data['title']  = 'Category - Raja housing';
        $this->load->view('sup-category/add-supercategory', $data, FALSE);
    }

    public function insertSup($var = null)
    {
        $name       = $this->input->post('name');
        $uniq       = $this->input->post('uniq');
        $subcategory   = $this->input->post('subcategory');
        $cat        = $this->input->post('cat');
        $subcat     = $this->input->post('subcat');

        $insert = array(
            'uniq'      =>  $uniq,
            'supercategory'  =>  $name,
            'subcategory'  =>  $subcategory,
            'added_by'  =>  $this->session->userdata('ra_id'),
            );


        $result = $this->m_category->insertSup($insert);
       if($result){
            $this->session->set_flashdata('success', 'Sub category added Successfully');
            redirect('category/super-view/'.$subcategory.'/'.$cat.'/'.$subcat,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/super-add/'.$subcategory.'/'.$cat.'/'.$subcat,'refresh');
       }
    }


    public function superview($id='')
    {
        $data['result'] = $this->m_category->superview($id);
        $data['title']  = 'Category - Raja housing';
        $this->load->view('sup-category/view-super', $data); 
    }

    public function editSup($id = '')
    {
        $data['result'] = $this->m_category->editSup($id);
        $data['title']  = 'Category - Raja housing';
        $this->load->view('sup-category/edit-supercategory', $data);         
    }

    public function updateSup($id='')
    {
        $name   = $this->input->post('name');
        $id     = $this->input->post('id');
        
        $result = $this->m_category->updateSup($name,$id);
       if($result){
            $this->session->set_flashdata('success', 'Super category updated Successfully');
            redirect('category/sup-edit/'.$id,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/sup-edit/'.$id,'refresh');
       }
        
    }


    public function deleteSup($subid='',$id = null,$sub=null,$sup=null)
    {

        if($this->m_category->supDelete($id)){
            $this->session->set_flashdata('success', 'Super category deleted Successfully');
            redirect('category/super-view/'.$subid.'/'.$sub.'/'.$sup,'refresh');
       }else{
            $this->session->set_flashdata('error', 'Some error occured please try again');
            redirect('category/super-view/'.$subid.'/'.$sub.'/'.$sup,'refresh');
       }
    }



}