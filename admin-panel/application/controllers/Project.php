<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {


	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('ra_id') == '') {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_project');
        $this->load->library('form_validation');
        
    }

    //load view project add
	public function index()
	{
		$data['title']      = 'Project | Raja Housing';
        $data['parent']   = $this->m_project->category();
        $data['sub']        = $this->m_project->subcategory();
        $data['super']      = $this->m_project->supcategory();
		$this->load->view('project/list', $data);
		
    }
    
    //load view page to update project
    public function update($id = '',$type='')
    {
        $data['title']      = 'Project | Raja Housing';   
        $data['result']     = $this->m_project->projectGet($id,str_replace("-"," ",$type)); 

        if (!empty( $data['result'])) {
            $data['floor']      = $this->m_project->floorimage($data['result']->id); 
            $data['amenity']    = $this->m_project->amenityGet($data['result']->id); 
            $data['gallery']    = $this->m_project->galleryGet($data['result']->id); 
            $data['location']   = $this->m_project->locationGet($data['result']->id); 
        }
        
        $this->load->view('project/add', $data, FALSE);    
    }

    //insert project detail
    public function insert_detail($id = null)
    {
        $id     = $this->input->post('id');
        $cattype = $this->input->post('cattype');

        $this->form_validation->set_rules('detail', 'Project Details', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $error = validation_errors();
            $this->session->set_flashdata('error', $error);            
            redirect('project/update/'.$id.'/'.$cattype,'refresh');            
        } else {
            $detail     = $this->input->post('detail');
            $t_type     = $this->input->post('t_type');
            $type       = $this->input->post('prtype');
            $Pdate      = $this->input->post('Pdate');
            $cost       = $this->input->post('cost');
            $c_type     = $this->input->post('c_type');
            $f_project  = $this->input->post('f_project');
            $city       = $this->input->post('city');

                    $this->load->library('upload');
                    $this->load->library('image_lib');
                    $files = $_FILES;
                    $filesCount = count($_FILES['bimage']['name']);
                    if (file_exists($_FILES['bimage']['tmp_name'])) {
                        $config['upload_path'] = '../banner-image/';
                        $config['allowed_types'] = 'jpg|png|jpeg|PNG|JPEG|JPG|gif';
                        $config['max_width'] = 0;
                        $config['encrypt_name'] = true;
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        if (!is_dir($config['upload_path'])) {
                            mkdir($config['upload_path'], 0777, true);
                        }

                        if (!$this->upload->do_upload('bimage')) {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('error', $this->upload->display_errors());
                            redirect('project/update/'.$id.'/'.$cattype,'refresh');
                        } else {
                            $upload_data = $this->upload->data();
                            $file_name  = $upload_data['file_name'];
                            $banner    = 'banner-image/'.$file_name;

                        }
                    }


                    $files = $_FILES;
                    $filesCount = count($_FILES['brochure']['name']);
                    if (file_exists($_FILES['brochure']['tmp_name'])) {
                        $config['upload_path'] = '../brochure/';
                        $config['allowed_types'] = 'PDF|pdf';
                        $config['max_width'] = 0;
                        $config['encrypt_name'] = true;
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        if (!is_dir($config['upload_path'])) {
                            mkdir($config['upload_path'], 0777, true);
                        }

                        if (!$this->upload->do_upload('brochure')) {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('error', $this->upload->display_errors());
                            redirect('project/update/'.$id.'/'.$cattype,'refresh');
                        } else {
                            $upload_data = $this->upload->data();
                            $file_name  = $upload_data['file_name'];
                            $pdf    = 'brochure/'.$file_name;

                        }
                    }




            $insert = array(
                'detail' => $detail,
                'cat_type' => str_replace("-"," ",$cattype),
                'projectid' => $id,
                'added_by'=>$this->session->userdata('ra_id'),
                'transaction_type' => $t_type,
                'project_type' => $type,
                'poses_date' => $Pdate,
                'cost' => $cost,
                'content_type'=>$c_type,
                'featured_project' => $f_project,
                'city' =>  $city

            );


            if (!empty($banner)) {
                $insert['banner'] = $banner;
            }
            if (!empty($pdf)) {
                $insert['pdf'] = $pdf;
            }


            $output = $this->m_project->insert_detail($insert);
            if (!empty($output)) {
                $this->session->set_flashdata('success', 'Project detail added successfully');            
                redirect('project/update/'.$id.'/'.$cattype,'refresh');       
            }else{
                $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                redirect('project/update/'.$id.'/'.$cattype,'refresh');    
            }
        }
        
    }


        //insert project detail
        public function insert_area($id = null)
        {
            $id     = $this->input->post('id');
            $cattype = $this->input->post('cattype');
            $this->form_validation->set_rules('area', 'Area Statement', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                $error = validation_errors();
                $this->session->set_flashdata('error', $error);            
                redirect('project/update/'.$id.'/'.$cattype,'refresh');            
            } else {
                $area = $this->input->post('area');
                $insert = array(
                    'areastatement' => $area,
                    'cat_type'      => str_replace("-"," ",$cattype),
                    'projectid'     => $id,
                    'added_by'      => $this->session->userdata('ra_id')
                );
    
                $output = $this->m_project->insert_area($insert);
                if (!empty($output)) {
                    $this->session->set_flashdata('success', 'Area Statement added successfully');            
                    redirect('project/update/'.$id.'/'.$cattype,'refresh');       
                }else{
                    $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                    redirect('project/update/'.$id.'/'.$cattype,'refresh');    
                }
            }            
        }

                //insert project detail
                public function insert_master($id = null)
                {
                    $id     = $this->input->post('id');
                    $cattype = $this->input->post('cattype');                   
                    $materplan   = $this->input->post('masterplans');
                    $this->load->library('upload');
                    $this->load->library('image_lib');
                    $files = $_FILES;
                    $filesCount = count($_FILES['mimage']['name']);
                    if (file_exists($_FILES['mimage']['tmp_name'])) {
                        $config['upload_path'] = '../master-plan/';
                        $config['allowed_types'] = 'jpg|png|jpeg|gif';
                        $config['max_width'] = 0;
                        $config['encrypt_name'] = true;
                        $this->load->library('upload');
                        $this->upload->initialize($config);
                        if (!is_dir($config['upload_path'])) {
                            mkdir($config['upload_path'], 0777, true);
                        }

                        if (!$this->upload->do_upload('mimage')) {
                            $error = array('error' => $this->upload->display_errors());
                            $this->session->set_flashdata('error', $this->upload->display_errors());
                            redirect('project/update/'.$id.'/'.$cattype,'refresh');
                        } else {
                            $upload_data = $this->upload->data();
                            $file_name  = $upload_data['file_name'];
                            $imgpath    = 'master-plan/'.$file_name;

                        }
                    }

                        $insert = array(
                            'materplan'     => $materplan,
                            'cat_type'      => str_replace("-"," ",$cattype),
                            'projectid'     => $id,
                            'added_by'      => $this->session->userdata('ra_id')
                        );

                        if (!empty($imgpath)) {
                            $insert['masterimage'] = $imgpath;
                        }

                        $output = $this->m_project->insert_master($insert);
                        if (!empty($output)) {
                            $this->session->set_flashdata('success', 'Master plan added successfully');            
                            redirect('project/update/'.$id.'/'.$cattype,'refresh');       
                        }else{
                            $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                            redirect('project/update/'.$id.'/'.$cattype,'refresh');    
                        }
                }

                                //insert project detail
        public function insert_floor($id = null)
        {
            $id     = $this->input->post('id');
            $cattype = $this->input->post('cattype');                   
            $floorplans   = $this->input->post('floorplans');
            $filesCount = count($_FILES['images']['name']);
            $insert = array(
                'floorplan'     => $floorplans,
                'cat_type'      => str_replace("-"," ",$cattype),
                'projectid'     => $id,
                'added_by'      => $this->session->userdata('ra_id')
            );            
            $output = $this->m_project->insert_floor($insert);
            $this->load->library('upload');
            $this->load->library('image_lib');    
            $files = $_FILES;
            $id = $this->input->post('id');
            $filesCount = count($_FILES['images']['name']);
            if (!empty($filesCount)) {
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['images']['name']     = $files['images']['name'][$i];
                    $_FILES['images']['type']     = $files['images']['type'][$i];
                    $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                    $_FILES['images']['error']    = $files['images']['error'][$i];
                    $_FILES['images']['size']     = $files['images']['size'][$i];                    
                    $config['upload_path']   = '../floor-plan/';
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';
                    $config['max_width']     = 0;
                    $config['encrypt_name']  = TRUE;
                    $this->load->library('upload');
                    $this->upload->initialize($config);
                    if (!is_dir($config['upload_path']))mkdir($config['upload_path'], 0777, TRUE);
                    if (!$this->upload->do_upload('images')) {
                        $error =  $this->upload->display_errors();
                         $this->session->set_flashdata('error', $this->upload->display_errors());
                         redirect('project/update/'.$id.'/'.$cattype,'refresh'); 
                     } else {

                        $upload_data = $this->upload->data();
                        $image[] = $upload_data['file_name'];                        
                        $width  = 700;
                        $height = 450;        
                        $file_name = $upload_data['file_name'];
                        $imgpath = 'floor-plan/'.$file_name;
                        $thumbnail = $this->thumbnail($upload_data, $width, $height);
                        $insert1 = array (
                            'fimage'    => $imgpath,
                            'fthumb'    => 'floor-plan/'.$thumbnail, 
                            'fprojectid' => $output,
                        );
                        $output1 = $this->m_project->insert_floorimage($insert1);
                     }
                }
            }   
            
            
            if (!empty($output) && !empty($output1)) {
                $this->session->set_flashdata('success', 'Floor plan added successfully');            
                redirect('project/update/'.$id.'/'.$cattype,'refresh');       
            }else{
                $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                redirect('project/update/'.$id.'/'.$cattype,'refresh');    
            }

        }


        public function thumbnail($upload_data = "", $width = "", $height = "")
        {
            $this->load->library('image_lib');
            $config_manip = array(
                'image_library'  => 'gd2',
                'source_image'   => $upload_data['full_path'],
                'maintain_ratio' => FALSE,
                'create_thumb'   => TRUE,
                'width'          =>  $width,
                'height'         => $height
            );            
            $this->image_lib->initialize($config_manip);
            if (!$this->image_lib->resize()) {
                echo $this->image_lib->display_errors();
            }
            $this->image_lib->clear();
            $file_name[]  = $upload_data['file_name'];
            $file_tumb    = $upload_data['raw_name'];
            $file_tumb_ex = $upload_data['file_ext'];
            $thum_file    = $file_tumb . '_thumb' . $file_tumb_ex;
            return $thum_file;   
        }
       //insert project detail
       public function insert_amenity($id = null)
       {
           $id      = $this->input->post('id');
           $cattype = $this->input->post('cattype');
           $amenity = $this->input->post('i_title');
           $pid     = $this->input->post('pid');

          $delete =  $this->m_project->delete_amenity($pid);

           for ($i=0; $i < count($amenity) ; $i++) { 
                if (!empty($amenity[$i])) {
                    $insert = array('projectid' => $pid, 'amenity' => $amenity[$i]);
                    $output[] = $this->m_project->insert_amenity($insert);
                } 
           }

               if (!empty($output[0])) {
                   $this->session->set_flashdata('success', 'Amenities added successfully');            
                   redirect('project/update/'.$id.'/'.$cattype,'refresh');       
               }else{
                   $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                   redirect('project/update/'.$id.'/'.$cattype,'refresh');    
               }
       }


       public function insert_gallery($id = null)
       {
           $id     = $this->input->post('id');
           $cattype = $this->input->post('cattype');                   
           $pid   = $this->input->post('pid');
           
           
           $this->load->library('upload');
           $this->load->library('image_lib');    
           $files = $_FILES;
           $id = $this->input->post('id');
           $filesCount = count($_FILES['images']['name']);
           if (!empty($filesCount)) {
               for ($i = 0; $i < $filesCount; $i++) {
                   $_FILES['images']['name']     = $files['images']['name'][$i];
                   $_FILES['images']['type']     = $files['images']['type'][$i];
                   $_FILES['images']['tmp_name'] = $files['images']['tmp_name'][$i];
                   $_FILES['images']['error']    = $files['images']['error'][$i];
                   $_FILES['images']['size']     = $files['images']['size'][$i];                    
                   $config['upload_path']   = '../gallery/';
                   $config['allowed_types'] = 'jpg|png|jpeg|gif';
                   $config['max_width']     = 0;
                   $config['encrypt_name']  = TRUE;
                   $this->load->library('upload');
                   $this->upload->initialize($config);
                   if (!is_dir($config['upload_path']))mkdir($config['upload_path'], 0777, TRUE);
                   if (!$this->upload->do_upload('images')) {
                       $error =  $this->upload->display_errors();
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('project/update/'.$id.'/'.$cattype,'refresh'); 
                    } else {

                       $upload_data = $this->upload->data();
                       $image[] = $upload_data['file_name'];                        
                       $width  = 700;
                       $height = 450;        
                       $file_name = $upload_data['file_name'];
                       $imgpath = 'gallery/'.$file_name;
                       $thumbnail = $this->thumbnail($upload_data, $width, $height);
                       $insert1 = array (
                           'image'    => $imgpath,
                           'thumb'    => 'gallery/'.$thumbnail, 
                           'projectid' => $pid,
                       );
                       $output = $this->m_project->insert_gallery($insert1);
                    }
               }
           }
           
           if (!empty($output[0])) {
            $this->session->set_flashdata('success', 'Gallery added successfully');            
            redirect('project/update/'.$id.'/'.$cattype,'refresh');       
            }else{
                $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                redirect('project/update/'.$id.'/'.$cattype,'refresh');    
            }
        } 


        public function insert_location($id = null)
        {
            $id     = $this->input->post('id');
            $cattype = $this->input->post('cattype');                   
            $location   = $this->input->post('location');

            $insert = array(
                'location'     => $location,
                'cat_type'      => str_replace("-"," ",$cattype),
                'projectid'     => $id,
                'added_by'      => $this->session->userdata('ra_id')
            );            
            $output = $this->m_project->insert_location($insert);

            $nearby = $this->input->post('i_title1');
            $pid     = $this->input->post('pid');

 
           $delete =  $this->m_project->delete_nearby($pid);
 
            for ($i=0; $i < count($nearby) ; $i++) { 
                 if (!empty($nearby[$i])) {
                     $insert = array('projectid' => $pid, 'nearby' => $nearby[$i]);
                     $output = $this->m_project->insert_nearby($insert);
                 } 
            }

            if (!empty($output)) {
                $this->session->set_flashdata('success', 'Gallery added successfully');            
                redirect('project/update/'.$id.'/'.$cattype,'refresh');       
                }else{
                    $this->session->set_flashdata('error', 'Something went wrong please try again later!');           
                    redirect('project/update/'.$id.'/'.$cattype,'refresh');    
                }


        }


        public function gallery_delete($galId='',$id = '',$cattype='')
        {

            // send to model
            if($this->m_project->gallery_delete($galId)){
                $this->session->set_flashdata('success', 'Project Gallery Deleted Successfully');
                redirect('project/update/'.$id.'/'.$cattype,'refresh');  // if you are redirect to list of the data add controller name here
            }else{
                $this->session->set_flashdata('error', 'Something went to wrong. Please try again later!');
                redirect('project/update/'.$id.'/'.$cattype,'refresh');  // if you are redirect to list of the data add controller name here
            }
        }

        public function floor_delete($fId='',$id = '',$cattype='')
        {

            // send to model
            if($this->m_project->floor_delete($fId)){
                $this->session->set_flashdata('success', 'Floor Plan Deleted Successfully');
                redirect('project/update/'.$id.'/'.$cattype,'refresh');  // if you are redirect to list of the data add controller name here
            }else{
                $this->session->set_flashdata('error', 'Something went to wrong. Please try again later!');
                redirect('project/update/'.$id.'/'.$cattype,'refresh');  // if you are redirect to list of the data add controller name here
            }
        }


        public function am_delete($var = null)
        { 
           $aid = $this->input->get('aid');
           $output = $this->m_project->am_delete($aid);
           echo $output;           
        }

        public function near_delete($var = null)
        { 
           $id = $this->input->get('id');
           $output = $this->m_project->near_delete($id);
           echo $output;           
        }



        public function delete($id = " ",$cat=" ")
        {
            if($this->m_project->delete_project($id,str_replace("-"," ",$cat))){
                $this->session->set_flashdata('success', 'Project Deleted Successfully');
                redirect('project/manage','refresh');  // if you are redirect to list of the data add controller name here
            }else{
                $this->session->set_flashdata('error', 'Something went to wrong. Please try again later!');
                redirect('project/manage','refresh');  // if you are redirect to list of the data add controller name here
            }            
        }
    

}

/* End of file Project.php */
/* Location: ./application/controllers/Project.php */