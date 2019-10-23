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
                            <p class="h5-para black-text ">Edit SEO - <?php echo (!empty($result->page))?$result->page:''; ?></p>

                            <form action="<?php echo base_url() ?>seo/update" method="post"  id="category-form" enctype="multipart/form-data">

                            <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                        
                                        
                                          <div class="row m0">
                                            <h6 class="seo-title">Page detail</h6>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="page" name="page" class="validate"  value="<?php echo (!empty($result->page))?$result->page:''; ?>">
                                                  <label for="page">Page <span class="red-text">*</span></label>
                                                </div>

                                                <input type="hidden" id="id" name="id" class="validate"  value="<?php echo (!empty($result->id))?$result->id:''; ?>">

                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="title" name="title" class="validate" value="<?php echo (!empty($result->title))?$result->title:''; ?>">
                                                  <label for="title">Title <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l12">
                                                  <textarea id="keywords" name="keywords" class="materialize-textarea"><?php echo (!empty($result->keywords))?$result->keywords:''; ?></textarea>
                                                  <label for="keywords">Keywords<span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12">
                                                    <textarea id="description" name="description" class="materialize-textarea"><?php echo (!empty($result->m_desc))?$result->m_desc:''; ?></textarea>
                                                    <label for="description">Meta Description</label>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            

                             <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                          <div class="row m0">
                                            <h6 class="seo-title">Facebook Open Graph</h6>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_id" name="og_id" class="validate"  value="<?php echo (!empty($result->og_id))?$result->og_id:''; ?>">
                                                  <label for="og_id">OG ID   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_image" name="og_image" class="validate"  value="<?php echo (!empty($result->og_image))?$result->og_image:''; ?>">
                                                  <label for="og_image">OG Image   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_title" name="og_title" class="validate"  value="<?php echo (!empty($result->og_title))?$result->og_title:''; ?>">
                                                  <label for="og_title">OG Title   <span class="red-text">*</span></label>
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_site" name="og_site" class="validate"  value="<?php echo (!empty($result->og_site))?$result->og_site:''; ?>">
                                                  <label for="og_site">OG Site   <span class="red-text">*</span></label>
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_url" name="og_url" class="validate"  value="<?php echo (!empty($result->og_url))?$result->og_url:''; ?>">
                                                  <label for="og_url">OG Url   <span class="red-text">*</span></label>
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="og_type" name="og_type" class="validate"  value="<?php echo (!empty($result->og_type))?$result->og_type:''; ?>">
                                                  <label for="og_type">OG Type   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12">
                                                    <textarea id="og_desc" name="og_desc" class="materialize-textarea"><?php echo (!empty($result->og_desc))?$result->og_desc:''; ?></textarea>
                                                    <label for="og_desc">OG Description</label>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>


                                 <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                          <div class="row m0">
                                            <h6 class="seo-title">Twitter Card</h6>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="t_card" name="t_card" class="validate"  value="<?php echo (!empty($result->t_card))?$result->t_card:''; ?>">
                                                  <label for="t_card">Twitter Card   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="t_site" name="t_site" class="validate"  value="<?php echo (!empty($result->t_site))?$result->t_site:''; ?>">
                                                  <label for="t_site">Site   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="t_image" name="t_image" class="validate"  value="<?php echo (!empty($result->t_image))?$result->t_image:''; ?>">
                                                  <label for="t_image">Card Image   <span class="red-text">*</span></label>
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="t_url" name="t_url" class="validate"  value="<?php echo (!empty($result->t_url))?$result->t_url:''; ?>">
                                                  <label for="t_url">Url   <span class="red-text">*</span></label>
                                                </div>
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="t_title" name="t_title" class="validate"  value="<?php echo (!empty($result->t_title))?$result->t_title:''; ?>">
                                                  <label for="t_title">card Title   <span class="red-text">*</span></label>
                                                </div>

                                                <div class="input-field col s12">
                                                    <textarea id="t_desc" name="t_desc" class="materialize-textarea"><?php echo (!empty($result->t_desc))?$result->t_desc:''; ?></textarea>
                                                    <label for="t_desc">Card Description</label>
                                                </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>


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