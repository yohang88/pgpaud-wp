<?php get_header() ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

<section id="single-header">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="table-row">

                    <?php if ( has_post_thumbnail() ) : ?>
                    <div class="col-sm-4 header-cover full-width">
                        <?php mytheme_post_thumbnail('thumb-single') ?>
                    </div>
                    <?php endif; ?>

                    <div class="col-sm-8 header-caption" style="width:100%">
                        <h2 data-animate="fadeInUp" data-animate-delay="1"><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="main-content">

    <div class="container">

        <div class="row">

            <div class="col-sm-8 col-sm-push-4">
                <div id="content" class="article">

                        <?php the_content(); ?>

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

        </div>

    </div>

</section>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer() ?>