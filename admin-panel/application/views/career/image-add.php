<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <style>
        .city-edit-image {
        width: 150px !important;
        height: auto;
      }
      .waves-effect.waves-light.btn.white-text.hoverable {
    top: 22px;
}
      </style>
      
   </head>
   <body>
      <!-- headder -->
      <div id="header-include">
           <?php $this->load->view('include/header.php'); ?>
         </div>
      <!-- end headder -->
      <!-- first layout -->
        <section class="sec-top">
            <div class="container-wrap">
                <div class="col l12 m12 s12">
                    <div class="row">
      <div id="sidemenu-include">
                <?php $this->load->view('include/menu.php'); ?>
              </div>


                        <div class="col m12 s12 l9">

              <div class="row m0">

               <div class="col 12 m6">

                            <p class="h5-para black-text">Career</p>
                          </div>

                            <div class="col 12 m6 right-align">
                                    <?php 
                                    if ($result->status == '1') { ?>
                                        <a href="<?php echo base_url('career/image_activate?id='.$result->id.'&s=""')  ?>" class="waves-effect waves-light btn red  white-text hoverable ">Disable</a>
                                      <?php }else{ ?>
                                        <a href="<?php echo base_url('career/image_activate?id='.$result->id.'&s=1')  ?>" class="waves-effect waves-light btn green  white-text hoverable ">Enable</a>

                                     <?php }  ?>
                                    
                                     
                                </div>

                                </div>


                            <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                        <form action="<?php $id = (!empty($result->id))?$result->id:''; 
                                        echo base_url('career/imageAdd/').$id ?>" method="post"  id="category-form" enctype="multipart/form-data">
                                        
                                          <div class="row m0">

                                            <div class="file-field input-field col s12 l6">
                                                <div class="btn btn-small black-text grey lighten-3">
                                                    <i class="far fa-image left  "></i>
                                                    <span class="">Career Image</span>
                                                    <input type="file" name="cimage" accept=".png, .jpg, .jpeg, .gif" required > </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                                <span class="helper-text"><b>Note</b>: Please select only image file
                                                    (eg: .jpg, .png, .jpeg etc.) <br> <span class="bold">Max file
                                                        size:</span> 512kb <span class="red-text">*</span></span>
                                            </div>

                                            <?php
                                                if (!empty($result->image)) { ?>
                                            <div class="col s12 m6">
                                                <div class="" id="edt-image">
                                                    <div class="image view view-first">
                                                        <img class="city-edit-image i-img"
                                                            src="<?php echo $this->config->item('web_url').$result->image ?>"
                                                            alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php    }  ?>



                                            </div>
                                            


                                              <div class="col s12">
                                              <?php 
                                                   echo ($this->session->flashdata('formerror'))? '<span class="red-text">'.$this->session->flashdata('formerror').'</span>' : '' 
                                                   ?>
                                              <?php ?>
                                              </div>

                                            <div class="col s12 mtb20">
                                                <button class="btn waves-effect waves-light green darken-4 hoverable btn-large" type="submit">Submit
                                                    <i class="fas fa-paper-plane right"></i>
                                                </button>
                                                <br>
                                            </div>                                              
                                        </form>
                                          </div>
                                    </div>
                                </div>
                            </div><!-- cad end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/tag.js"></script>
        <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>
        <script>
            <?php $this->load->view('include/message.php'); ?>
        </script>
    </body>
</html>