<?php 
/* Disable the Admin Bar. */
show_admin_bar( false );
    // add categories to attachments
    function wptp_add_categories_to_attachments() {
        register_taxonomy_for_object_type( 'category', 'attachment' );
    }
    add_action( 'init' , 'wptp_add_categories_to_attachments' );


    add_action( 'wp_enqueue_script', 'load_jquery' );
    function load_jquery() {
        wp_enqueue_script( 'jquery' );
    }


    // unwrap p's from images
    // img unautop
    function img_unautop($pee) {
        $pee = preg_replace('/\n/s', '<br>', $pee);
        return $pee;
    }
    add_filter( 'the_content', 'img_unautop', 30 );


    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri().'/pure/js/custom.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
    
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description'   => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<b>',
        'after_title'   => '</b>'
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<b>',
        'after_title'   => '</b>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<b>',
        'after_title'   => '</b>'
    ));

}
?>