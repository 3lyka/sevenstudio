<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php bloginfo('language'); ?>"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Multipurpose Saas Startup HTML Template">
        <meta name="author" content="DynamicLayers">
        <?php wp_head();?>
        <title><?php bloginfo('name'); ?></title>
        
		<link rel="shortcut icon" type="<?php bloginfo('template_url'); ?>/image/x-icon" href="img/favicon.png">

    </head>
    <body data-spy="scroll" data-target="#navmenu" data-offset="70">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <header id="header" class="header-section">
            <div class="container">
                <nav class="navbar ">
                    <a href="index.html" class="navbar-brand"><img src="<?php bloginfo('template_url'); ?>/img/logo-dark.svg" alt="SevenStudio" width="150px"></a>
                    <div class="d-flex menu-wrap">
                       <div id="mainmenu" class="mainmenu">
                           <ul class="nav">
                               <li><a data-scroll class="nav-link active fw-bold" href="<?php echo home_url(); ?>">Главная<span class="sr-only">(current)</span></a> 
                                </li>
                                <li><a href="<?php echo home_url('/company'); ?>">О нас</a>
                                </li>
                                <li><a href="<?php echo home_url('/case-studies'); ?>">Кейсы</a> 
                                </li>
<!--                                 <li><a href="#">Блог</a> 
                                    <ul>
                                       <li><a href="blog-grid.html">Blog Grid</a></li>
                                       <li><a href="blog-classic.html">Blog Classic</a></li>
                                       <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?php echo home_url('/contacts'); ?>">Контакты</a></li>
                            </ul>
                       </div>

                    </div>
                </nav>
            </div>
		</header> <!--.header-section -->
		
        <div class="header-height"></div>