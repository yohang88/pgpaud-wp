<?php get_header() ?>
<section id="wrapper">
    <div class="container">
        <div class="row">
            <div id="wrapper-content">
                <div>
                <!-- <div class="table-row"> -->
                    <div id="single-header">
                        <div class="jumbotron">
                            <div class="col-sm-4 header-cover" style="padding-left: 0">
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

                    <div id="common-sidebar" style="margin-top:25px">
                        <?php
                        if($post->post_parent){

                            $relations = get_post_ancestors($post->ID);

                            $result = $wpdb->get_results( "SELECT ID FROM wp_posts WHERE post_parent = $post->ID AND post_type='page'" );
                            if ($result){
                                foreach($result as $pageID){
                                    array_push($relations, $pageID->ID);
                                }
                            }

                            array_push($relations, $post->ID);

                            $relations_string = implode(",",$relations);

                            $sidelinks = wp_list_pages("title_li=&echo=0&&include=".$relations_string);
                        } else{

                            $sidelinks = wp_list_pages("title_li=&echo=0&depth=1&child_of=".$post->ID);
                        }

                        if ($sidelinks) { ?>

                        <ul class="post-list page-list">
                        <?php
                        echo $sidelinks; ?>
                        </ul>

                        <?php } ?>
                    </div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>

    </div>

</section>

<?php get_footer() ?>
