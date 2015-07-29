<?php
namespace snv\Theme;

/**
* Admin class contains all the admin edits, ie. style, function of the backoffice
*/
class Admin
{
    public function __construct()
    {
        
        // admin contact page
        add_action('admin_menu', array($this, 'createExtraMenus'));

        // admin styles
        add_action('admin_enqueue_scripts', array($this , 'adminThemeStylesAndScripts'));
        add_action('login_enqueue_scripts', array($this , 'adminThemeStylesAndScripts'));
        add_action('login_enqueue_scripts', array($this , 'loginScreenLogo'));
        add_filter('login_headerurl', array($this , 'loginScreenLogoURL'));
        add_filter('login_headertitle', array($this , 'loginScreenURLTitle'));

        return true;
    }

    public function createExtraMenus()
    {
        // create contactinfo menu
        add_menu_page(
            'contactsettings',
            'Informatie',
            'manage_options',
            'contact-info',
            array ($this, 'settingsPage'),
            get_template_directory_uri() . '/includes/snv/Theme/admin/stijlenvorm-icon-small.png'
        );

        // create theme option sub-menu
        add_submenu_page(
            'themes.php',
            'S&V Thema opties',
            'S&V Thema opties',
            'administrator',
            'theme-options-snv',
            array ($this, 'themePage')
        );



        //call register settings function
        add_action('admin_init', array($this, 'registerExtraOptions'));

        // add editor capabilities
        $editor = get_role('editor');
        $editor->add_cap('manage_options');
    }

    public function registerExtraOptions()
    {
        // register Contactinfo options
        register_setting('contact-settings-group', 'home-logo');
        register_setting('contact-settings-group', 'email');
        register_setting('contact-settings-group', 'telefoon');
        register_setting('contact-settings-group', 'adres');
        register_setting('contact-settings-group', 'postcode');
        register_setting('contact-settings-group', 'woonplaats');
        register_setting('contact-settings-group', 'latitude');
        register_setting('contact-settings-group', 'longitude');
        register_setting('contact-settings-group', 'facebook');
        register_setting('contact-settings-group', 'twitter');
        register_setting('contact-settings-group', 'linkedIn');
        register_setting('contact-settings-group', 'pinterest');

        //register ThemeOptions
        register_setting('theme-settings-group', 'jquery');
        register_setting('theme-settings-group', 'bootstrap_js');
        register_setting('theme-settings-group', 'bootstrap_css');
        register_setting('theme-settings-group', 'wow_js');
        register_setting('theme-settings-group', 'animate_css');
        register_setting('theme-settings-group', 'font_awesome');
        
    }

    public function settingsPage()
    {
        return include('admin/contactpage.php');
    }

    public function themePage()
    {
        return include('admin/themepage.php');
    }

    // add css to login/admin pages
    public function adminThemeStylesAndScripts()
    {

        wp_enqueue_style('my-admin-theme', get_template_directory_uri() . '/includes/snv/Theme/admin/style.css');
        wp_enqueue_script('my-admin-script', get_template_directory_uri() . '/includes/snv/Theme/admin/script.js', array('jquery'), '1.0' , true);

        // for the contactonfo page
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
    }
    
    // change login screen
    public function loginScreenLogo()
    {
        ?>
        <?php $logo_url = get_template_directory_uri() . '/includes/snv/Theme/admin/logo-login.png' ?>
        <style type="text/css">
            .login h1 a {
                background-image: url(<?php echo $logo_url ?>);
                padding-bottom: 0px;
                padding: 0;
                width: 274px;
                background-size: 100% auto;
            }
        </style>
        <?php
    }
    

    public function loginScreenLogoURL()
    {
        return '//www.stijlenvorm.nl/';
    }
    

    public function loginScreenURLTitle()
    {
        return 'Stijl en Vorm';
    }
}
