<!DOCTYPE html>
<html lang="en">
<head>
  <title>Raja Housing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/sitemap.css">
  

</head>
<body>
 <?php include 'assets/include/header.php';?>

 <section class="main-about main-project-img">
        <div class="main-contact-banner">
            <div class="container">
                <div class=" text-center">
                    <h4>SITEMAP</h4>
                    <P><a href="home" class="primary-page">Home </a><span class="seperator">/</span><span class="link-active"> sitemap </span> </P>
                </div>
            </div>
        </div>
 </section>
 <section class="career">
    <div class="container-fluid">
        <!-- partial:index.partial.html -->

        <figure class="treefiger">
        <ul class="tree">
            <li><code class="main-menu"><a href="index">Home</a></code>
            <ul>
                <li class="list-menu"><code class="sub-menu"><a href="about-us">About</a></code> </li>
                <li class="list-menu"><code  class="sub-menu"><a href="career">Career</a></code> </li>
                <li class="list-menu"><code  class="sub-menu"><a href="contact-us">Contact</a></code> </li>
                <li class="list-menu"><code  class="sub-menu"><a href="real-estate">Real Estate</a></code> </li>
                <li class="list-menu" ><code  class="sub-menu"><a href="project-list">Projects</a></code>
                  <ul>
                    <?php foreach ($result as $key => $value) {
                     echo '<li><code class="sub-menu-child"><a href="#">'.$value->category.'</a></code>';
                     if(!empty($value->child)){
                        echo '<ul>';
                          foreach ($value->child as $ckey => $cvalue) {
                            echo '<li><code class="sub-menu-child"><a href="#">'.$cvalue->subcategory.'</a></code>';
                            if(!empty($cvalue->child)){
                              echo '<ul>';
                                foreach ($cvalue->child as $cckey => $ccvalue) {
                                  echo '<li><code class="sub-menu-child"><a href="#">'.$ccvalue->supercategory.'</a></code></li>';
                                }
                              echo '</ul> </li>';
                            }
                            else{
                              echo '</li>';
                            }
                          }
                        echo '</ul> </li>';
                      }else{
                        echo '</li>';
                      }

                    }?>
                  </ul>
                    
                    
                </li>
            </ul>
            </li>
        </ul>
        </figure>
        
<!-- partial -->
<!-- partial:index.partial.html -->
<ul class="sitemap">
  <li><a href="index">Home</a>
    <ul>
      <li><a href="about-us">About</a>
        
      </li>
      <li><a href="career">Career</a>
        
      </li>
      <li><a href="contact-us">Contact Us</a>
        
      </li>
      <li><a href="real-estate">Real Estate Updates</a>
       
      </li>
      <li class="list-menu" ><code  class="sub-menu"><a href="project-list">Projects</a></code>
                  <ul>
                    <?php foreach ($result as $key => $value) {
                     echo '<li><a href="#">'.$value->category.'</a>';
                     if(!empty($value->child)){
                        echo '<ul>';
                          foreach ($value->child as $ckey => $cvalue) {
                            echo '<li><a href="#">'.$cvalue->subcategory.'</a>';
                            if(!empty($cvalue->child)){
                              echo '<ul>';
                                foreach ($cvalue->child as $cckey => $ccvalue) {
                                  echo '<li><a href="#">'.$ccvalue->supercategory.'</a></li>';
                                }
                              echo '</ul> </li>';
                            }
                            else{
                              echo '</li>';
                            }
                          }
                        echo '</ul> </li>';
                      }else{
                        echo '</li>';
                      }

                    }?>
                  </ul>
                    
                    
      </li>
     
    </ul>
  </li>
</ul>
<!-- partial -->
    </div>
 </section>

 <?php include 'assets/include/footer.php';?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
