<?php
if ( ! function_exists( 'micah_ryan_web_design_setup' ) ) :

function micah_ryan_web_design_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'micah_ryan_web_design', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu' ),
        'social'  => __( 'Social Links Menu' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // micah_ryan_web_design_setup

add_action( 'after_setup_theme', 'micah_ryan_web_design_setup' );


if ( ! function_exists( 'micah_ryan_web_design_init' ) ) :

function micah_ryan_web_design_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('mr_blog', array(
        'labels' => 
            array(
                'name' => __( 'Micah Ryan | Blog', 'micah_ryan_web_design' )
            ),
        'public' => true,
        'supports' => array( 'title', 'thumbnail' ),
        'has_archive' => true
    ));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // micah_ryan_web_design_setup

add_action( 'init', 'micah_ryan_web_design_init' );


if ( ! function_exists( 'micah_ryan_web_design_widgets_init' ) ) :

function micah_ryan_web_design_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'micah_ryan_web_design_widgets_init' );
endif;// micah_ryan_web_design_widgets_init



if ( ! function_exists( 'micah_ryan_web_design_customize_register' ) ) :

function micah_ryan_web_design_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'micah_ryan_web_design_customize_register' );
endif;// micah_ryan_web_design_customize_register


if ( ! function_exists( 'micah_ryan_web_design_enqueue_scripts' ) ) :
    function micah_ryan_web_design_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'loadcss' );
    wp_enqueue_script( 'loadcss', get_template_directory_uri() . '/js/loadCSS.min.js', false, null, false);

    wp_deregister_script( 'animatorpro' );
    wp_enqueue_script( 'animatorpro', 'https://cdn.rawgit.com/MhdAljuboori/fc08b6eb45fbc2e724b4/raw/animator-pro.js', false, null, true);

    wp_deregister_script( 'jquerywaypoints' );
    wp_enqueue_script( 'jquerywaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', false, null, true);

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.min.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', false, null, true);

    wp_deregister_script( 'foundation' );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/foundation.min.js', false, null, true);

    wp_deregister_script( 'foundationoffcanvas' );
    wp_enqueue_script( 'foundationoffcanvas', get_template_directory_uri() . '/js/foundation/foundation.offcanvas.min.js', false, null, true);

    wp_deregister_script( 'menu' );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.min.js', false, null, true);

    wp_deregister_script( 'wow' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'foundation' );
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'micah_ryan_web_design_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>