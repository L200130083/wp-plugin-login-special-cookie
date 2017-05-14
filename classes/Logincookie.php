<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
class LoginCookie{
    function __construct(){
        
    }
    static function activate() {
        // do not generate any output here
        add_option("gov_login_cookie_redirect_url", "http://localhost");
        add_option("gov_login_cookie_name", "sayang");
        register_setting('gov_login_cookie_options_group', 'gov_login_cookie_redirect_url', '' );
        register_setting('gov_login_cookie_options_group', 'gov_login_cookie_name', '' );
    }
    static function uninstall(){
        // do not generate any output here
        delete_option("gov_login_cookie_redirect_url");
        delete_option("gov_login_cookie_name", "sayang");
        unregister_setting('gov_login_cookie_options_group', 'gov_login_cookie_redirect_url', '');
        unregister_setting('gov_login_cookie_options_group', 'gov_login_cookie_name', '' );
    }
    function run(){
        add_action('admin_init', [$this, 'activate']);
        add_action("wp_login", [$this, 'gov_check_cookie']);
        add_action('admin_menu', [$this, 'menu']);

        register_activation_hook(__FILE__, array($this, 'activate'));
        register_uninstall_hook(__FILE__, array($this, 'uninstall'));

    }
    function gov_check_cookie(){
        if ( ! isset($_COOKIE[get_option('gov_login_cookie_name')])){
            wp_redirect(get_option("gov_login_cookie_redirect_url"));
            exit;
        }
    }
    function menu() {
        add_options_page('GLCookie page', 'GLCookie', 'manage_options', 'MY_GLCookie', [$this, 'settings_page']);
    }    
    function settings_page(){

        include __DIR__."/html/settings_page.php";
    }
}

//add_action('wp_login', 'gov_check_cookie');
