
<script type="text/javascript">
(function(d, src, c) { var t=d.scripts[d.scripts.length - 1],s=d.createElement('script');s.id='la_x2s6df8d';s.async=true;s.src=src;s.onload=s.onreadystatechange=function(){var rs=this.readyState;if(rs&&(rs!='complete')&&(rs!='loaded')){return;}c(this);};t.parentElement.insertBefore(s,t.nextSibling);})(document,
'//livesquare.in/livesq/scripts/track.js',

function(e){ LiveAgent.createButton('090cbf78', e); });
</script>
<noscript><p><img src="http://lswebanalytics.com/analytics/lsquare.php?idsite=138" style="border:0;" alt="" /></p></noscript> 

<!-- End lsquare Code -->

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup

--------------------------------------------------->


 <section class="footer">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="footer-container">
                    <p class="footer-title">CONTACT INFO</p>
                    <ul class="footer-list mb2">
                        <li><i class="fas fa-map-marker-alt"></i> <span class="f-cls">Raja Mahalakshami, F-2, # 12, Basappa Road Shantinagar Banglore-560 027</span></li>
                        <li><i class="fas fa-phone-alt"></i> <span><a href="tel: +91 9590 779 922" class="text-white">9590 779 922</a> </span></li>
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
                        <li><i class="fas fa-chevron-right"></i> <a href="<?php echo base_url('projects/').str_replace(" ","-",strtolower($value->slug.'')).'?q='.$value->projectid.'&c='.$value->cat_type.'' ?>" class="link"><?php echo $this->ci->m_project->categoryName($value->projectid,$value->cat_type); ?></a></li>
                        
                    <?php  }}?>
                    </ul>
                </div>
            </div>


        </div>

    </div>

 </section>

 <section class="copyright ">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 offset-lg-2 col-md-6 col-sm-12">
            <p>&copy; <?php echo date('Y') ?> All right reserved Raja Housing  - Developed by <a href="https://www.5ines.com/" target="_blank">5ine</a></p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
                    <ul class="social-icons">
                        <li class="soc-title">Follow Us</li>
                        <li><a target="_blank" href="https://www.facebook.com/rajahousinglimited/" class="btn-floating facebook btn-small waves-effect waves-light "><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://twitter.com/rajahousingblr" class="btn-floating twitter btn-small waves-effect waves-light "><i
                                    class="fab fa-twitter"></i></a></li>

                        <li><a target="_blank" href="https://www.youtube.com/channel/UCeKVrLO0-grW_dpF2YEaLRA" class="btn-floating youtube btn-small waves-effect waves-light "><i
                                    class="fab fa-youtube "></i></a></li>

                        <li><a target="_blank" href="https://www.linkedin.com/in/raja-housing-ltd-bangalore-396220b2/" class="btn-floating instagram btn-small waves-effect waves-light "><i class="fab fa-linkedin-in"></i>
                            </a></li>
                    </ul>
        </div>
        
    </div>
    </div>

    


    


 </section>