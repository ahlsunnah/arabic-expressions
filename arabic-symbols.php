<?php
/*
Plugin Name: Arabic Symbols
Plugin URI: https://wordpress.org/plugins/arabic-symbols/
Description: This plugin adds KFGQPC Arabic Symbols to wordpress and provides a simple way to add the symbols to you posts and pages.
Version: 2.0.0
Author: ahlsunnah
Author URI: http://github.com/ahlsunnah/
*/

require_once(dirname(__FILE__).'/ArabicSymbolsPlugin.php');

ArabicSymbolsPlugin::init();

register_deactivation_hook(__FILE__, 'as_plugin_deactivated');
function as_plugin_deactivated()
{
    # Re-enable Wordpress smileys
    // update_option('use_smilies', 1);
}
