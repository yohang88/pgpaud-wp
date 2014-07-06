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


<nav id="navigation-top" class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-top-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navigation-top-collapse',
        'menu_class'      => 'nav navbar-nav',
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'walker'          => new wp_bootstrap_navwalker()
        ) ); ?>

    </div>
</nav>

<header id="main-header">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="site-logo" data-animate="fadeInUp" data-animate-delay="2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-uad.png" />
                    <h1>Pendidikan Guru PAUD</h1>
                    <h2>Universitas Ahmad Dahlan</h2>
                </div>
            </div>
            <div class="col-xs-12">
                <nav id="navigation-main" class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-main-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <?php wp_nav_menu( array(
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navigation-main-collapse',
                        'menu_class'      => 'nav navbar-nav',
                        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        'walker'          => new wp_bootstrap_navwalker()
                        ) ); ?>

                </nav>
            </div>
        </div>
    </div>

</header>
