<?php
/*
Template Name: case-studies

*/

// … остальной код шаблона

?>

<?php get_header(); ?>
      
        <section class="case-studies-section bd-bottom padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="project-item">
                            <img src="<?php bloginfo('template_url'); ?>/img/portfolio-5.jpg" alt="img">
                            <div class="project-content">
                                <span>Marketing</span>
                                <h3><a href="#">Land from day very fill that midst stars one dominion.</a></h3>
                                <a href="<?php echo home_url('/case-studies/case-details'); ?>" class="read-more"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/. project-section -->
        
        <div class="sponsor-section bg-grey padding-60">
            <div class="container">
                <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-1.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-2.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-3.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-4.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-5.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-6.png" alt="sponsor">
                    </div>
                    <div class="sponsor-item">
                        <img src="<?php bloginfo('template_url'); ?>/img/sponsor-3.png" alt="sponsor">
                    </div>
                </div>
            </div>
        </div><!--/. sponsor-section -->
        
        
        <?php get_footer(); ?>