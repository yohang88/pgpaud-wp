<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'nav navbar-nav',
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ) ); ?>

    </div>
</nav>

<div class="header-bg">
    <header id="main-header">

        <div class="container">
            <div id="site-logo" data-animate="fadeInUp" data-animate-delay="2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-uad.png" />
                <h1>Pendidikan Guru PAUD</h1>
                <h2>Universitas Ahmad Dahlan</h2>
            </div>
        </div>

    </header>
</div>
