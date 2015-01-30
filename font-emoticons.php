<?php
/*
Plugin Name: Font Emoticons
Plugin URI: https://wordpress.org/plugins/font-emoticons/
Description: Replace the standard WP Smileys with font icons.
Version: 1.3.1
Author: Sebastian Krysmanski
Author URI: http://manski.net
*/

require_once(dirname(__FILE__).'/FontEmoticonsPlugin.php');

FontEmoticonsPlugin::init();

register_deactivation_hook(__FILE__, 'fe_plugin_deactivated');
function fe_plugin_deactivated()
{
    # Re-enable Wordpress smileys
    update_option('use_smilies', 1);
}
