=== Font Emoticons ===
Contributors: manski
Tags: smileys, emoticons
Requires at least: 3.0.0
Tested up to: 4.2.2
Stable tag: 1.4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replaces Wordpress' smileys with font-based emoticons.

== Description ==
Replaces [Wordpress' smileys](http://codex.wordpress.org/Using_Smilies#What_Text_Do_I_Type_to_Make_Smileys.3F) (based on images) with font-based emoticons (see screenshots). Font-based emoticons have some advantages:

* They have the same size as the surrounding text. No more distorting the heights of lines containing smileys/emoticons. They always fit the font size.
* They have the same color as the surrounding text.

The following emoticons are supported:

* `:)` `:-)` `(-:` `(:` `:smile:`
* `:(` `:-(` `:sad:`
* `;)` `;-)` `:wink:`
* `:P` `:-P` `:razz:`
* `-.-` `-_-` `:sleep:`
* `>:)` `>:-)` `:devil:` `:twisted:`
* `:o` `:-o` `:eek:`
* `8O` `8o` `8-O` `8-o` `:shock:`   (No special icon for "shock" yet. Using "eek" instead.)
* `:coffee:`
* `8)` `8-)` `B)` `B-)` `:cool:`
* `:/` `:-/`
* `:beer:`
* `:D` `:-D` `:grin:`
* `x(` `x-(` `X(` `X-(` `:angry:`
* `:x` `:-x` `:mad:`   (No special icon from "mad" yet. Using "angry" instead.)
* `O:)` `0:)` `o:)` `O:-)` `0:-)` `o:-)` `:saint:`
* `:'(` `:'-(` `:cry:`
* `:shoot:`
* `|)` `:squint:`
* `^^` `^_^` `:lol:`

The following general purpose icons are supported:

* `:thumbs:` `:thumbsup:`
* `:thumbsdown:`
* `<3` `:heart:`
* `:star:`
* `(/)` (ok sign)
* `(x)` (cancel)
* `(i)`
* `(?)`
* `(+)`
* `(-)`

Notes:

* Emoticons/Icons must be surrounded with spaces (or other white space characters); e.g. the emoticon in `that:)smile` won't be replaced.
* Emoticons/Icons won't be replaced in HTML tags nor inside of `<pre>` or `<code>` blocks.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the `font-emoticon` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Available emoticons.
2. Emoticon comparison.

== Changelog ==

= 1.4.1 =
* Feature: Added general purpose filter called `wp_font_emots_replace`. This filter can be used to replace emoticons in places not supported by this plugin.

= 1.4.0 =
* Feature: Implemented rudimentary bbpress support. I don't use bbpress, so some parts may still no display emoticons correctly. (issue #10)
* Feature: Emoticons are now also replace in the text sidebar widget.
* Fix: `emoticons.css` no longer gets an unnecessary `?v=` parameter attached (Wordpress does this automatically on its own); also made the style's name more unique so that it's less likely to conflict with other plugins.
* Fix: Replaced usage of internal constant `WP_PLUGIN_URL` with `plugins_url()`

= 1.3.1 =
* Fix: Self closing span (`<span/>`) seems to be invalid in some cases. Replaced it with regular `<span></span>` (issue #8)

= 1.3 =
* Feature: New emoticon "squint": `|)` or `:squint:`
* Feature: Added some general purpose icons like `<3` (heart) or `:thumbsdown:` (`:thumbsup:` got changed to icon from emoticon)
* Change: PHP 5.3 is now required
* Change: "devil" and "eek" got more text representations; "smile" now also supports the Australian version `(-:`
* Change: Made font and css classes more unique so that they don't interfer with other icon fonts (issue #7)
* Fix: Multiple consecutive emoticons are now parsed correctly (issue #5); emoticons surrounded by HTML tags (like `<li>:)</li>`) are now parsed correctly.
* Fix: Wider emoticons now flow correctly with surrounding text (no longer overlap it) (issue #4)

= 1.2 =
* Emoticons are now supported in comments and excerpts. (issue #1)

= 1.1 =
* Emoticons are no longer replaced in URLs. Instead they now require surrounding white space.
* Emoticons at the beginning and the end of posts are recognized now.

= 1.0 =
* First release.

== Use In Themes/Plugins ==
Font Emoticons are supported in most places where user defined text is displayed. However, there may be places in a
plugin or theme that are not supported by Font Emoticons.

In these cases, just apply the filter **wp_font_emots_replace** to the text that should display Font Emoticons.

For example, you would change the following PHP code:

`<?php echo get_the_author_meta( 'description' ); ?>`

to this code:

`<?php echo apply_filters('wp_font_emots_replace', get_the_author_meta( 'description' )); ?>`

That's it.

== Font Licenses ==
The emoticons used in this plugin are based on the fonts "Fontelico" and "Font Awesome".

= Fontelico =

   Copyright (C) 2012 by Fontello project

   Author:    Crowdsourced, for Fontello project
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://fontello.com

= Font Awesome =

   Copyright (C) 2012 by Dave Gandy

   Author:    Dave Gandy
   License:   SIL (http://scripts.sil.org/OFL)
   Homepage:  http://fortawesome.github.com/Font-Awesome/
