<!DOCTYPE html>
<html lang="en">
<head>
  <title>Raja Housing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
  <style>
    .project-img img{
      min-height: 266px;
    }
  </style>
</head>
<body>
 <?php $this->load->view('includes/header.php'); ?>

 <section class="main-about main-project-img">
        <div class="main-contact-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>PROJECT LIST</h4>
                    <P><a href="<?php echo base_url() ?>" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> project-list </span> </P>
                </div>
            </div>
        </div>
 </section>
<section class="list"> 
    <div class="container">
        <div class="row">
            <?php if (!empty($result)) {
                foreach ($result as $key => $value) {
                    foreach ($value->detail as $detail1 => $detail2) {
                        ?>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 prmb">
                <div class="card">
                    <a target="_blank" href="<?php echo base_url('projects/').str_replace(" ","-",strtolower($value->supercategory)).'?q='.$value->id.'&c=super-category' ?>" class="tdn"> 
                        <div class="project-img">
                            
                            <img src="<?php echo (!empty($detail2->banner))?base_url().$detail2->banner:'https://via.placeholder.com/510x390' ?>" alt="" class="img-fluid">
                            <div class="sale">
                                    <ul class="f-sale">
                                            <li><span class="fl">Featured</span> </li>
                                            <li><span class="sl"><?php echo (!empty($detail2->transaction_type))?$detail2->transaction_type:''; ?></span> </li>
                                    </ul>
                                </div>
                        </div>                          
                        <div class="project-text">
                            <p class="pr-name"><?php echo (!empty($value->supercategory))?$value->supercategory:''; ?></p>
                            <p class="pr-address"><?php echo (!empty($detail2->city))?'<i class="fas fa-map-marker-alt"></i> '.$detail2->city:''; ?></p>
                            <p class="pr-area">Project Type   : <?php echo (!empty($detail2->project_type))?$detail2->project_type:''; ?></p>
                            <p class="pr-area">Posession Date : <?php echo (!empty($detail2->poses_date))?$detail2->poses_date:''; ?></p>
                        </div>
                        <div class="card-footers">
                            <ul class="pr-price">
                                <li><span class="full-price"><?php echo (!empty($detail2->cost))?'&#8377; '.$detail2->cost:''; ?></span> </li>
                                <li><a style="text-decoration: none;" target="_blank" href="<?php echo base_url('projects/').str_replace(" ","-",strtolower($value->supercategory)).'?q='.$value->id.'&c=super-category' ?>"><span class="dt">Detail</span></a></li>
                            </ul>
                        </div>
                    </a>
                </div> 
            </div>
        <?php } } } ?>
            
            
            
            
            
            
            
        
        </div>
        <!-- <nav aria-label="...">
                <ul class="pagination custom-pagination">
                  <li class="page-item ">
                    <a class="page-link" href="#" tabindex="-1">PREV</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item ">
                    <a class="page-link active" href="#">2 </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">NEXT</a>
                  </li>
                </ul>
              </nav> -->
    </div>
    
</section>
 <?php $this->load->view('includes/footer.php'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
