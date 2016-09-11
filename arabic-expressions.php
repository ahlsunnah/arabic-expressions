<?php
/*
Plugin Name: Arabic Expressions
Plugin URI: https://wordpress.org/plugins/arabic-expressions/
Description: This plugin adds KFGQPC Arabic Symbols to wordpress and provides a simple way to add the expressions to you posts and pages.
Version: 2.1.2
Author: ahlsunnah
Author URI: http://github.com/ahlsunnah/
*/

require_once(dirname(__FILE__).'/ArabicExpressionsPlugin.php');

ArabicExpressionsPlugin::init();

register_deactivation_hook(__FILE__, 'as_plugin_deactivated');
function as_plugin_deactivated()
{
    # Re-enable Wordpress smileys
    // update_option('use_smilies', 1);
}
