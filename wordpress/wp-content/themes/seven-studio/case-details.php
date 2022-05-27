<?php
/*
Template Name: case-detail

*/

// … остальной код шаблона

?>

<?php get_header(); ?>
     
        <section class="case-details padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 sm-padding">
                        <div class="case-details-wrap">
                            <div id="case-details-carousel" class="case-details-carousel owl-carousel">
                                <div class="case-item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/hosting-post-1.jpg" alt="img">
                                </div>
                                <div class="case-item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/hosting-post-1.jpg" alt="img">
                                </div>
                                <div class="case-item">
                                    <img src="<?php bloginfo('template_url'); ?>/img/hosting-post-1.jpg" alt="img">
                                </div>
                            </div>
                            <div class="case-heading mt-40">
                                <h2>Project Description</h2>
                                <p>The new functions coming to construction for equipment mathematics promise make life easier for owners and equipment managers. Sure, they’re reducing waste and lowering costs, but the real transformation on the horizon is one where advanced streams of data combine to create entirely new ways managing machines.</p>
                                <p>There are some big shifts taking place in the field of construction equipment mathematics. with the mathematics devices in vehicles right from the manufacturers, to the standardization and integration.</p>
                            </div>
                            <div class="row case-list-wrap">
                                <div class="col-md-6 xs-padding">
                                    <ul class="case-list">
                                        <li><i class="fas fa-thumbs-up"></i>Installation of final floor covering, such as floor tile, carpet, or wood flooring.</li>
                                        <li><i class="fas fa-thumbs-up"></i>Building inspector visits if necessary to approve utilities and framing.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 xs-padding">
                                    <ul class="case-list">
                                        <li><i class="fas fa-thumbs-up"></i>If required obtain approval from HOA (homeowners association) or ARC architectural review committee.</li>
                                        <li><i class="fas fa-thumbs-up"></i>Cover outer walls and roof in OSB or plywood and a water-restive more barrier.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 sm-padding">
                        <div class="case-sidebar-wrap">
                            <div class="case-sidebar-item mb-50">
                                <h2>Project Details</h2>
                                <ul class="case-sidebar-list">
                                    <li><span>Client Name:</span>Kyle Frederick</li>
                                    <li><span>Budget:</span>$100000</li>
                                    <li><span>Categories:</span>Saas Softwere</li>
                                    <li><span>Completed:</span>2019</li>
                                    <li><span>Area:</span>450,000 m2</li>
                                </ul>
                                <a href="#" class="default-btn btn-blue">Lunch Project</a>
                            </div>
<!--                             <div class="case-sidebar-item brochures-btn">
                                <h2>Brochures</h2>
                                <a href="#" class="default-btn btn-blue">Download.PDF <i class="fas fa-download"></i></a>
                                <a href="#" class="default-btn btn-blue">Download.DOC <i class="fas fa-download"></i></a>
                                <a href="#" class="default-btn btn-blue">Download.PPT <i class="fas fa-download"></i></a>
                            </div> -->
                            <div class="case-sidebar-item brochures-btn">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/. case-details -->
        
 <?php get_footer() ?>