<!DOCTYPE html>
<html>
   <head>
      <title><?php echo $title ?></title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML,CSS,XML,JavaScript">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="<?php echo base_url()?>assets/fonts/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style>
        .seo-title {margin: 0 0px 14px 10px; } 
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
                            <p class="h5-para black-text ">Default SEO </p>

                            <form action="<?php echo base_url() ?>seo/seoDefault" method="post"  id="category-form" enctype="multipart/form-data">

                                <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                          <div class="row m0">
                                             <h6 class="seo-title">Scripts</h6>
                                                <div class="input-field col s12 l12">
                                                  <textarea id="gmanager" name="gmanager" class="materialize-textarea"><?php echo (!empty($result->g_tag))?$result->g_tag:''; ?></textarea>
                                                  <label for="gmanager">Google Tag manager <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l12">
                                                  <textarea id="ganalytics" name="ganalytics" class="materialize-textarea"><?php echo (!empty($result->g_analytics))?$result->g_analytics:''; ?></textarea>
                                                  <label for="ganalytics">Google Analytics <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l12">
                                                  <textarea id="schema" name="schema" class="materialize-textarea"><?php echo (!empty($result->schema))?$result->schema:''; ?></textarea>
                                                  <label for="schema">Schema Script   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="col s12 mtb20">
                                                  <button class="btn waves-effect waves-light green darken-4 hoverable btn-large" type="submit">Submit
                                                  <i class="fas fa-paper-plane right"></i>
                                                  </button>
                                                  <br>
                                                </div>
                                            </div>


                                          </div>
                                    </div>
                                </div>

                                </form>
                            </div>
                            </div><!-- cad end -->


                            </form>

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
            $(document).ready(function () {
                $('#tags').tagsInput({
                    'defaultText':'add a skills',
                });
            });
            
        </script>
    </body>
</html>