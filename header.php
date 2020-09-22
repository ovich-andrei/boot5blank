<!doctype html>
<html <?php language_attributes(); ?> class="no-js h-100">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
<!--        <link href="--><?php //echo get_template_directory_uri(); ?><!--/img/icons/touch.png" rel="apple-touch-icon-precomposed">-->
        <!-- CSS only -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
    <body <?php body_class('d-flex flex-column h-100'); ?>>


    <!-- header -->
    <header id="masthead" class="site-header <?php if (get_theme_mod('sticky_header', 0)) : echo 'sticky-top'; endif; ?>">

        <!-- nav -->
        <nav class="nav navbar navbar-expand-md navbar-dark fixed-top bg-navbar bg-dark" role="navigation">

            <div class="container">

                <div class="d-flex">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
                        </a>
                    </div>
                    <!-- /logo -->
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="ml-2 mb-0 text-white d-none d-md-block" style="font-size: 19px"><?php bloginfo( 'name' ); ?></a>

                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php boot5blank_nav(); ?>


            </div>
        </nav>
        <!-- /nav -->

    </header>
    <!-- /header -->

    <!-- wrapper -->
    <div class="wrapper mt-5 pb-5">

        <!-- container -->
        <div class="container ">


