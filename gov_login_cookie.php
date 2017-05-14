<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/**
 * @package Gov Login Cookie
 * @version 1.0
 */
/*
Plugin Name: Gov Login Cookie
Plugin URI: http://www.zippyanime.net
Author: Governor
Version: 1.0
Author URI: http://nyocode.com
Text Domain: gov-login-cookie
*/
define("GOV_PG_DIR", __DIR__);
include __DIR__."/classes/Logincookie.php";
$loginCookie = new LoginCookie();
$loginCookie->run();

?>
