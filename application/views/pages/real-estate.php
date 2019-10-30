<!DOCTYPE html>
<html lang="en">
<head>
  <?php  $this->load->view('includes/meta'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <style>
      .col-right-about.text-center {

    max-height: 400px;
    overflow: hidden;
    min-height: 400px;

}
  </style>
</head>
<body>
 <?php  $this->load->view('includes/gscript'); ?>
 <?php  $this->load->view('includes/header'); ?>

 <section class="main-about main-about-img">
        <div class="main-about-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>Real Estate Updates</h4>
                    <P><a href="<?php echo base_url()?>" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> Real Estate Updates</span> </P>
                </div>
            </div>
        </div>
    <div class="intro-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="col-right-about text-center">
                            <img src="<?php echo base_url().$result->image; ?>" alt="" class="img-fluid">
                    </div>
                    <div class="abt-text desktop-view">
                        <h4 class="mht"> </h4>
                        <p class="abt-para"><?php echo (!empty($result->content))?$result->content:''; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
  
 </section>
<?php  $this->load->view('includes/footer'); ?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/numscroller-1.0.js"></script>
</body>
</html>
