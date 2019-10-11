<?php
$url = basename($_SERVER['PHP_SELF']);
?>
<header>
    <!-- nav start -->
      <nav class="navbar paddind-navbar navbar-expand-lg  custom-navbar" id="navbar">
            <div class="container-fluid ">
                <a class="navbar-brand navbar-brand-logo" href="#">
                    <img src="assets/img/logo.png" alt="logo"  > 
                </a>
                <a href="javascript:void(0)" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"                      aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto navbar-left custom-nav">
                            <li class="nav-item ">
                                    <a class="nav-link  " href="index.php">HOME </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link <?php echo ($url == 'about-us.php' ? 'active':''); ?>" href="about-us.php">ABOUT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($url == 'project-list.php' ? 'active':''); ?>" href="project-list.php">PROJECTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($url == 'career.php' ? 'active':''); ?>" href="career.php">CAREER</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($url == 'contact-us.php' ? 'active':''); ?>" href="contact-us.php">CONTACT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($url == 'real-estate.php' ? 'active':''); ?>" href="real-estate.php">REAL ESTATE UPDATES</a>
                            </li>
                    </ul>
                </div>   
            </div>
        </nav>
    <!-- nav end -->
</header>
