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

 <section class="main-about main-contact-img">
        <div class="main-contact-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>CONTACT US</h4>
                    <P><a href="home.php" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> Contact Us</span> </P>
                </div>
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
                                    <p class="contact-secondary-title">
                                        <a href="tel:080 22104222">080 - 22104222</a><br>Email: <a href="mailto:crm@rajahousingltd.com">crm@rajahousingltd.com</a></p>
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
                                    <p class="contact-secondary-title">
                                        <a href="tel:09902025582">09902025582</a><br>Email: <a href="mailto: hr@rajahousingltd.com">hr@rajahousingltd.com</a></p>
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
                    
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12 col-12 pad-r">
                                <form action="<?php echo base_url() ?>contact-us" method="post" id="contactform">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control custom-form-control" placeholder="Full Name *" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control custom-form-control" placeholder="Email id" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control custom-form-control" placeholder="Phone Number *" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="sub" class="form-control custom-form-control" placeholder="Subject" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" name="msg" rows="7" class="form-control custom-form-control" placeholder="Message"></textarea>
                                    </div>

                                    <div class="d-input">
                                        <div class="g-recaptcha" data-sitekey="6LeUFL8UAAAAAF5KwBXQXuw08TudWNNiUlt-nZLk"></div>
                                    </div>
                                    <div class="error text-danger" style="margin-bottom:10px;"></div>

                                    <div class="form-group">
                                        <button class="btn btn-send" type="submit" name="submit">SEND MESSAGE</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12 col-12 pad-l">
                                <div class="contact-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1944.1097736610275!2d77.59468845703466!3d12.957798614121945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15d072e436fd%3A0x28da4be1d22d3474!2sRaja%20Housing%20Limited!5e0!3m2!1sen!2sin!4v1568636358601!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <?php  $this->load->view('includes/footer'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
</body>
</html>
