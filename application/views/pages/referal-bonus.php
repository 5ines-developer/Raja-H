<!DOCTYPE html>
<html lang="en">
<head>
  <?php  $this->load->view('includes/meta'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
 <?php  $this->load->view('includes/gscript'); ?>
 <?php  $this->load->view('includes/header'); ?>

 <section class="main-about main-about-img">
        <div class="main-about-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>REFERRAL BONUS</h4>
                    <P><a href="<?php echo base_url()?>" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> Referral Bonus</span> </P>
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
                                    <h4>RHl - REFERRAL BONUS</h4>
                                    <p>Choose Your Neighbors, and Get Rewards Bonus.</p>
                                </div>
                            </div>
                        </div>
                        <form action="<?php echo base_url('referral-bonus')?>" method="post" class="referal-form">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h6>REGISTRATION FORM</h6>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>YOUR NAME :</label>
                                        <input type="text" class="form-control" placeholder="Your Name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>YOU ARE :</label>
                                        <select type="text" class="form-control" placeholder="YOUR NAME" name="gender">
                                                <option value="">Select</option>
                                            <option value="">MALE</option>
                                            <option value="">FEMALE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>MOBILE NO :</label>
                                            <input type="text" class="form-control" placeholder="Mobile Number" name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>EMAIL ID :</label>
                                            <input type="text" class="form-control" placeholder="Email ID" name="email" required="">
                                        </div>
                                    </div>
                            </div>
                            <div class="row ">
                                    <div class="col-md-12">
                                        <h6>FRIEND DETAIL</h6>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>FRIEND NAME :</label>
                                            <input type="text" class="form-control" placeholder="Friend Name" required="" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>YOUR FRIEND'S PREFERRED CITY :</label>
                                            <select type="text" class="form-control" placeholder="YOUR NAME"  name="fcity">
                                                <option value="">Select</option>
                                                <option value="">BANGLORE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>MOBILE NO :</label>
                                                <input type="text" class="form-control" placeholder="Mobile Number" required="" name="fphone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-group">
                                                <label>EMAIL ID :</label>
                                                <input type="text" class="form-control" placeholder="Email ID" required="" name="femail">
                                            </div>
                                        </div>
                                        <div class=" col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn refer-btn">REFER A FRIEND</button>
                                                </div>
                                            </div>
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
 <script src="<?php echo base_url()?>assets/js/numscroller-1.0.js"></script>
</body>
</html>
