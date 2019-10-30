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
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/croppie.css">
      <!-- bar -->
      <style>
        .ck-editor__editable {
            min-height: 300px;
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
                            <p class="h5-para black-text ">Add Real Estate Updates</p>

                            <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                        <form action="<?php echo base_url() ?>real_estate/insert" method="post" style="overflow-y: auto;overflow-x: hidden;" id="city-form" enctype="multipart/form-data">
                                            <div class="row m0">
                                                  <div class="file-field input-field col s12 l6">
                                                    <div class="btn btn-small black-text grey lighten-3">
                                                    <i class="far fa-image left  "></i>
                                                        <span class="">Add Image</span>
                                                        <input type="file" name="image" id="upload" accept=".png, .jpg, .jpeg">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" >
                                                    </div>
                                                    <h6 class=" m0"><small> <i><b>Note</b>: Please select only image file (eg: .jpg, .png, .jpeg etc.) <br> <span class="bold">Max file size:</span> 512kb  </i> <span class="red-text">*</span></small></h6>
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

                                            <div class="row m0">
                                                <p class="bold  black-text  mb10 h6">Content</p>
                                            </div>
                                            <div class="row m0">
                                                 <div class="col s12 l12">
                                                    <div id="toolbar-container"></div>
                                                    <div id="editor">
                                                        <?php echo (!empty($result->content)?$result->content:'') ?> </div>
                                                    <textarea name="detail" id="description"
                                                        style="display:none"></textarea>
                                                </div>
                                            </div>

                                            

                                              <div class="col s12">
                                              <?php 
                                                   echo ($this->session->flashdata('formerror'))? '<span class="red-text">'.$this->session->flashdata('formerror').'</span>' : '' 
                                                   ?>
                                              <?php ?>
                                              </div>

                                              <input type="hidden" name="banner_id" value="<?php echo random_string('alnum',10) ?>">
                                              <input name="image" class="ipimg" type="hidden" value="">

                                            
                                            <div class="col s12 mtb20">
                                                <button class="btn waves-effect waves-light green darken-4 hoverable btn-large upload-result" type="submit">Submit
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
        <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

        <script>
  <?php $this->load->view('include/message.php'); ?>
    
  </script>
      <script>
    $(document).ready(function() {

        $('#city-form').submit(function() {
            var text = $('#editor').html();
            $('#description').val(text);
        });

        $('select').formSelect();
        $("#city-form").validate({
            rules: {
                city: {
                    required: true,
                },
            },
            messages: {
                
                city: "Please enter a city",
            }
        });
    });
    </script>
        <script>
    DecoupledEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            const toolbarContainer = document.querySelector('#toolbar-container');
            toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        })
        .catch(error => {
            console.error(error);
        });
    </script>
        
    </body>
</html>