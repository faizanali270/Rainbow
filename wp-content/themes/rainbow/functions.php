<?php
define( 'DIR', get_template_directory_uri() );
 // wp_enqueue_style( 'style', get_stylesheet_uri() );
function wpdocs_theme_name_scripts() {
    // wp_enqueue_style( 'style', get_styleshee_uri()  );
    wp_enqueue_style( 'customstyle', get_template_directory_uri(). '/css/style.css' );
    // wp_enqueue_style( 'menustyle', get_template_directory_uri(). '/css/menu.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.css' );
    wp_enqueue_style( 'custombootstrap', get_template_directory_uri(). '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'aoaanimation', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/font-awesome/css/font-awesome.min.css');
    wp_enqueue_script( 'js', get_template_directory_uri() . '/bootstrap/js/jquery.js');
    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/scripts.js' );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script( 'aoajs', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// function wpb_custom_new_menu() {
//   register_nav_menus(
//     array(
//       'my-custom-menu' => __( 'My Custom Menu' ),
//       'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'wpb_custom_new_menu' );
// Header Menu function
  //     function wpb_custom_new_menu() {
  //   register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  // }
  // add_action( 'init', 'wpb_custom_new_menu' );

// Footer Menu Function
  function wpb_custom_new_footer() {
    register_nav_menu('my-custom-footer',__( 'My Custom Footer' ));
  }
  add_action( 'init', 'wpb_custom_new_footer' );
  

  //New Profile
  function wpb_custom_new_profile() {
    register_nav_menu('my-custom-profile',__( 'My Custom profile' ));
  }
  add_action( 'init', 'wpb_custom_new_profile' );
  
//Custom 
// function section_callout($wp_customize){
//     $wp_customize->add_section('lwp-callout-section', array(
//             'title'=>'Text Callout'
//     ));
//     $wp_customize->add_setting('lwp-text-callout-heading', array(
//             'default'=>'Example Headline Text!'
//     ));

//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'lwp-text-callout-heading-control',array(
//         'label'=> 'Headeline',
//         'section' =>'lwp-callout-section',
//         'settings'=>'lwp-text-callout-heading'
//     )));
    
// }
// add_action('customize_register', 'section_callout');






// function lwp_footer_callout($wp_customize){
//     $wp_customize->add_section('custom-section',array(
//         'title'=>'Footer Callout'
//     ));
//     $wp_customize->add_setting('custom-setting',array(
//         'default' =>'Example Headline Text'
//     ));
//     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'custom-control',array(
//         'lable'=>'Headline',
//         'section'=>'custom-section',
//         'settings' => 'custom-setting'
//     )));
// }
// add_action('customize_register','lwp_footer_callout');

function register_menu(){

register_nav_menus(array(
   'primary' => __('My Custom Menu'),
 ));   
}
add_action("init","register_menu");

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



?>




