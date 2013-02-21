=== Font Emoticons ===
Contributors: manski
Tags: smileys, emoticons
Requires at least: 3.0.0
Tested up to: 3.5.0
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Replaces Wordpress' smileys with font-based emoticons.

== Description ==
Replaces [Wordpress' smileys](http://codex.wordpress.org/Using_Smilies#What_Text_Do_I_Type_to_Make_Smileys.3F) (based on images) with font-based emoticons (see screenshots). Font-based emoticons have some advantages:

* They have the same size as the surrounding text. No more distorting the heights of lines containing smileys/emoticons. They always fit the font size.
* They have the same color as the surrounding text.

The following emoticons are supported:

* `:)` `:-)` `:smile:`
* `:(` `:-(` `:sad:`
* `;)` `;-)` `:wink:`
* `:P` `:-P` `:razz:`
* `-.-` `-_-` `:sleep:`
* `:thumbs:` `:thumbsup:`
* `:devil:` `:twisted:`
* `:o` `:-o` `:eek:`
* `8O` `8o` `8-O` `8-o` `:shock:`
  (No real icon for "shock" yet. Using "eek" instead.)
* `:coffee:`
* `8)` `8-)` `B)` `B-)` `:cool:`
* `:/` `:-/`
* `:beer:`
* `:D` `:-D` `:grin:`
* `x(` `x-(` `X(` `X-(` `:angry:`
* `:x` `:-x` `:mad:`
  (No real icon from "mad" yet. Using "angry" instead.)
* `O:)` `0:)` `o:)` `O:-)` `0:-)` `o:-)` `:saint:`
* `:'(` `:'-(` `:cry:`
* `:shoot:`
* `^^` `^_^` `:lol:`

Notes:
* Emoticons must be surrounded with spaces (or other white space characters); e.g. the emoticon in `that:)smile` won't be replaced
* Emoticons won't be replaced in HTML tags nor in `<pre>` or `<code>` blocks.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the `font-emoticon` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Available emoticons.
2. Emoticon comparison.

== Changelog ==

= 1.2 =
* Emoticons are now supported in comments and excerpts.

= 1.1 =
* Emoticons are no longer replaced in URLs. Instead they now require surrounding white space.
* Emoticons at the beginning and the end of posts are recognized now.

= 1.0 =
* First release.

== Font License ==
The emoticons used in this plugin are based on the "Fontelico" font.

License:

    Copyright (C) 2012 by Fontello project

    Author:    Crowdsourced, for Fontello project
    License:   SIL (http://scripts.sil.org/OFL)
    Homepage:  http://fontello.com
