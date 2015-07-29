<?php
add_image_size('header-image-large-home', '1900', '400', true);
add_image_size('header-image-medium-home', '768', '162', true);
add_image_size('header-image-small-home', '480', '300', true);


function snv_child_enqueue_script_styles()
{
    wp_enqueue_style('theme_child', get_stylesheet_directory_uri().'/css/style.css', array('bootstrap', 'theme'), '1.0', 'all');
    wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'script'), '1.0', true );
    wp_enqueue_style( 'font-lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', array(), '1.0', 'all' );

}
add_action('wp_enqueue_scripts', 'snv_child_enqueue_script_styles');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu'  => __('Footer Menu')
            )
    );
}
add_action('init', 'register_my_menus');

// Changing excerpt length
  function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  //$excerpt = $excerpt.'... <a href="'.$permalink.'">Read More</a>';
  return $excerpt;
 }