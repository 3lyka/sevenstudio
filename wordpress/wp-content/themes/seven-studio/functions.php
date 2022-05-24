<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
wp_enqueue_style( 'fontname', get_template_directory_uri() . '/css/fontawesome.min.css');
wp_enqueue_style( 'themify', get_template_directory_uri() . '/css/themify-icons.css');
wp_enqueue_style( 'elegant-line', get_template_directory_uri() . '/css/elegant-line-icons.css');
wp_enqueue_style( 'elegant-font', get_template_directory_uri() . '/css/elegant-font-icons.css');
wp_enqueue_style( 'saasbiz-icons', get_template_directory_uri() . '/css/saasbiz-icons.css');
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css');
wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css');
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.min.css');
wp_enqueue_style( 'pricing', get_template_directory_uri() . '/css/pricing-table.css');
wp_enqueue_style( 'odometer', get_template_directory_uri() . '/css/odometer.min.css');
wp_enqueue_style( 'venobox', get_template_directory_uri() . '/css/venobox/venobox.css');
wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.css');
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css');
wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');

	function theme_name_scripts() {
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/vendor/tether.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/js/vendor/jquery.slicknav.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'smooth', get_template_directory_uri() . '/js/vendor/smooth-scroll.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'venobox', get_template_directory_uri() . '/js/vendor/venobox.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri() . '/js/vendor/jquery.ajaxchimp.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'YTPlayer', get_template_directory_uri() . '/js/vendor/jquery.mb.YTPlayer.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/js/vendor/jquery.nice-select.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'pricing-switcher', get_template_directory_uri() . '/js/vendor/pricing-switcher.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/vendor/waypoints.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/js/vendor/odometer.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/vendor/wow.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), 'null', true );

}
add_theme_support('tittle-tag');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
?>