 <section class="footer">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="footer-container">
                    <p class="footer-title">CONTACT INFO</p>
                    <ul class="footer-list mb2">
                        <li><i class="fas fa-map-marker-alt"></i> <span class="f-cls">Raja Mahalakshami, F-2, # 12, Basappa Road Shantinagar Banglore-560 027</span></li>
                        <li><i class="fas fa-phone-alt"></i> <span><a href="tel: +91 9590 779 922" class="text-white">9590 779 922M</a> / <a href="tel: +91 9090 989 897" class="text-white">9090 989 897</a></span></li>
                        <li><i class="far fa-envelope"></i> <span><a href="mailTo: Sales@rajahousingltd.com" class="mail">Sales@rajahousingltd.com,</a> 
</span></li>
                        <li><i class="far fa-envelope"></i> <span><a href="mailTo: Crm@rajahousingltd.com" class="mail">Crm@rajahousingltd.com</a></span></li>
                        <!-- <li><i class="fas fa-fax"></i> <span>FAX: 123 235465</span></li> -->
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="footer-container">
                    <p class="footer-title">USEFUL LINKS</p>
                    <ul class="footer-list">
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url() ?>" class="link">Home</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url() ?>about-us" class="link">About Us</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url() ?>career" class="link">Career</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url() ?>contact-us" class="link">Contact Us</a></li>
                        <li><i class="fas fa-chevron-right"></i> <a href="#" class="link">Real Estate Updates</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="footer-container">
                    <p class="footer-title">Featured Project</p>
                    <ul class="footer-list">
                        <?php $featured = $this->ci->project->featured();                        
                    if (!empty($featured)) {
                    foreach ($featured as $key => $value) {?>
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url('projects/').str_replace(" ","-",strtolower($this->ci->m_project->categoryName($value->projectid,$value->cat_type))).'?q='.$value->projectid.'&c='.$value->cat_type.'' ?>" class="link"><?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?></a></li>
                        
                    <?php  }}?>
                    </ul>
                </div>
            </div>


        </div>

    </div>

 </section>

 <section class="copyright ">

    <p>&copy; <?php echo date('Y') ?> All right reserved Raja Housing  - Developed by <a href="https://www.5ines.com/" target="_blank">5ine</a></p>

 </section>