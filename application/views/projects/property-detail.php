<?php $this->ci =& get_instance(); $this->load->model('m_project');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php  $this->load->view('includes/meta'); ?>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
    <style>
    
    </style>
  </head>
  <body>
     <?php  $this->load->view('includes/gscript'); ?>
    <?php $this->load->view('includes/header.php'); ?>

    <?php if (!empty($result)) { foreach ($result as $key => $value) { ?>
    <section class="main-about main-project-img">
      <div class="main-contact-banner">
        <div class="container">
          <div class=" text-center">
            <h4><?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?></h4>
            <P
              ><a href="home.php" class="primary-page">Home </a
              ><span class="seperator">/</span
              ><span class="link-active"> Property Detail </span>
            </P>
          </div>
        </div>
      </div>
    </section>
    <section class="topsec">
      <div class="container">
        <div class="prop-head">
          <h4><?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?></h4>
          <p>
              <?php echo (!empty($value->location))?'<i class="fas fa-map-marker-alt"></i><span>'.$value->location.'</span>':''; ?>
            
          </p>
        </div>

        

          

               <?php if ($value->content_type == '1') { ?>
                    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="post-details">
                        <div class="prop-st box-shadow">
                            <h4>Property Detail</h4>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                <div class="bb"></div>
                                </div>
                            </div>
                            <p><?php echo (!empty($value->detail))?$value->detail:''; ?></p>
                                               
                    </div>
                    </div>
                    </div>
                </div>
              <?php  }elseif ($value->content_type == '2') { ?>


                <div class="row">
        
            <div class="col-md-12 col-lg-8 col-sm-12 col-12">
            <div class="post-details">

            
                <div class="prop-img">
                    <img src="<?php echo base_url().$value->banner ?>" alt="" class="img-fluid" />
                </div>
                <div class="prop-detail box-shadow">
                    <div class="prop-detail-title">
                        <ul class="prop-list">
                        <li class="list-menu">
                            <a href="#propertyDetail" class="list-link js-scroll-trigger active" id="list1">Property Detail</a>
                        </li>
                        <li class="list-menu">
                            <a href="#areaStatement" class="list-link js-scroll-trigger" >Area Statement</a>
                        </li>
                        <li class="list-menu">
                            <a href="#masterPlan" class="list-link js-scroll-trigger" >Master Plan</a>
                        </li>
                        <li class="list-menu">
                            <a href="#floorPlan" class="list-link js-scroll-trigger">Floor Plans</a>
                        </li>
                        <li class="list-menu">
                            <a href="#amenities" class="list-link js-scroll-trigger">Amenities</a>
                        </li>
                        <li class="list-menu">
                            <a href="#walkThrough" class="list-link js-scroll-trigger">Walk Through</a>
                        </li>
                        <li class="list-menu">
                            <a href="#gallery" class="list-link js-scroll-trigger">Gallery</a>
                        </li>
                        </ul>
                    </div>
                    <div class="prop-st " id="propertyDetail">
                        <h4>PROPERTY DETAIL</h4>
                        <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="bb"></div>
                        </div>
                        </div>
                        <p><?php echo (!empty($value->detail))?$value->detail:''; ?></p>
                    </div>
                </div>
                <div class="prop-st box-shadow"  id="areaStatement">
                    <h4>AREA STATEMENT</h4>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <div class="bb"></div>
                        </div>
                    </div>
                    <p><?php echo (!empty($value->areastatement))?$value->areastatement:''; ?> </p>
                </div>
                <div class="prop-st box-shadow" id="masterPlan">
                <h4>MASTER PLAN</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <div class="bb"></div>
                    </div>
                </div>
                <p><?php echo (!empty($value->materplan))?$value->materplan:''; ?></p>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="prop-map">
                        <a class="example-image-link" href="<?php echo base_url().$value->masterimage ?>" data-lightbox="example-set" ><img class="example-image img-fluid" src="<?php echo base_url().$value->masterimage ?>" alt=""/></a>
                    </div>
                    </div>
                </div>
                </div>
                <div class="prop-st box-shadow" id="floorPlan">
                <h4>FLOOR PLAN</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <div class="bb"></div>
                    </div>
                </div>
                <p><?php echo (!empty($value->floorplan))?$value->floorplan:''; ?></p>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="prop-floor">
                    <div class="floor slider" data-sizes="">


                        <?php 
                        if (!empty($value->floor)) {
                        foreach ($value->floor as $floor1 => $floor2) {

                            echo '<div>

                             <a class="example-image-link" href="'.base_url().$floor2->fimage.'" data-lightbox="example-set" ><img class="example-image img-fluid" src="'.base_url().$floor2->fthumb.'" alt=""/></a>
                         </div>';

                            
                        } } ?>
                                
                                     
                            </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="prop-st box-shadow" id="amenities">
                <h4>AMENITIES</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <div class="bb"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <ul class="prop-detail-list am-cc">
                            <?php

                            if (!empty($value->amenity)) {
                                 foreach ($value->amenity as $amenity1 => $amenity2) { 
                                   echo '<li><i class="fas fa-check"></i> <span class="facl">'.$amenity2->amenity.'</span></li>';
                                     
                                 } } ?>

                        
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </div>


            <div class="col-md-12 col-lg-4 col-sm-12 col-12" >
                <div  class="post-sidebar">
                    <div class="prop-form">
                    <h5>BOOK NOW</h5>
                    <form action="<?php echo base_url() ?>project-enquiry" method="post">
                        <div class="form-group">
                        <input type="text"class="form-control custom-form-control-prop " name="name" placeholder="Name"/> </div>
                        <div class="form-group">
                        <input type="text"class="form-control custom-form-control-prop " name="email" placeholder="Email"/> </div>
                        <div class="form-group">
                        <input type="text"class="form-control custom-form-control-prop " name="phone" placeholder="Phone"/> </div>
                        <div class="form-group">
                        <textarea type="text" rows="8"class="form-control custom-form-control-prop " name="msg" placeholder="Message"></textarea> </div>
                        <input type="hidden" value="<?php echo $_SERVER['QUERY_STRING']; ?>" name="query">
                        <input type="hidden" value="<?php echo $this->uri->segment(2) ?>" name="url">
                        <div class="">
                        <button class="btn prop-btn-send">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="prop-st box-shadow" id="walkThrough">
            <h4>WALK THROUGH</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="bb"></div>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <?php  $preAddres = $value->location;
                                            $newAddress = str_replace(' ', '%20', $preAddres);
                                            ?>

                    <iframe  width="100%" height="230px" src="https://maps.google.com/maps?width=100%&height=600&hl=en&coord=12°11'03.7,75°55'34.5&q=<?php echo $newAddress ?>+(bangalore)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe>

                </div>
                <div class="col-lg-8 col-md-6 ">
                    <ul class="prop-detail-list  cc">
                        <?php if (!empty($value->nearby)) {foreach ($value->nearby as $nearby1 => $nearby2) {
                                   echo '<li><i class="fas fa-map-signs"></i> <span class="wt">'.$nearby2->nearby.'</span></li>';
                        } } ?>
                    </ul>
                </div>
            </div>    
        </div>


        <div class="prop-st box-shadow" id="gallery">
            <h4>GALLERY</h4>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="bb"></div>
                </div>
            </div>  
            <div class="row">
                <?php if (!empty($value->gallery)) {foreach ($value->gallery as $gallery1 => $gallery2) {
                   echo '<div class="col-lg-3 col-md-6 col-sm-12 col-12 mb20 img-plr3">
                    <a class="example-image-link" href="'.base_url().$gallery2->image.'" data-lightbox="example-set" ><img class="example-image img-fluid" src="'.base_url().$gallery2->thumb.'" alt=""/></a>
                </div>';
                 } }?>
            </div>    
        </div>

             <?php }elseif ($value->content_type == '3') {?>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 prmb">
                        <div class="card">
                            <a href="#" class="tdn"> 
                                <div class="project-img">
                                    <img src="<?php echo (!empty($value->banner))?base_url().$value->banner:'https://via.placeholder.com/510x390' ?>" alt="" class="img-fluid">
                                    <div class="sale">
                                    <ul class="f-sale">
                                            <li><span class="fl">Featured</span> </li>
                                            <li><span class="sl"><?php echo (!empty($value->transaction_type))?$value->transaction_type:''; ?></span> </li>
                                    </ul>
                                </div>
                                
                                </div>                          
                                <div class="project-text">
                                    <p class="pr-name">Raja Sanidhi</p>
                                    <p class="pr-address"><?php echo (!empty($value->poses_date))?'<i class="fas fa-map-marker-alt"></i> '.$value->poses_date:''; ?></p>
                                    <p class="pr-area"><?php echo (!empty($value->project_type))?$value->project_type:''; ?></p>
                                </div>
                                <div class="card-footers">
                                    <ul class="pr-price">
                                        <li><span class="full-price"><?php echo (!empty($value->cost))?'&#8377; '.$value->cost:''; ?> </span> </li>
                                        <li><a style="text-decoration: none;" target="_blank" href="<?php echo (!empty($value->pdf))?base_url().$value->pdf:''; ?>"><span class="dt">Detail</span></a></li>
                                    </ul>
                                </div>
                            </a>
                        </div> 


                    </div>
                </div>
             <?php } ?>
        
      </div>
    </section>
    <?php  } } ?>
    <?php $this->load->view('includes/footer.php'); ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="<?php echo  base_url() ?>assets/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'></script>
    <script src="<?php echo  base_url() ?>assets/js/slick.js"></script>
    <script src="<?php echo  base_url() ?>assets/js/script.js"></script>
    <script src="<?php echo  base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script>
    //scrolling easing efect

        (function ($)
        { 
            "use strict"; 
        $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () 
        {             
            $('a.js-scroll-trigger').removeClass('active') 
            $(this).addClass('active'); 
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) 
            { 
                var target = $(this.hash); 
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); 
                if (target.length) 
                { 
                    $('html, body').animate({ scrollTop: (target.offset().top - 10) }, 1000, "easeInOutExpo"); 
                    return false; 
                } 
            } 
        }); 
        })(jQuery); 
    </script>

  </body>
</html>
