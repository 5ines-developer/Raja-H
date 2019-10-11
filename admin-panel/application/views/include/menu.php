<?php   $this->ci =& get_instance(); ?>
 <div class="col l3 m12 s12">

   <div class="side-bar white z-depth-1">
      <ul class="li-list ">
        <li class="<?php echo $this->uri->segment(1) == 'dashboard'?'active':''?>"> <a href="<?php echo base_url('dashboard') ?>"><i class="fab fa-delicious li-icon"></i>Dashboard</a></li>
        <li class="<?php echo $this->uri->segment(1) == 'banner'?'active':'' ?>"><a href="<?php echo base_url('banner/manage') ?>"><i class="far fa-image li-icon"></i>Banner</a></li>
        <?php if ($this->session->userdata('ra_type') == '1') { ?>
            <li class="<?php echo $this->uri->segment(1) == 'adminuser'?'active':'' ?>"><a href="<?php echo base_url('adminuser/manage') ?>"><i class="fas fa-user-plus li-icon"></i>Admin User</a></li>
        <?php } ?>
        <li class="<?php echo $this->uri->segment(1) == 'category'?'active':'' ?>"><a href="<?php echo base_url('category/manage') ?>"><i class="fas fa-th-list li-icon"></i>Project Category</a></li>

        <li class="<?php echo $this->uri->segment(1) == 'project'?'active':'' ?>"><a href="<?php echo base_url('project/manage') ?>"><i class="fas fa-city li-icon"></i>Project Details</a></li>


        <li class="<?php echo $this->uri->segment(1) == 'enquiry'?'active':'' ?>">
          <a href="<?php echo base_url('enquiry') ?>"><i class="fas fa-comment-dots  li-icon"></i>Enquiry 
          <?php if($this->ci->preload->enquiry() > 0){
            echo '<span class="new badge">'. $this->ci->preload->enquiry() .'</span> ';
          } ?>
          </a>
        </li>
      </ul>
   </div>
</div>