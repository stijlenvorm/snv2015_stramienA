<?php

namespace snv\Theme;

class Snv
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'themeScripts'));

    }

    // wp hack call for init
    public function theInit()
    {

    }



    public function themeScripts()
    {

        // deregister some wp stuff
        wp_deregister_style('open-sans');
        wp_register_style('open-sans', false);
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');

        // prepare data to be send to javascript, before script.js
        wp_register_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
        wp_localize_script('script', 'home_logo', get_option('home-logo'));
        wp_localize_script('script', 'email', get_option('email'));
        wp_localize_script('script', 'telefoon', get_option('telefoon'));
        wp_localize_script('script', 'adres', get_option('adres'));
        wp_localize_script('script', 'postcode', get_option('postcode'));
        wp_localize_script('script', 'woonplaats', get_option('woonplaats'));
        wp_localize_script('script', 'facebook', get_option('facebook'));
        wp_localize_script('script', 'MAPS_API_KEY', MAPS_API_KEY);

        wp_enqueue_script('script');

        if (get_option('bootstrap_css') == '1' || !get_option('bootstrap_css')) {
            wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0', 'all');
        }
        if (get_option('font_awesome') == '1' || !get_option('font_awesome')) {
            wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '1.0', 'all');
        }
        if (get_option('animate_css') == '1' || !get_option('animate_css')) {
            wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.min.css', array(), '1.0', 'all');
        }

        if (get_option('jquery') == '1'|| !get_option('jquery')) {
            wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '1.0.0', false);
            wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/js/jquery-migrate-1.2.1.min.js', array(), '1.0.0', false);
        }
        if (get_option('bootstrap_js') == '1'|| !get_option('bootstrap_js')) {
            wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', false);
        }
        if (get_option('wow_js') == '1'|| !get_option('wow_js')) {
            wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery' , 'bootstrap'), '1.0.0', true);
        }
    }
}
