<?php get_header() ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

<section id="single-header">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="table-row">
                    <div class="col-sm-4 header-cover full-width">
                        <?php mytheme_post_thumbnail('thumb-single') ?>
                    </div>
                    <div class="col-sm-8 header-caption">
                        <h2 data-animate="fadeInUp" data-animate-delay="1"><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php endwhile; ?>
<?php endif; ?>

<section id="main-content">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-sm-push-4">
                <div id="content" class="article">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                        <?php comments_template(); ?>

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

        </div>

    </div>

</section>

<?php get_footer() ?>