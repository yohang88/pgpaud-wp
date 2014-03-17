<?php

require_once('wp_bootstrap_navwalker.php');


function mytheme_setup() {

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 480, 360, true );
    add_image_size( 'thumb-single', 480, 360, true );
    add_image_size( 'thumb-square', 130, 130, true );
    add_image_size( 'thumb-wide', 300, 120, true );
    add_image_size( 'carousel-featured', 500, 275, true );

    register_nav_menus( array(
        'primary'   => __( 'Top primary menu', 'twentyfourteen' ),
        'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
    ) );

    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
    ) );

}

add_action( 'after_setup_theme', 'mytheme_setup' );


function mytheme_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.1.1' );
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.0.3' );
    wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/css/animate.css', array(), '4.0.3' );

    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.1.1', true );
    wp_enqueue_script( 'holder-script', get_template_directory_uri() . '/js/holder.js', array(), '20140213', true );
    wp_enqueue_script( 'waypoint-script', get_template_directory_uri() . '/js/waypoints.js', array(), '20140213', true );
    wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . '/js/functions.js', array(), '20140213', true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );


function mytheme_post_thumbnail($size) {
    if ( ! has_post_thumbnail() ) {
        return;
    }
    ?>

    <a class="post-thumbnail" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( $size , array('class' => 'img-responsive')) ?>
    </a>

<?php
}

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();

    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
    );

    return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    return $args;
}

add_action('comment_form', 'bootstrap3_comment_button' );
function bootstrap3_comment_button() {
    echo '<button class="btn btn-default" type="submit">' . __( 'Submit' ) . '</button>';
}

