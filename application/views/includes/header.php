<?php   $this->ci =& get_instance(); ?>
<nav class="navbar paddind-navbar navbar-expand-lg  custom-navbar" id="navbar">
            <div class="container-fluid ">
                <a class="navbar-brand navbar-brand-logo" href="#">
                    <img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo"  > 
                </a>
                <a href="javascript:void(0)" class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"                      aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </a>
                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto navbar-left custom-nav">
                            <li class="nav-item ">
                                    <a class="nav-link active" href="index.php">HOME </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about-us.php">ABOUT US</a>
                                </li>

                                <?php  
                                $output = $this->ci->project->projects();
                                
                                  ?>
                                <li class="nav-item dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn dropdown-toggle"
                                   href="">
                                   Projects
                                </a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                            <?php 		foreach ($output as $key => $value) {
                                    if(!empty($value->child)){
                                        echo ' <li class="dropdown-submenu"> <a class="dropdown-item con" tabindex="-1" href="#">'.$value->category.'</a>				
                                        <ul class="dropdown-menu">';
                                        foreach ($value->child as $ckey => $cvalue) {
                                            if(!empty($cvalue->child)){
                                                echo '<li class="dropdown-submenu"><a class="dropdown-item con" href="#">'.$cvalue->subcategory.'</a> 
                                                <ul class="dropdown-menu">';
                                                foreach ($cvalue->child as $cckey => $ccvalue) {
                                                    echo ' <li><a class="dropdown-item" href="#">'.$ccvalue->supercategory.'</a></li>';
                                                }
                                                echo '</ul> </li>';						
                                            }else{
                                                echo ' <li><a class="dropdown-item" href="#">'.$cvalue->subcategory.'</a></li>';
                                            }
                                        }				
                                        echo '</ul> </li>';
                                    }else{
                                        echo '<li><a class="dropdown-item" href="'.base_url('projects/').str_replace(" ","-",strtolower($value->category)).'?q='.$value->id.'&c=parent-category'.'">'.$value->category.'</a></li>';
                                    }
                                }?>
                                    
                                   
                                </ul>
                        </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">CAREER</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact-us.php">CONTACT US</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">REAL ESTATE UPDATES</a>
                                </li>
                        
                    </ul>
                </div>   
            </div>
        </nav>