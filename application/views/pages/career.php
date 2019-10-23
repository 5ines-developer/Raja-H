<!DOCTYPE html>
<html lang="en">
<head>
  <?php  $this->load->view('includes/meta'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
<?php  $this->load->view('includes/gscript'); ?>
<?php  $this->load->view('includes/header'); ?>
 <section class="main-about main-project-img">
        <div class="main-contact-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>CAREER</h4>
                    <P><a href="<?php echo base_url() ?>" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> career </span> </P>
                </div>
            </div>
        </div>
 </section>
 <section class="career">
    <div class="container">
        <div class="jobs-op">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                    <h4 class="job-h">Current Job Openings</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the  </p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                    <div class="box-j text-center">
                        <img src="<?php echo (!empty($cimage->image))?base_url().$cimage->image:'assets/img/home-icon.png' ?>" alt="" class="img-fluid job-hicon">
                        <!-- <p class="job-no">Jobs - 10</p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="exp">
            <div class="row">
                <div class="col-md-12 text-center">
                <div class="project-title">
                        <h4>Career</h4>
                        <p>Creating and providing opportunities is what we are all about. If you like to take on beyond the defined boundaries, are self-driven with the ability to learn and pick up the ropes fast there will always be an opportunity coming your way.</p>
                        <p>At Raja Housing Ltd. we aim to deliver superior performance and market leadership through outstanding people. Our staff are initially selected for their talent and attitude, then trained and developed through taking responsibility to make a real impact on their projects and our overall performance.</p>
                        <p>Working for Raja Housing Ltd., you will benefit from the flexibility such a large and broadly based company provides. You may start out on any one particular training program or with any one department; however opportunities will exist to move between offices, departments and market sectors throughout your career.</p>
                        <p>We have constantly strived-:you joining hands with Raja Housing Ltd , you’ll be given every opportunity to explore your talents, strive for new challenges and succeed beyond what you perceived & you’ll be recognized and rewarded as you grow and win along with us. Our culture is open and inclusive; irrespective of your experience, but gauged on your talent you will immediately be welcomed into a team, and would always have a significant role to play.</p>
                        <p>If you’re new to the workforce, our broad based footprint, wide reach, and broad exposure to the customer market provide a wide world of opportunity to launch your career in the right direction. We believe in the concept of “Grow with the organisation”.
                        We foster supportive relationships that help develop skills, behaviour, and insights to enable you to attain your goals. Of global experience coupled with.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="job-detail">
            <h4 class="">Job Details</h4>
            <div class="row">
            
                <?php  
                    $option = '';
                    foreach ($jobs as $key => $value) { 
                    $option .= '<option value="'. $value->title.'" >'. $value->title.'</option>';
                ?>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-12 plr3">
                        <div class="job-box">
                            <h5><?php echo $value->title ?></h4>
                            <p><span>Exp -</span> <?php echo $value->experience ?></p>
                           <?php echo (!empty($value->location))? ' <p> <span>Location-</span> '.$value->location.'</p>' : ''  ?>
                            <div class="">
                            <a href="#" data-toggle="modal" data-target="#md<?php  echo $value->id ?>"> Know more</a>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" id="md<?php  echo $value->id ?>" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <h4><?php  echo $value->title ?></h4>
                                            <p><?php  echo $value->des ?></p>
                                            
                                            <div class="keytops">
                                                <?php echo (!empty($value->experience))? '<p><b>Experience:</b> '.$value->experience.' </p>' : '' ?>
                                                <?php echo (!empty($value->language))? '<p><b>Language:</b> '.$value->language.' </p>' : '' ?>
                                                <?php echo (!empty($value->qualification))? '<p><b>Qualification:</b>  '.$value->qualification.' </p>' : '' ?>
                                                <?php echo (!empty($value->skils))? '<p><b>Skils:</b> '.str_replace(',', ', ', $value->skils).' </p>' : '' ?>
                                                <?php echo (!empty($value->location))? '<p><b>Location:</b>  '.$value->location.' </p>' : '' ?>
                                            </div>

                                            <div>
                                                <?php echo (!empty($value->responsiblity))? '<h5>Responsiblity</h5> <p>'.$value->responsiblity.'</p>' : '' ?>
                                                
                                            </div>

                                            <div>
                                                <?php echo (!empty($value->responsiblity))? '<h5>Key Role</h5> <p>'.$value->key_role.'</p>' : '' ?>
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="contact">
            <div class="row">
                <div class="col-md-12">
                    <div class="career-title">
                        <h4>Fill The Form</h4>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-7 col-sm-12 col-12 pad-r">
                                <form action="<?php echo base_url() ?>career" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input type="text" name="name" class="form-control custom-form-control-career exp-m" required placeholder="Name *">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input type="email" name="email" class="form-control custom-form-control-career" required placeholder="Email *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="position"  class="form-control custom-form-control-career" required>
                                            <option value=""  selected="true" disabled="disabled" >Position Applied For</option>
                                            <?php echo $option ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input type="text" name="experience" class="form-control custom-form-control-career exp-m" placeholder="Experience *">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <input type="text" name="phone" class="form-control custom-form-control-career" required placeholder="Mobile No *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <input type="file" size="60" class="form-control custom-form-control-career" accept=".doc,.docx,.pdf" > -->
                                        <label  for="Upload" > 
                                            <input id="Upload" type="file" required name="file" accept=".doc,.docx,.pdf"  class="form-control custom-form-control-career">
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" name="msg" rows="4" class="form-control custom-form-control-career" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-send">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="col-md-6 col-lg-5 col-sm-12 col-12 ">
                                <div class="career-right">
                                    <div class="shad">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-12 col-sm-12 pr0 ">
                                                <div class="icon-img">
                                                    <img src="assets/img/c3.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12 col-sm-12 pl0">
                                                <h5>Career Growth</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</p>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="shad">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-12 col-sm-12 pr0 ">
                                                <div class="icon-img">
                                                    <img src="assets/img/c2.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12 col-sm-12 pl0">
                                                <h5>Career Growth</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</p>
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="shad">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4 col-12 col-sm-12 pr0 ">
                                                <div class="icon-img">
                                                    <img src="assets/img/c2.jpg" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-12 col-sm-12 pl0">
                                                <h5>Career Growth</h5>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry and typesetting industry</p>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div> -->
                        </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <?php  $this->load->view('includes/footer'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
