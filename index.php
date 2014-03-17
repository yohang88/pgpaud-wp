<?php get_header() ?>

<section id="home-carousel">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
<!--
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
 -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <?php
                $cat    = get_category_by_slug( 'berita' );
                $cat_id = $cat->term_id;
                $args   = array(
                            'category'    => $cat_id,
                            'numberposts' => 2,
                            );

                $recent_posts = get_posts( $args );

                $n = 1;

                foreach($recent_posts as $post):
                    setup_postdata( $post );
            ?>
            <div class="item <?php echo ( $n != 1 ?: 'active') ?>">
                <div class="carousel-content">
                    <div class="container">
                        <div class="row">
                            <div class="table-row">
                                <div class="col-sm-5 table-cell">
                                    <div class="full-width">
                                        <?php mytheme_post_thumbnail('carousel-featured') ?>
                                    </div>
                                </div>
                                <div class="col-sm-7 table-cell" style="vertical-align: middle">
                                    <a href="<?php the_permalink() ?>"><h2 class="animated fadeInUp" data-animate-delay="1s"><?php the_title() ?></h2></a>
                                    <div class="animated fadeInUp" data-animate-delay="2s"><?php the_excerpt() ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-caption"></div>
            </div>

            <?php $n++; endforeach; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</section>



<section id="main-content">

    <div class="container">

        <div class="row">

            <div class="col-sm-4">
                <div id="home-sidebar">
                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-star"></i>
                        Informasi <br /> <strong> Penerimaan Mahasiswa Baru </strong>
                    </a>

                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-bar-chart-o"></i>
                        Portal Akademik <br /> <strong> Mahasiswa &amp; Dosen </strong>
                    </a>

                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-paperclip"></i>
                        Informasi <br /> <strong> Jadwal Kuliah </strong>
                    </a>

                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-globe"></i>
                        Informasi <br /> <strong> Beasiswa </strong>
                    </a>

                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-calendar"></i>
                        Informasi <br /> <strong> Kalender Akademik </strong>
                    </a>

                    <a href="#" class="btn btn-default btn-lg btn-sidebar-nav">
                        <i class="fa fa-users"></i>
                        Profil <br /> <strong> Dosen dan Staff </strong>
                    </a>
                </div>
            </div>

            <div class="col-sm-8">

                <div class="row">

                    <div class="col-md-7">
                        <div class="home-article">
                            <h3>Berita Terbaru</h3>

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="row">
                                <div class="col-sm-4">
                                    <?php mytheme_post_thumbnail('thumb-square') ?>
                                </div>
                                <div class="col-sm-8">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                            <?php endforeach; ?>

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 4,
                                            'offset'      => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><?php echo get_the_date() ?></strong>
                                </div>
                                <div class="col-sm-8">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </div>
                            </div>

                            <?php endforeach; ?>


                            <div class="clearfix" style="margin-bottom: 35px"></div>

                            <h3>Artikel Terbaru</h3>
                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="row">
                                <div class="col-sm-4">
                                    <?php mytheme_post_thumbnail('thumb-square') ?>
                                </div>
                                <div class="col-sm-8">
                                    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                    <?php the_excerpt() ?>
                                </div>
                            </div>

                            <?php endforeach; ?>

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 4,
                                            'offset'      => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="row">
                                <div class="col-sm-4">
                                    <strong><?php echo get_the_date() ?></strong>
                                </div>
                                <div class="col-sm-8">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </div>
                            </div>

                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="home-article">
                            <h3>Pengumuman</h3>

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <?php mytheme_post_thumbnail('thumb-wide') ?>
                            <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                            <?php the_excerpt() ?>

                            <?php endforeach; ?>

                            <?php
                                $cat    = get_category_by_slug( 'berita' );
                                $cat_id = $cat->term_id;
                                $args   = array(
                                            'category'    => $cat_id,
                                            'numberposts' => 4,
                                            'offset'      => 1,
                                            );

                                $recent_posts = get_posts( $args );

                                foreach($recent_posts as $post):
                                    setup_postdata( $post );
                            ?>

                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </div>
                                <div class="col-xs-12">
                                    <strong><?php echo get_the_date() ?></strong>
                                </div>
                            </div>

                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

<?php get_footer() ?>