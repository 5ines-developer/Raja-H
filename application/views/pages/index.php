<!DOCTYPE html>
<html lang="en">
<head>
  <title>Raja Housing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body>
<header>
    <!-- nav start -->
    <?php  $this->load->view('includes/header'); ?>
    
     
    <!-- nav end -->
    <!-- home banner stAart -->
        <div class="banner-slider slider" data-sizes="">

            <?php 

            if (!empty($result)) {
               foreach ($result as $key => $value) { ?>

                <section class="home-banner" style="background-image:url(<?php echo (!empty($value->image))?base_url().$value->image:''; ?>);">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1 col-lg-2"></div>
                        <div class="col-md-10 col-lg-8 col-sm-12">
                            <div class="banner-title text-center">
                                <h3><?php echo (!empty($value->subtitle))?ucfirst($value->subtitle):''; ?></h3>
                                <h1><?php echo (!empty($value->subtitle))?strtoupper($value->subtitle):''; ?>
                        </div>
                        <div class="col-md-1 col-lg-2"></div>
                    </div>
                </div>           
            </section>
            <?php  } } ?>

            
            
        </div>
       
    <!-- home banner end -->
</header>
<section class="fet-project">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-5">
                <div class="project-title pl15">
                    <h4>FEATURED PROJECT</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-7"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="three-time slider" data-sizes="">
                    <div class="card">
                        <a href="#">
                        <div class="slide-card-container">
                            <img src="<?php echo base_url() ?>assets/img/slider1.jpg" alt="" class="slimg">
                            <div class="sale">
                                    <ul class="f-sale">
                                        <li > </li>
                                        <li ><span class="sl">For sale</span> </li>
                                    </ul>
                                </div>
                            <div class="price">
                                <span class="total">$555.568</span><br>
                                <span class="single">$5.348/sq.ft</span>
                            </div>
                            <div class="content">
                                <p class="sl-title">LUXARY VILLA IN LEGO PARK</p>
                                <p class="map-loc"><i class="fas fa-map-marker-alt"></i> <span>Drive Street,Loss Angeles, Us</span></p> 
                                <p class="rooms">Bedroom : 3 Bathroom : 2 Sq Ft : 350</p>
                                <p class="rooms">Single Family Home</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="cd-icon">
                                <i class="far fa-user"></i><span>Will Earnest</span>
                            </div>
                            <div class="cd-icon">
                                <i class="far fa-calendar-alt"></i><span>9 month ago</span>
                            </div>
                        </div>
                    </a>
                    </div>        
                    <div class="card">
                        <a href="#">
                        <div class="slide-card-container">
                            <img src="<?php echo base_url() ?>assets/img/slider2.jpg" alt="" class="slimg">
                            <div class="sale">
                                <ul class="f-sale">
                                        <li ><span class="fl">Featured</span> </li>
                                        <li ><span class="sl">For rent</span> </li>
                                </ul>
                            </div>
                            <div class="price">
                                    <span class="total">$555.568</span><br>
                                    <span class="single">$5.348/sq.ft</span>
                                </div>
                            <div class="content">
                                <p class="sl-title">LUXARY VILLA IN LEGO PARK</p>
                                <p class="map-loc"><i class="fas fa-map-marker-alt"></i> <span>Drive Street,Loss Angeles, Us</span></p> 
                                <p class="rooms">Bedroom : 3 Bathroom : 2 Sq Ft : 350</p>
                                <p class="rooms">Single Family Home</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="cd-icon">
                                <i class="far fa-user"></i><span>Will Earnest</span>
                            </div>
                            <div class="cd-icon">
                                <i class="far fa-calendar-alt"></i><span>9 month ago</span>
                            </div>
                        </div>
                        </a>
                    </div> 
                    <div class="card">
                        <a href="#">
                        <div class="slide-card-container">
                            <img src="<?php echo base_url() ?>assets/img/slider3.jpg" alt="" class="slimg">
                            <div class="sale">
                                    <ul class="f-sale">
                                            <li > </li>
                                            <li ><span class="sl">For sale</span> </li>
                                    </ul>
                                </div>
                            <div class="price">
                                    <span class="total">$555.568</span><br>
                                    <span class="single">$5.348/sq.ft</span>
                                </div>
                            <div class="content">
                                <p class="sl-title">LUXARY VILLA IN LEGO PARK</p>
                                <p class="map-loc"><i class="fas fa-map-marker-alt"></i> <span>Drive Street,Loss Angeles, Us</span></p> 
                                <p class="rooms">Bedroom : 3 Bathroom : 2 Sq Ft : 350</p>
                                <p class="rooms">Single Family Home</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="cd-icon">
                                <i class="far fa-user"></i><span>Will Earnest</span>
                            </div>
                            <div class="cd-icon">
                                <i class="far fa-calendar-alt"></i><span>9 month ago</span>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#">
                        <div class="slide-card-container">
                            <img src="<?php echo base_url() ?>assets/img/slider2.jpg" alt=""  class="slimg">
                            <div class="sale">
                                    <ul class="f-sale">
                                            <li ><span class="fl">Featured</span> </li>
                                            <li ><span class="sl">For sale</span> </li>
                                    </ul>
                                </div>
                            <div class="price">
                                    <span class="total">$555.568</span><br>
                                    <span class="single">$5.348/sq.ft</span>
                                </div>
                            <div class="content">
                                <p class="sl-title">LUXARY VILLA IN LEGO PARK</p>
                                <p class="map-loc"><i class="fas fa-map-marker-alt"></i> <span>Drive Street,Loss Angeles, Us</span></p> 
                                <p class="rooms">Bedroom : 3 Bathroom : 2 Sq Ft : 350</p>
                                <p class="rooms">Single Family Home</p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="cd-icon">
                                <i class="far fa-user"></i><span>Will Earnest</span>
                            </div>
                            <div class="cd-icon">
                                <i class="far fa-calendar-alt"></i><span>9 month ago</span>
                            </div>
                        </div>
                        </a>
                    </div>     
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
                        <p>ISO 9001:2015 certification is the quality management system certification </p>
                        <p>Best ISO certification provides all the certifications of ISO ( ISO 9001:2015, ISO 14001:2015, OHSAS 18001:2007, ISO 13485:2016 etc.), Company Registration, MSME Registration, CE Certification, Trademark, VAPT testing & Website design and Development services. We help clients to maintain their system according to ISO standards so clients can improve their system and avail benefits.</p>
                        <p>Best ISO certification provides all the certifications of ISO ( ISO 9001:2015, ISO 14001:2015, OHSAS 18001:2007, ISO 13485:2016 etc.), Company Registration, MSME Registration,.Best ISO certification provides all the certifications of ISO ( ISO 9001:2015, ISO 14001:2015, OHSAS 18001:2007, ISO 13485:2016 etc.), Company Registration, MSME Registration,.</p>
                        <a href="#" class="custom-btn"> LEARN MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="col-right">
                        <div class="lazy slider" data-sizes="">
                            <div>
                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/slider1.jpg" >
                            </div>
                            <div>
                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/slider2.jpg" >
                            </div> 
                            <div>
                                <img data-lazy="" src="<?php echo base_url() ?>assets/img/slider3.jpg" >
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="project-title">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                                <h4>AWESOME FEATURES</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row ">
                        <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                            <p><span><i class="fas fa-chair f-icon"></i></span><span class="f-title">Full Furnished</span></p>
                            <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                            <p><span><i class="fas fa-paint-roller f-icon"></i></span><span class="f-title">Royal Touch Paint</span></p>
                            <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                            <p><span><i class="fas fa-tape f-icon"></i></span><span class="f-title">Latest Interior Design</span></p>
                            <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                                <p><span><i class="fas fa-user-secret f-icon"></i></span><span class="f-title">Non Stop Security</span></p>
                                <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                                <p><span><i class="fas fa-tree f-icon"></i></span><span class="f-title">Living Inside a nature</span></p>
                                <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mtf">
                                <p><span><i class="fas fa-hammer f-icon"></i></span><span class="f-title">Luxurious Fitting </span></p>
                                <p class="f-details">Lorem Ipsum is simply dummy text of the printing </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 text-center mtimg">
                    <div class="f-img">
                        <img src="<?php echo base_url() ?>assets/img/f-img.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="numcount">
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
    </div>
 </section>
 <section class="testimonial">
    <div class="container ml10">
        <div class="row">
            <div class="col-md-12">
                <div class="project-title">
                    <h4>TESTIMONIALS</h4>
                    <p>Why Raja Housing! <a href="#">View</a></p>
                </div>
            </div>
            <div class="col-md-12">
                    <div class="one-time slider" data-sizes="">
                        <div >
                            <div class="card">
                                <div class="card-container">
                                    <img src="<?php echo base_url() ?>assets/img/test1.jpg" alt="">
                                    <p class="test-name">Lucas</p>
                                    <i class="quotes">
                                       <q id="q"> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</q>
                                    </i>
                                    <p class="author">-Ramasy</p>
                                    <p class="test-l">Business 2 People 1 Places Miles</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-container">
                                    <img src="<?php echo base_url() ?>assets/img/test2.jpg" alt="">
                                    <p class="test-name">Lucas</p>
                                    <i class="quotes">
                                            <q id="q"> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</q>
                                    </i>
                                    <p class="author">-Ramasy</p>
                                    <p class="test-l">Business 2 People 1 Places Miles</p>
                                </div>
                            </div>
                        </div> 
                        <div>
                        <div class="card">
                            <div class="card-container">
                                <img src="<?php echo base_url() ?>assets/img/test3.jpg" alt="">
                                <p class="test-name">Lucas</p>
                                <i class="quotes">
                                        <q id="q"> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</q>
                                </i>
                                <p class="author">-Ramasy</p>
                                <p class="test-l">Business 2 People 1 Places Miles</p>
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
            <div class="col-md-4 col-lg-4 col-sm-12  col-12">
                <h4 class="opt-title">Book By Phone</h4>
                <div class="card custom-card">
                    <div class="row">
                        <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                            <div class="icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                        </div>
                        <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                            <div class="text">
                                <p class="opt-title-in">+91-23232-2345-234</p>
                                <p class="secondary-title">Booking time: 09:00 - 20:00 hrs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12  col-12">
                    <h4 class="opt-title">Location Address</h4>
                    <div class="card custom-card">
                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                                <div class="text">
                                    <p class="opt-title-in">Address</p>
                                    <p class="secondary-title">Booking time: 09:00 - 20:00 hrs</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12  col-12">
                    <h4 class="opt-title">Give Your Feedback</h4>
                    <div class="card custom-card">
                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-12 col-lg-3">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-9 col-sm-9 col-md-12 col-lg-9">
                                <div class="text">
                                    <p class="opt-title-in">feedback@propeety.com</p>
                                    <p class="secondary-title">Help us improve</p>
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
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control custom-form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control custom-form-control" placeholder="mail@sitename.com">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control custom-form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <textarea type="text" rows="8" class="form-control custom-form-control" placeholder="Message"></textarea>
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url() ?>assets/js/slick.js"></script>
 <script src="<?php echo base_url() ?>assets/js/numscroller-1.0.js"></script>
 <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>
</html>
