<?php get_header() ?>

<section id="wrapper">
    <div class="container">
        <div class="row">
            <div id="wrapper-content">
                <div id="wrapper-content-top">
                    <div class="col-sm-3">
                        <ul id="quicklinks-carousel" class="nav nav-pills nav-stacked">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Messages</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div id="header-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 5,
                                            );

                                $recent_posts = get_posts( $args );

                                $n = 0;

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>
                                <li data-target="#header-carousel" data-slide-to="<?php echo $n ?>" class="<?php echo ($n == 0 ? "active" : "") ?>"></li>

                            <?php $n++; endforeach; ?>

                            </ol>
                            <div class="carousel-inner">
                                <?php

                                    $n = 0;

                                    foreach($recent_posts as $post):
                                        setup_postdata( $post );
                                ?>

                                <div class="item <?php echo ($n == 0 ? "active" : "") ?>">
                                    <?php mytheme_post_thumbnail('thumb-single') ?>
                                </div>

                                <?php $n++; endforeach; ?>
                            </div>
                            <a class="left carousel-control" href="#header-carousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#header-carousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="block common">
                            <h2><i class="fa fa-clock-o fa-lg fa-fw"></i> UAD News</h2>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>


                <div class="col-sm-4">
                    <div class="block common spotlight-top">
                        <h2><i class="fa fa-clock-o fa-lg fa-fw"></i> Events</h2>
                        <div class="row">
                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 2,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="col-md-6">
                                <a href="<?php the_permalink() ?>">
                                    <?php mytheme_post_thumbnail('thumb-single') ?>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h3 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            </div>
                            <div class="clearfix"></div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="block common spotlight-top">
                        <h2><i class="fa fa-heart fa-lg fa-fw"></i> Announcements</h2>
                        <div class="row">
                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 2,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="col-md-6">
                                <a href="<?php the_permalink() ?>">
                                    <?php mytheme_post_thumbnail('thumb-single') ?>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h3 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            </div>
                            <div class="clearfix"></div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="block common spotlight-top">
                        <h2><i class="fa fa-heart fa-lg fa-fw"></i> Research &amp; Publications</h2>
                        <div class="row">

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 2,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="col-md-6">
                                <a href="<?php the_permalink() ?>">
                                    <?php mytheme_post_thumbnail('thumb-single') ?>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <h3 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            </div>
                            <div class="clearfix"></div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-8">
                    <div id="home-latest-news" class="block common">
                        <h2><i class="fa fa-heart fa-lg fa-fw"></i> Lastest News</h2>

                        <div class="row">

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 5,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="col-xs-12 col-sm-5 col-md-3">
                                <a href="<?php the_permalink() ?>">
                                    <?php mytheme_post_thumbnail('thumb-single') ?>
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-9">
                                <h3 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                <div class="article-content">
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="block common">
                        <ul id="home-banner-links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <h4>Online Journal</h4>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <h4>Info Beasiswa</h4>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <h4>SI Akademik</h4>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <h4>Info Karir</h4>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
