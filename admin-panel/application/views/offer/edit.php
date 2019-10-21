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
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/croppie.css">
      <!-- bar -->
      <style>
        .ck-editor__editable {
            min-height: 300px;
        }
        .city-edit-image {
    width: 90px !important;
    height: auto;
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
                                <div class="col 12 m6"><p class="h5-para black-text m0">Edit Offer</p>
                                </div>

                                  <div class="col 12 m6 right-align">
                                    <?php 
                                    if ($result->status == '1') { ?>
                                        <a href="<?php echo base_url('offer/activate?id='.$result->id.'&s=""')  ?>" class="waves-effect waves-light btn red  white-text hoverable ">Disable</a>
                                      <?php }else{ ?>
                                        <a href="<?php echo base_url('offer/activate?id='.$result->id.'&s=1')  ?>" class="waves-effect waves-light btn green  white-text hoverable ">Enable</a>

                                     <?php }  ?>
                                    
                                     
                                </div>
                                
                            </div>

                            

                            <div class="card">
                                <div class="card-content">
                                    <div class="form-container">
                                        <form action="<?php echo base_url() ?>offer/insert" method="post" style="overflow-y: auto;overflow-x: hidden;" id="city-form" enctype="multipart/form-data">
                                        
                                          <div class="row m0">
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="link" name="link" class="validate" required value="<?php echo (!empty($result->link)?$result->link:'') ?>">
                                                  <label for="link">Title<span class="red-text">*</span></label>
                                                  <p><span class="error"><?php echo form_error('link'); ?></span></p>
                                                </div>
                                            </div>

                                             

                                            <div class="row m0">
                                                  <div class="file-field input-field col s12 l6">
                                                    <div class="btn btn-small black-text grey lighten-3">
                                                    <i class="far fa-image left  "></i>
                                                        <span class="">Add Image</span>
                                                        <input type="file" name="banner" id="upload" accept=".png, .jpg, .jpeg">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" >
                                                    </div>
                                                    <h6 class=" m0"><small> <i><b>Note</b>: Please select only image file (eg: .jpg, .png, .jpeg etc.) <br> <span class="bold">Max file size:</span> 512kb  </i> <span class="red-text">*</span></small></h6>
                                                </div>
                                                

                                                <?php if(!empty($result->image)) {
                                                    ?>
                                            <div class="form-group col s12 l4">
                                                <input type="hidden" name="edit" value="edit">
                                                <div class="" id="edt-image">
                                                    <div class="image view view-first">
                                                        <img class="city-edit-image"
                                                            src="<?php echo $this->config->item('web_url').$result->image ?>"
                                                            alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>

                                            <div id="upload-demo" style="padding: 0;"></div>
                                            </div>

                                            

                                              <div class="col s12">
                                              <?php 
                                                   echo ($this->session->flashdata('formerror'))? '<span class="red-text">'.$this->session->flashdata('formerror').'</span>' : '' 
                                                   ?>
                                              <?php ?>
                                              </div>

                                              <input type="hidden" name="edit" value="1">
                                              <input name="image" class="ipimg" type="hidden" value="">
                                              <input name="fimagecheck" class="fimagecheck" type="hidden" value="">
                                              <input name="id" class="id" type="hidden" value="<?php echo $result->id ?>">

                                            
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
        <script src="<?php echo base_url()?>assets/js/croppie.js"></script>

        <script>
  <?php $this->load->view('include/message.php'); ?>
    
  </script>
      <script>
    $(document).ready(function() {

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


        $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 500,
                height: 500,
                type: 'box'
            },
            boundary: {
                width: 550,
                height: 550
            }
        });


        $('#upload').on('change', function() {
            $('.fimagecheck').val($('.fimagecheck').val() + '1');
            
            var reader = new FileReader();
            reader.onload = function(e) {
                $uploadCrop.croppie('bind', {
                    url: e.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
        });

        $('.upload-result').on('click', function(ev) {
          ev.preventDefault();
          ;

          $(".loder-box").css("display", "flex");

            $uploadCrop.croppie('result', {
                type: 'canvas',
                size: 'viewport',
                format : 'jpeg',
                quality: 1


            }).then(function(resp) {
              var alt = $("#alt").val()
              if (alt == '') {
                alert('Image title is required');

                } else {
                  $('.ipimg').val(resp);
                  $('#city-form').submit();
                }
            });
            


        });

    });
    </script>
        
    </body>
</html>