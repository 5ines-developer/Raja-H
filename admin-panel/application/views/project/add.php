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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/image-uploader.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- bar -->
    <style>
    .ck-editor__editable {
        min-height: 300px;
    }

    .currencyinput {
        border: 1px inset #ccc;
    }

    .currencyinput input {
        border: 0;
    }

    .input-field .prefix~input,
    .input-field .prefix~label {
        margin-left: 10rem;
    }

    .input-field .prefix {
        font-size: 1rem;
    }

    #youtube-link,
    #fb-link {
        display: none;
    }

    .faqform {
        padding: 30px !important;
        border-bottom: 1px dotted #cecece;
    }

    .faqform:last-child {
        padding: 0px;
        border-bottom: 0px dotted #cecece;
    }

    .faqform .addfaq {
        visibility: hidden;
    }

    .faqform:last-child .addfaq {
        visibility: visible;
    }

    .faqform:last-child .closefaq {
        visibility: hidden;
    }

    .stcky-nav {
        position: sticky;
        top: 65px;
        z-index: 9999;
        background-color: #fff;
    }

    .portfolio-img {
        position: relative;
        overflow: hidden;
        margin-bottom: 10px;
    }

    .portfolio-img:hover .port-delete {
        top: 0;
    }

    .port-delete {
        position: absolute;
        text-align: center;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
        height: 100%;
        line-height: 100px;
    }

    .port-delete i {
        color: red;
        font-size: 18px;
    }

    .vid-delete {
        position: relative;
        text-align: center;
        width: 100%;
        background: #fff;
        padding: 4px;
        top: -5px;
        border: 1px dotted;
    }

    .vid-delete i {
        color: red;
        font-size: 18px;
    }

    .i-img {
        width: 150px !important;
        height: auto;
        max-height: 95px;
    }
    #marqueeplus {
        background-color: #1b5e20;
        padding: 4px 7px;
        color: #fff;
        cursor: pointer;
        top: 31px;
position: relative;
    }
    #marqueeplus1 {
        background-color: #1b5e20;
        padding: 4px 7px;
        color: #fff;
        cursor: pointer;
        top: 31px;
position: relative;
    }
    .marqaddnext {

background-color: #f4f4f4;
border-radius: 4px;}
.marqaddnext1 {

background-color: #f4f4f4;
border-radius: 4px;}
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
                        <div class="row">
                            <div class="col 12 m6">
                                <p class="h5-para black-text  m0">Update Project</p>
                            </div>
                        </div>

                        <div class="tab-buttons show-on-large hide-on-med-and-down stcky-nav z-depth-1">
                            <ul class="tabs1 transparent">
                                <li class="tab1 col s1"><a href="#detail" class="active">Detail</a></li>
                                <li class="tab1 col s2"><a href="#areastatement" class="">Area Statement</a></li>
                                <li class="tab1 col s2"><a href="#masterplan" class="">Masterplan</a></li>
                                <li class="tab1 col s2"><a href="#floorplan" class="">Floorplan</a></li>
                                <li class="tab1 col s2"><a href="#Amenities" class="">Amenities</a></li>
                                <li class="tab1 col s2"><a href="#gallery" class="">Gallery</a></li>
                                <li class="tab1 col s2"><a href="#walkthrough" class="">Walk Through</a></li>
                            </ul>
                        </div>


                        <div class="card scrollspy" id="detail">
                            <div class="card-content">
                                <div class="form-container">
                                    <form action="<?php echo base_url() ?>project/insert_detail" method="post"
                                        id="project-detail" enctype="multipart/form-data">
                                        <div class="row m0">
                                            <p class="bold  black-text  mb10 h6">Project Detail</p>
                                        </div>
                                        <div class="row m0">
                                            <div class="col s12 l12">
                                                <div id="toolbar-container"></div>
                                                <div id="editor">
                                                    <?php echo (!empty($result->detail)?$result->detail:'') ?> </div>
                                                <textarea name="detail" id="description"
                                                    style="display:none"></textarea>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                            <input type="hidden" name="cattype"
                                                value="<?php echo $this->uri->segment(4) ?>">
                                            <div class="col s12 center mtb20">
                                                <button
                                                    class="btn waves-effect waves-light green darken-4 hoverable btn-large"
                                                    type="submit">Submit <i class="fas fa-paper-plane right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card scrollspy" id="areastatement">
                            <div class="card-content">
                                <div class="form-container">
                                    <form action="<?php echo base_url() ?>project/insert_area" method="post"
                                        id="area-statement" enctype="multipart/form-data">
                                        <div class="row m0">
                                            <p class="bold  black-text  mb10 h6">Area Statement</p>
                                        </div>
                                        <div class="row m0">
                                            <div class="col s12 l12">
                                                <div id="toolbar-container1"></div>
                                                <div id="editor1">
                                                    <?php echo (!empty($result->areastatement)?$result->areastatement:'') ?>
                                                </div>
                                                <textarea name="area" id="description1" style="display:none"></textarea>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                            <input type="hidden" name="cattype"
                                                value="<?php echo $this->uri->segment(4) ?>">
                                            <div class="col s12 center mtb20">
                                                <button
                                                    class="btn waves-effect waves-light green darken-4 hoverable btn-large"
                                                    type="submit">Submit <i class="fas fa-paper-plane right"></i>
                                                </button>
                                                <br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="card scrollspy" id="masterplan">
                            <div class="card-content">
                                <div class="form-container">
                                    <form action="<?php echo base_url() ?>project/insert_master" method="post"
                                        id="master-plan" enctype="multipart/form-data">
                                        <div class="row m0">
                                            <p class="bold  black-text  mb10 h6">Masterplan</p>
                                        </div>
                                        <div class="row m0">
                                            <div class="file-field input-field col s12 l6">
                                                <div class="btn btn-small black-text grey lighten-3">
                                                    <i class="far fa-image left  "></i>
                                                    <span class="">Add Image</span>
                                                    <input type="file" name="mimage" accept=".png, .jpg, .jpeg, .gif"
                                                        <?php echo (!empty($result->materplan)?'':'required') ?>>
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                                <span class="helper-text"><b>Note</b>: Please select only image file
                                                    (eg: .jpg, .png, .jpeg etc.) <br> <span class="bold">Max file
                                                        size:</span> 512kb <span class="red-text">*</span></span>
                                            </div>

                                            <?php
                                                if (!empty($result->masterimage)) { ?>
                                            <div class="col s12 m6">
                                                <div class="" id="edt-image">
                                                    <div class="image view view-first">
                                                        <img class="city-edit-image i-img"
                                                            src="<?php echo $this->config->item('web_url').$result->masterimage ?>"
                                                            alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php    }  ?>



                                        </div>
                                        <div class="row m0">
                                            <div class="col s12 l12">
                                                <label for="masterplans">Masterplan</label>
                                                <textarea id="masterplans" name="masterplans"
                                                    class="materialize-textarea"><?php echo (!empty($result->materplan)?$result->materplan:'') ?></textarea>
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                            <input type="hidden" name="cattype" value="<?php echo $this->uri->segment(4) ?>">
                                        </div>
                                        <div class="col s12 center mtb20">
                                            <button
                                                class="btn waves-effect waves-light green darken-4 hoverable btn-large"
                                                type="submit">Submit <i class="fas fa-paper-plane right"></i> </button>
                                            <br>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>



                    <div class="card scrollspy" id="floorplan">
                        <div class="card-content">
                            <div class="form-container">
                                <form action="<?php echo base_url() ?>project/insert_floor" method="post"
                                    style="overflow-y: auto;overflow-x: hidden;" id="vendor-form"
                                    enctype="multipart/form-data">
                                    <div class="row m0">
                                        <p class="bold  black-text  mb10 h6">Floorplan Images</p>
                                    </div>

                                    <div class="row">

                                        <?php if (!empty($floor)) {
                                foreach ($floor as $floor1 => $floor2) { ?>
                                        <div class="col s12 l3 m6 ">
                                            <div class="portfolio-img">
                                                <img class="materialboxed z-depth-1" width="200" style="max-width:100%"
                                                    src="<?php echo $this->config->item('web_url').'/'.$floor2->fthumb ?>"
                                                    style="cursor: pointer;">
                                                <div class="port-delete">
                                                    <a
                                                        href="<?php echo base_url('vendors/gallery_delete/').$floor2->fid.'/'.$floor2->fid ?>">
                                                        <i class="fas fa-trash"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                        <?php } } ?>
                                    </div>

                                    <div class="row m0">
                                        <div class="file-field input-field col s12 l12">
                                            <div class="input-images"></div>
                                            <span class="helper-text" data-error="wrong"
                                                data-success="right"><b>Note</b>: Please select only image file (eg:
                                                .jpg, .png, .jpeg, .gif etc.) <br> <span class="bold">Max file
                                                    size:</span> 512kb <span class="red-text">*</span></span>
                                        </div>
                                    </div>


                                    <div class="row m0">
                                        <div class="col s12 l12">
                                            <label for="floorplans">Floorplan Details</label>
                                            <textarea id="floorplans" name="floorplans" class="materialize-textarea"><?php echo (!empty($result->floorplan)?$result->floorplan:'') ?></textarea>
                                        </div>

                                    </div>

                                    <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                    <input type="hidden" name="cattype" value="<?php echo $this->uri->segment(4) ?>">

                                    <div class="col s12 center mtb20">
                                        <button class="btn waves-effect waves-light green darken-4 hoverable btn-large"
                                            type="submit">Submit
                                            <i class="fas fa-paper-plane right"></i>
                                        </button>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card scrollspy" id="Amenities">
                            <div class="card-content">
                                <div class="form-container">
                                    <div class="row m0">
                                            <p class="bold  black-text col  mb10 h6">Amenities</p>
                                    </div>
                                    <form action="<?php echo base_url() ?>project/insert_amenity" method="post" id="">

                                    <?php if (!empty($amenity)) {
                                               foreach ($amenity as $amenity1 => $amenity2) { ?>

                                        <div class="row m0 marqaddnext">
                                            <div class="input-field col s12 l6">                                                
                                                <input type="text" id="i_title" name="i_title[]" class="validate"
                                                    value="<?php echo (!empty($amenity2->amenity)?$amenity2->amenity:'') ?>" >
                                                <label for="i_title">Title <span class="red-text">*</span></label>
                                                <p><span class="error"><?php echo form_error('category'); ?></span></p>
                                            </div>
                                            <div class="col l2">
                                            <a id="brandplus" class="marqueeplus remov" value="<?php echo $amenity2->aid; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        

                                        <?php  } } ?>


                                    <div class="row m0 marqaddnext" id="marqaddnext">
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="i_title" name="i_title[]" class="validate" required value="<?php echo (!empty($setting)?$setting['name']:'') ?>">
                                                  <label for="i_title">Title <span class="red-text">*</span></label>
                                                  <p><span class="error"><?php echo form_error('category'); ?></span></p>
                                                </div>
                                                <div class="col l2">
                                                    <a id="marqueeplus" class="marqueeplus "><i class="fa fa-plus" aria-hidden="true"></i> </a>
                                                </div>
                                            </div><br><br>
                                        <div id="faq-form-box"></div> 
                                        <input type="hidden" value="<?php echo $result->id ?>" name="pid">   
                                        
                                    <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                    <input type="hidden" name="cattype" value="<?php echo $this->uri->segment(4) ?>">              
                                        <div class="col s12 input-field">
                                            <button class="btn waves-effect waves-light green darken-4 hoverable " type="submit">Submit
                                                <i class="fas fa-paper-plane right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="card scrollspy" id="gallery">
                        <div class="card-content">
                            <div class="form-container">
                                <form action="<?php echo base_url() ?>project/insert_gallery" method="post"
                                    style="overflow-y: auto;overflow-x: hidden;" id="vendor-form"
                                    enctype="multipart/form-data">
                                    <div class="row m0">
                                        <p class="bold  black-text  mb10 h6">Gallery</p>
                                    </div>

                                    <div class="row">

                                        <?php if (!empty($gallery)) {
                                foreach ($gallery as $gallery1 => $gallery2) { ?>
                                        <div class="col s12 l3 m6 ">
                                            <div class="portfolio-img">
                                                <img class="materialboxed z-depth-1" width="200" style="max-width:100%"
                                                    src="<?php echo $this->config->item('web_url').'/'.$gallery2->thumb ?>"
                                                    style="cursor: pointer;">
                                                <div class="port-delete">
                                                    <a
                                                        href="<?php echo base_url('vendors/gallery_delete/').$gallery2->id.'/'.$gallery2->id ?>">
                                                        <i class="fas fa-trash"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                        <?php } } ?>
                                    </div>

                                    <div class="row m0">
                                        <div class="file-field input-field col s12 l12">
                                            <div class="input-images"></div>
                                            <span class="helper-text" data-error="wrong"
                                                data-success="right"><b>Note</b>: Please select only image file (eg:
                                                .jpg, .png, .jpeg, .gif etc.) <br> <span class="bold">Max file
                                                    size:</span> 512kb <span class="red-text">*</span></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                    <input type="hidden" name="cattype" value="<?php echo $this->uri->segment(4) ?>">
                                    <input type="hidden" value="<?php echo $result->id ?>" name="pid">   

                                    <div class="col s12 center mtb20">
                                        <button class="btn waves-effect waves-light green darken-4 hoverable btn-large"
                                            type="submit">Submit
                                            <i class="fas fa-paper-plane right"></i>
                                        </button>
                                        <br>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="card scrollspy" id="walkthrough">
                            <div class="card-content">
                                <div class="form-container">
                                    <div class="row m0">
                                            <p class="bold  black-text col  mb10 h6">Walk Through</p>
                                    </div>
                                    <form action="<?php echo base_url() ?>project/insert_location" method="post" id="">


                                    <div class="row m0">
                                        <div class="col s12 l12">
                                            <label for="location">Location</label>
                                            <textarea id="location" name="location" class="materialize-textarea"><?php echo (!empty($result->location)?$result->location:'') ?></textarea>
                                        </div>

                                    </div><br>

                                    <?php if (!empty($location)) {
                                               foreach ($location as $location1 => $location2) { ?>

                                        <div class="row m0 marqaddnext">
                                            <div class="input-field col s12 l6">                                                
                                                <input type="text" id="i_title" name="i_title[]" class="validate"
                                                    value="<?php echo (!empty($location2->nearby)?$location2->nearby:'') ?>" >
                                                <label for="i_title">Title <span class="red-text">*</span></label>
                                                <p><span class="error"><?php echo form_error('category'); ?></span></p>
                                            </div>
                                            <div class="col l2">
                                            <a id="brandplus" class="marqueeplus remov" value="<?php echo $location2->id; ?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        

                                        <?php  } } ?>


                                    <div class="row m0 marqaddnext" id="marqaddnext1">
                                                <div class="input-field col s12 l6">
                                                  <input type="text" id="i_title" name="i_title1[]" class="validate" required value="<?php echo (!empty($setting)?$setting['name']:'') ?>">
                                                  <label for="i_title1">Title <span class="red-text">*</span></label>
                                                  <p><span class="error"><?php echo form_error('category'); ?></span></p>
                                                </div>
                                                <div class="col l2">
                                                    <a id="marqueeplus1" class="marqueeplus1 "><i class="fa fa-plus" aria-hidden="true"></i> </a>
                                                </div>
                                            </div><br><br>
                                        <div id="faq-form-box"></div> 
                                        <input type="hidden" value="<?php echo $result->id ?>" name="pid">   
                                        
                                    <input type="hidden" name="id" value="<?php echo $this->uri->segment(3) ?>">
                                    <input type="hidden" name="cattype" value="<?php echo $this->uri->segment(4) ?>">              
                                        <div class="col s12 input-field">
                                            <button class="btn waves-effect waves-light green darken-4 hoverable " type="submit">Submit
                                                <i class="fas fa-paper-plane right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                </div>



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
    <script src="<?php echo base_url() ?>assets/js/image-uploader.min.js"></script>
    <script>
    <?php $this->load->view('include/message.php'); ?>
    </script>
    <script>
            $(function() {
            $('#marqueeplus').on('click', function(e) {
                e.preventDefault();
                $('<div class="row m0 marqaddnext"> <div class="input-field col s12 l6"> <input type="text" id="i_title" name="i_title[]" class="validate" required > <label for="i_title">Title <span class="red-text">*</span></label> <p><span class="error"></span></p> </div> <br> <div class="col l2"> <a id="brandplus" class="marqueeplus remov"><i class="fa fa-times" aria-hidden="true"></i></a> </div> </div>')
                    .append().insertBefore('#marqaddnext');

            });
            $(document).on('click', '.marqueeplus.remov', function(e) {
                e.preventDefault();
                $(this).closest('div.row').remove();
            });
        });

        $(function() {
            $('#marqueeplus1').on('click', function(e) {
                e.preventDefault();
                $('<div class="row m0 marqaddnext1"> <div class="input-field col s12 l6"> <input type="text" id="i_title1" name="i_title1[]" class="validate" required > <label for="i_title1">Title <span class="red-text">*</span></label> <p><span class="error"></span></p> </div> <br> <div class="col l2"> <a id="brandplus" class="marqueeplus1 remov"><i class="fa fa-times" aria-hidden="true"></i></a> </div> </div>')
                    .append().insertBefore('#marqaddnext1');

            });
            $(document).on('click', '.marqueeplus1.remov', function(e) {
                e.preventDefault();
                $(this).closest('div.row').remove();
            });
        });

    $(function() {
        function cloneform() {
            $("#faqform").clone().appendTo("#faq-form-box");
        }


        cloneform();

        $(document).on('click', '.addfaq', function() {
            cloneform();
        });

        $(document).on('click', '.closefaq', function() {
            $(this).closest('#faqform').remove()
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('select').formSelect();
        // $('.materialboxed').materialbox();
        $('.input-images').imageUploader();
        $('#project-detail').submit(function() {
            var text = $('#editor').html();
            $('#description').val(text);
        });
        $('#area-statement').submit(function() {
            var text = $('#editor1').html();
            $('#description1').val(text);
        });

        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'https://placehold.it/250x250'
            },
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
    <script>
    DecoupledEditor
        .create(document.querySelector('#editor1'))
        .then(editor => {
            const toolbarContainer = document.querySelector('#toolbar-container1');
            toolbarContainer.appendChild(editor.ui.view.toolbar.element);
        })
        .catch(error => {
            console.error(error);
        });
    </script>


</body>

</html>