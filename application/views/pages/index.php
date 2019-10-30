<?php $this->ci =& get_instance(); $this->load->model('m_project');

 ?>

 <!DOCTYPE html>

<html lang="en">

<head>

  <?php  $this->load->view('includes/meta'); ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <style>
      .refer-bonus .card-body{
        box-shadow: 0px 0px 7px -1px #888;
      }
      .refer-bonus .card-body p{
        text-align: center;
font-size: 18px;
margin-top: 15px;
      }
      .refer-bonus .card{
        border: none;
      }

     .refer-bonus .read-more{margin: auto; margin-top: 37px; } 
    .refer-bonus img{
     width: auto;
height: 88px;
/* filter: invert(20%) sepia(4) hue-rotate(146deg) saturate(7) brightness(2); */

    }



 </style>

</head>

<body>
     <?php  $this->load->view('includes/gscript'); ?>
    

<header>

    <!-- nav start -->

    <?php  $this->load->view('includes/header'); ?>

    

     

    <!-- nav end -->

    <!-- home banner stAart -->

                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if (!empty($result)) {  foreach ($result as $key => $value) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key ?>" class="<?php echo $key=='0'?'active':'' ?>"></li>
                
            <?php } } ?>
            </ol>
            <div class="carousel-inner">
                <?php if (!empty($result)) {  foreach ($result as $key => $value) { ?>


                <div class="carousel-item <?php echo $key=='0'?'active':'' ?>">
                <div class="img-banner">
                <img class="d-block w-100" src="<?php echo (!empty($value->image))?base_url().$value->image:''; ?>" alt="<?php echo (!empty($value->alt))?$value->alt:'';?>" alt="<?php echo (!empty($value->alt))?$value->alt:'';?>">
            </div>
                    <div class="carousel-caption d-none d-md-block d-flex h-50 align-items-center justify-content-center">
                        <div>
                        <h1><?php echo (!empty($value->subtitle))?strtoupper($value->subtitle):'';?></h1>
                        <h2><?php echo (!empty($value->alt))?ucfirst($value->alt):'';?></h2>
                            
                        </div>
                    </div>
                </div>
                <?php } } ?>
                
                


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

       

    <!-- home banner end -->

</header>

<section class="fet-project">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-lg-5">

                <div class="project-title pl15">

                    <h4>FEATURED PROJECT</h4>

                    <p>An ISO 9001:2015 Certified Company.</p>

                </div>

            </div>

            <div class="col-md-7 col-lg-7"></div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="three-time slider" data-sizes="">



                <?php if (!empty($feature)) {

                    foreach ($feature as $key => $value) { ?>



                        <div class="card">

                        <a target="_blank" href="<?php echo base_url('projects/').str_replace(" ","-",strtolower($value->slug)).'?q='.$value->projectid.'&c='.$value->cat_type.'' ?>">

                        <div class="slide-card-container">

                            <div class="fet-image">
                                <img src="<?php echo (!empty($value->banner))?base_url().$value->banner:'https://via.placeholder.com/510x390' ?>" alt="<?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?>" class="slimg">
                            </div>

                            

                            <div class="sale">

                                <ul class="f-sale">

                                    <?php echo (!empty($value->f_tag))?'<li ><span class="fl">'.$value->f_tag.'</span> </li>':'<li ><span class="fl">Featured</span> </li>'; ?>

                                    <li ><span class="sl"><?php echo (!empty($value->transaction_type))?$value->transaction_type:''; ?></span> </li>

                                </ul>

                            </div>

                                    <?php echo (!empty($value->cost))?'<div class="price"><span class="total"> &#8377; '.$value->cost.'</span><br> </div>   ':''; ?>

                            <div class="content">

                                <p class="sl-title"><?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?></p>

                                <p class="map-loc"><span><?php echo (!empty($value->city))?'<i class="fas fa-map-marker-alt"></i> '.$value->city:''; ?></span></p> 

                                <p class="rooms">Project Type   : <?php echo (!empty($value->project_type))?$value->project_type:''; ?></p>

                                <p class="rooms">Posession Date : <?php echo (!empty($value->poses_date))?$value->poses_date:''; ?></p>

                            </div>

                        </div>

                        

                        </a>

                    </div>

                        

                <?php   } }?>

                           

                     

                    

                        

                </div>

            </div>

        </div>

    </div>

</section>

 <section class="rh-about">

    <div class="about-sec">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="col-left">

                        <h1>About Raja Housing</h1>

                        <p>The Raja Group has relished a enriching and ascending era in Bangalore. Started in 1890, when Bangalore was at a nascent stage and being actively involved in the exponential boom and development, we can confidently state the journey has been fulfilling and a wondrous learning experience. 

                        <p>Initially Raja Group started trading Grains from which entered into a wide spectrum of other businesses like Silk, Jewellery, Automobiles, Hospitality and Software. Presiding a phenomenal success in these ventures, we identified the potential in the Real Estate market and decided to capitalize it. This marked the beginning of Raja Housing ltd.</p>

                        

                        <a href="<?php echo base_url('about-us') ?>" class="custom-btn"> LEARN MORE</a>

                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                    <div class="col-right">

                        <div class="lazy slider" data-sizes="">

                            <div>

                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/ab1.jpg" >

                            </div>

                            <div>

                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/ab2.jpg" >

                            </div> 

                            <div>

                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/ab3.jpg" >

                            </div>  

                            <div>

                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/ab4.jpg" >

                            </div>  

                               

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="feature-sec refer-bonus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="project-title">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h4 class="text-center">REFERRAL BONUS</h4>
                                <p class="text-center">Choose Your Neighbors, and Get Rewards Bonus.</p>
                            </div>
                        </div>
                        
                    </div>
                        <div class="col-lg-9" style="margin: auto;">
                    <div class="row ">
                        <div class="col-lg-4  col-sm-6 col-md-6  mtf">
                            <div class="card">
                                <div class="card-body">
                                    <center><img src="<?php echo base_url()?>assets/img/images.svg" alt=""></center>
                                    <p class="f-details">Login</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  col-sm-6 col-md-6  mtf">
                            <div class="card">
                                <div class="card-body">
                                    <center><img src="<?php echo base_url()?>assets/img/images1.svg" alt=""></center>
                                    <p class="f-details">Refer Your Friend</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-md-6  mtf">
                            <div class="card">
                                <div class="card-body">
                                    <center><img src="<?php echo base_url()?>assets/img/images3.svg" alt=""></center>
                                    <p class="f-details">Earn Money</p>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-2  mtf read-more" >
                        <center>
                            <a href="<?php echo base_url()?>referral-bonus" class="custom-btn">Read More</a>
                            </center>
                        </div>
                </div>
                
            </div>
        </div>
    </div>


   <!--  <div class="numcount">

        <div class="container">

            <din class="row">

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">

                    <div class="num-icon text-center">

                        <p class="num-icon-size">

                            <i class="fas fa-home"></i><span class='numscroller' data-min='1' data-max='999' data-delay='20' data-increment='10'>999</span>

                        </p>

                        <p class="work">Completed Projects</p>

                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">

                        <div class="num-icon text-center">

                            <p class="num-icon-size">

                                <i class="fas fa-key"></i><span class='numscroller' data-min='1' data-max='720' data-delay='20' data-increment='10'>720</span>

                            </p>

                            <p class="work">Property sold</p>

                        </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">

                        <div class="num-icon text-center">

                            <p class="num-icon-size">

                                <i class="far fa-smile"></i><span class='numscroller' data-min='1' data-max='450' data-delay='20' data-increment='10'>450</span>

                            </p>

                            <p class="work">Happy Clients</p>

                        </div>

                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-6">

                        <div class="num-icon text-center">

                            <p class="num-icon-size">

                                <i class="fas fa-trophy"></i><span class='numscroller' data-min='1' data-max='120' data-delay='20' data-increment='10'>120</span>

                            </p>

                            <p class="work">Awards win</p>

                        </div>

                </div>

            </din>

        </div>

    </div> -->

 </section>

 <section class="testimonial">

    <div class="container ml10">

        <div class="row">

            <div class="col-md-12">

                <div class="project-title">

                    <h4>TESTIMONIALS</h4>

                    <p>Why Raja Housing!</p>

                </div>

            </div>

            <div class="col-md-12">

                    <div class="one-time slider" data-sizes="">

                        <div >

                            <div class="card">

                                <div class="card-container">

                                    <img src="<?php echo base_url() ?>assets/images/images.jpg" alt="">

                                    <p class="test-name">Mr.Ramesh Babu</p>

                                    <i class="quotes">

                                       <q id="q"> I sincerely thank and apreciate all the staff including the owners & developers of Raja Housing Ltd for making me a proud & satisfied owner of a beatiful home.</q>

                                    </i>

                                </div>

                            </div>

                        </div>

                        <div>

                            <div class="card">

                                <div class="card-container">

                                    <img src="<?php echo base_url() ?>assets/images/images.jpg" alt="">

                                    <p class="test-name">MS.Janaki</p>

                                    <i class="quotes">

                                            <q id="q"> Raja Housing have built us a beautiful flat which is our dream home. Everything in our flat was perfectly structured. It has been a pleasure working with Raja Housing and we hope to remain this relationship.</q>

                                    </i>

                                </div>

                            </div>

                        </div> 

                        <div>

                        <div class="card">

                            <div class="card-container">

                                <img src="<?php echo base_url() ?>assets/images/images.jpg" alt="">

                                <p class="test-name">Mr.Gopal Varma</p>

                                <i class="quotes">

                                        <q id="q"> Raja Housing was extremely supportive during my home buying process. Being a first time buyer I was tense and had a lot of questions. Raja Housing team were extremely supportive and constantly patient with me. I will suggest Raja Housing to everyone I know.</q>

                                </i>
                                </div>

                            </div>

                        </div>     

                    </div>

                </div>

        </div>

        <div class="row">

            

        </div>

    </div>

 </section>

 <section class="bottom-sec">

    <div class="container">

        <div class="row">
                        <div class="col-md-12  mb-2">
                            <div class="text">
                                <p class="contact-secondary-title address"> <span>ADDRESS : </span> Raja Housing Ltd , Raja Mahalakshmi
                                    Building ,
                                    F-2, # 12, Basappa Road, Shanthi Nagar,Bangalore-560 027.</p>
                            </div>
        
                        </div>
        
                        <div class="col-md-4 col-lg-4 col-sm-12  col-12 mb-2">
                            <!-- <h4 class="opt-title">Book By Phone</h4> -->
                            <div class="card custom-card contact">
                                <div class="row">
                                    <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                                        <div class="icon ct">
                                            <i class="fas fa-cash-register"></i>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                                        <div class="text">
                                            <p class="opt-title-in">SALES</p>
                                            <p class="contact-secondary-title"><a href="tel:9590779922">9590779922</a> <br> <a href="tel:080 49409970">080-49409970</a> <br>Email: <a
                                                    href="mailto:sales@rajahousingltd.com">sales@rajahousingltd.com</a> </p>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-4 col-lg-4 col-sm-12  col-12 mb-2">
                            <!-- <h4 class="opt-title">Give Your Feedback</h4> -->
                            <div class="card custom-card contact">
                                <div class="row">
                                    <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                                        <div class="icon ct">
                                            <i class="far fa-handshake"></i>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                                        <div class="text">
                                            <p class="opt-title-in">CRM </p>
                                            <p class="contact-secondary-title"><a href="tel:080 22104222">080 - 22104222</a>
                                                <br>Email: <a href="mailto:crm@rajahousingltd.com">crm@rajahousingltd.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-4 col-lg-4 col-sm-12  col-12 mb-2">
                            <!-- <h4 class="opt-title">Give Your Feedback</h4> -->
                            <div class="card custom-card contact">
                                <div class="row">
                                    <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                                        <div class="icon ct">
                                            <i class="fas fa-running"></i>
                                        </div>
                                    </div>
                                    <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                                        <div class="text">
                                            <p class="opt-title-in">CAREER </p>
                                            <p class="contact-secondary-title"><a href="tel:09902025582">09902025582</a>
                                                <br>Email: <a href="mailto: hr@rajahousingltd.com">hr@rajahousingltd.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
                    </div>

        <div class="contact">

            <div class="row">

                <div class="col-md-12">

                    <div class="contact-title">

                        <h4>SEND US A MESSAGE</h4>

                    </div>

                </div>

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                     <form action="<?php echo base_url() ?>contact-us" method="post" id="contactform">

                        <div class="row">

                            <div class="col-md-6 col-lg-6 col-sm-12 col-12">

                                <div class="form-group">

                                    <input type="text" class="form-control custom-form-control" name="name" placeholder="Full Name" required="">

                                </div>
                                <div class="form-group">

                                    <input type="text" name="phone" class="form-control custom-form-control" placeholder="Phone">

                                </div>

                                <div class="form-group">

                                    <input type="text" name="email" class="form-control custom-form-control" placeholder="Email">

                                </div>

                                <div class="form-group">

                                    <input type="text" name="sub" class="form-control custom-form-control" placeholder="Subject">

                                </div>


                                <div class="d-input">
                                        <div class="g-recaptcha" data-sitekey="6LeUFL8UAAAAAF5KwBXQXuw08TudWNNiUlt-nZLk"></div>
                                </div>
                                <div class="error text-danger" style="margin-bottom:10px;"></div>

                            </div>

                            <div class="col-md-6 col-lg-6 col-sm-12 col-12">

                                <div class="form-group">

                                    <textarea type="text" rows="8" class="form-control custom-form-control" name="msg" placeholder="Message"></textarea>

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                               <button class="btn btn-send">SEND MESSAGE</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

 </section>

<?php  $this->load->view('includes/footer'); ?>


 <!-- popup -->
    <div class='popup'>
        <div class='cnt'>
            <div >
            <h4>Thank you for visiting Raja Housing Ltd Website</h4>
            <p>We wish to inform you that our website is being revised and updated in line with RERA requirements.
                Hence, the images, stock photos, architect’s perspective of the rendered elevation etc., should be
                deemed to be or constitute, solicitations & marketing offer including within the rules and
                regulations set
                under the purview of the RERA. You are therefore requested to verify directly, all details and aspects
                of
                any proposed plans to book with RHL staff. Since this process of updating our website will be on for
                some time, we request your continued co-operation till we complete the updating process. Please note,
                that we will not be accepting any bookings or allotments based on the images, material, stock
                photography, projections, details, descriptions that are currently available and/or displayed on the
                website.
            </p>
            <p>
                You are therefore requested to directly verify all details and aspects of any proposed
                booking/acquisition of units/premises, directly with our authorized representatives or please call 9590
                779 922.
            </p>
            <p>
                We thank you for your patience and understanding.”
            </p>
            <a class="agree">I agree</a>
            </div>
        </div>
    </div>
    <!-- offer  -->
    <?php 
    if (!empty($offer)) { ?>

        <div class="modal fade custom-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #f2f2f2;">
               
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <a href="<?php echo (!empty($offer->link))?$offer->link:'' ?>">
                    <img class="offre-image" src="<?php echo (!empty($offer->image))?base_url().$offer->image:''; ?>" alt="" width="100%" height="auto">
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
        
    <?php } ?>


 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

 <script src='https://www.google.com/recaptcha/api.js'></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <script src="<?php echo base_url() ?>assets/js/slick.js"></script>

 <script src="<?php echo base_url() ?>assets/js/numscroller-1.0.js"></script>

 <script src="<?php echo base_url() ?>assets/js/script.js"></script>

   <script type="text/javascript">

             $(function(){

                 $('#contactform').on('submit', function(e) {

                  if(grecaptcha.getResponse() == "") {

                     e.preventDefault();

                    $('.error').text('Captcha is required');

                }

                });

             });

</script>

     <script type='text/javascript'>
    $(function() {
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.agree').click(function() {
            $('.popup ').hide();
            $('#overlay ').hide();
            setTimeout(() => {
                $('#exampleModalCenter').modal('show')
            }, 1500);
        });
    });
    </script>

</body>

</html>

