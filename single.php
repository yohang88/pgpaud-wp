<?php get_header() ?>
<section id="wrapper">
    <div class="container">
        <div class="row">
            <div id="wrapper-content">
                <div>
                <!-- <div class="table-row"> -->
                    <div id="single-header">
                        <div class="jumbotron">
                            <div class="col-sm-4 header-cover" style="padding: 0">
                                <?php mytheme_post_thumbnail('thumb-single') ?>
                            </div>
                            <div class="col-sm-8 header-caption">
                                <h3 data-animate="fadeInUp" data-animate-delay="1"><?php the_title(); ?></h3>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-8 col-sm-push-4">
                    <div id="content" class="article">
                        
                        <?php if (have_posts()) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                            <?php endwhile; ?>
                        <?php else : ?>

                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-sm-4 col-sm-pull-8">
                    <div id="common-sidebar">


                        <div class="widget">
                            <h4>Berita Terbaru</h4>
                            <ul>
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
                                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
