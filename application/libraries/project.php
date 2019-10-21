<?php





defined('BASEPATH') OR exit('No direct script access allowed');



class project

{

    protected $ci;



    public function __construct()

    {

        $this->ci =& get_instance();

        $this->ci->load->model('m_project');

        

    }



    public function projects()

    {

        return  $this->ci->m_project->projectlist();

        

    }

    public function featured()
    {
        return  $this->ci->m_project->featureGet();
    }



   





}



/* End of file LibraryName.php */

