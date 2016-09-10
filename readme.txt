=== Arabic Symbols ===
Contributors: ahlsunnah
Tags: arabic symbols, islam
Requires at least: 3.0.0
Tested up to: 4.6.1
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Include arabic symbols to be added to posts easily.

== Description ==
This plugin adds [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) to wordpress and provides a simple way to add the symbols to you posts and pages.

= Notes: =

* Symbol keyword must be surrounded with spaces characters; e.g. the symbol keyword in `-sallallahu3alayh-` won't be replaced.
* Symbols keywords won't be replaced in HTML tags nor inside of `<pre>` or `<code>` blocks.

This plugin is a fork of [Font Emoticons](https://wordpress.org/plugins/font-emoticons/)

= Licenses =

*Arabic Symbols*

Plugin License: GPLv2 or later

*KFGQPC Arabic Symbols*

The fonts are generated from
[KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) font that belong to **King Fahd Complex For Printing of The Holy Qur'an of Madinah in Saudi Arabia**. It is downloadable freely on [their website](http://fonts.qurancomplex.gov.sa/?page_id=486).

Copyright (C) 2015 All right reserved to King Fahd Complex For Printing of The Holy Qur'an

== Installation ==

= Manual Installation =

1. Upload the `arabic-symbols` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

= Composer Installation =

If you are using composer as a package manager you can install using :
1. `composer require ahlsunnah/arabic-symbols`
1. Activate the plugin through the 'Plugins' menu in WordPress or if you are using **wp-cli** : `wp plugin activate arabic-symbols`

== Frequently Asked Questions ==

= Arabic Symbols don't parse the keywords in some place my Theme/Plugin =

Arabic Symbols are supported in most places where user defined text is displayed. However, there may be places in a plugin or theme that are not supported by Arabic Symbols.

In these cases, just apply the filter `arabic_symbols_replace` to the text that should display Arabic Symbols.

For example, you would change the following PHP code:

`<?php echo get_the_author_meta( 'description' ); ?>`

to this code:

`<?php echo apply_filters('arabic_symbols_replace', get_the_author_meta( 'description' )); ?>`

== Screenshots ==

1. `basmallah1` : بسم الله الرحمن الرحيم
1. `basmallah2` : بسم الله الرحمن الرحيم
1. `basmallah3` : بسم الله الرحمن الرحيم
1. `asmaullah` : أسماء الله الحسنى
1. `allah1` : الله
1. `tamma1` : تم بحمد الله
1. `quran1` : قرآن كريم
1. `allahuakbar` : الله أكبر
1. `jallajalaaluhu` : جل جلاله
1. `jallawa3ala` : جل وعلا
1. `3azzawajalla` : عز وجل
1. `sub7anah` : سبحانه وتعالى
1. `tabaraka` : تبارك وتعالى
1. `sallallahu3alayh2` : صلى الله عليه وعلى آله وسلم
1. `sallallahu3alayh` : صلى الله عليه وسلم
1. `radiyallahu3anhu` : رضي الله عنه
1. `radiyallahu3anha` : رضي الله عنها
1. `radiyallahu3anhunna` : رضي الله عنهن
1. `radiyallahu3anhuma` : رضي الله عنهما
1. `radiyallahu3anhum` : رضي الله عنهم
1. `sallallahu3alayh4` : عليه وعلى آله الصلاة والسلام
1. `sallallahu3alayh3` : عليه الصلاة والسلام
1. `3alayhassalam` : عليها السلام
1. `3alayhimussalam` : عليهم السلام
1. `3alayhimassalam` : عليهما السلام
1. `3alayhissalam` : عليه السلام
1. `ra7imahallah` : رحمها الله
1. `ra7imahunnallah` : رحمهن الله
1. `ra7imahullah` : رحمه الله
1. `ra7imahumallah` : رحمهما الله
1. `ra7imahumullah` : رحمهم الله
1. `muqaddimah1` : مقدمة
1. `fihris1` : فهرس
1. `fasl1` : الفصل
1. `tamhid1` : تمهيد
1. `tammat1` : تمت
1. `bab1` : الباب
1. `juz1` : الجزء
1. `tahanina1` : تهانينا
1. `allahuakbar2` : الله أكبر
1. `3azzawajalla2` : عز وجل
1. `sub7anah2` : سبحانه وتعالى
1. `jallajalaaluhu2` : جل جلاله
1. `jallawa3ala2` : جل وعلا
1. `tabaraka2` : تبارك وتعالى
1. `sallallahu3alayh5` : صلى الله عليه وسلم
1. `radiyallahu3anhu2` : رضي الله عنه
1. `radiyallahu3anha2` : رضي الله عنها
1. `radiyallahu3anhum2` : رضي الله عنهم
1. `radiyallahu3anhuma2` : رضي الله عنهما
1. `radiyallahu3anhunna2` : رضي الله عنهن
1. `sallallahu3alayh6` : عليه الصلاة والسلام
1. `3alayhissalam2` : عليه السلام
1. `3alayhassalam2` : عليها السلام
1. `3alayhimussalam2` : عليهم السلام
1. `3alayhimassalam2` : عليهما السلام
1. `ra7imahullah2` : رحمه الله
1. `ra7imahumullah2` : رحمهم الله
1. `ra7imahumallah2` : رحمهما الله
1. `ra7imahallah2` : رحمها الله
1. `ra7imahunnallah2` : رحمهن الله
1. `7izb1` : الحزب
1. `rubu3` : الربع
1. `thumun1` : الثمن
1. `sabt1` : السبت
1. `a7ad1` : الأحد
1. `ithnayn1` : الاثنين
1. `thulatha1` : الثلاثاء
1. `arba3a1` : الأربعاء
1. `khamis1` : الخميس
1. `jumu3a1` : الجمعة
1. `mu7arram1` : محرم
1. `safar1` : صفر
1. `rabi31` : ربيع الأول
1. `rabi32` : ربيع الثاني
1. `jumada1` : جمادى الأولى
1. `jumada2` : جمادى الآخرة
1. `rajab1` : رجب
1. `cha3ban1` : شعبان
1. `ramadan1` : رمضان
1. `chawal1` : شوال
1. `dhulqa3da1` : ذو القعدة
1. `dhul7jja1` : ذو الحجة
1. `3idmubarak` : عيد مبارك
1. `3idsa3id` : عيد سعيد
1. `mu7tawiyat` : المحتويات

== Changelog ==

= 2.0.0 =
* First release of Arabic Symbols. It is a fork of the plugin [Font Emoticons](https://wordpress.org/plugins/font-emoticons/) version 1.4.1.
* Changes in this first release :
  * Replaced [Font Emoticons](https://wordpress.org/plugins/font-emoticons/)'s fonts and css files by [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) font generated with [Fontello](http://fontello.com/)
  * Changed plugin name, files names, functions names, variables and texts from `font emoticon` to `arabic symbols`
  * Changed symbols keywords names
  * Remove unused code
  * Add composer.json to make it available for installation with composer as a WordPress plugin
  * Added text license to the project
  * Modified readme.txt intensively

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
