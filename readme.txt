=== Arabic Expressions ===
Contributors: ahlsunnah
Tags: arabic expressions, arabic symbols, islamic expressions, islamic symbols
Requires at least: 3.0.0
Tested up to: 4.6.1
Stable tag: 2.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Include arabic expressions to be added to posts easily.

== Description ==
> بسم الله الرحمن الرحيم

This WordPress plugin adds [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) to WordPress and provides a simple way to add the expressions to you posts and pages.

= How to use ? =

Just insert the keyword of the arabic expression that you want in your post or page and enjoy !

> Example : `bs3`

The Available expressions can be viewed in the *Screenshots* section.

= Notes =

* Expression keyword must be surrounded with spaces characters; e.g. the expression keyword in `-sallallahu3alayh-` won't be replaced.
* Expressions keywords won't be replaced in HTML tags nor inside of `<pre>` or `<code>` blocks.

This plugin is a fork of [Font Emoticons](https://wordpress.org/plugins/font-emoticons/)

= Support =

If you need support, please add an issue on [GitHub](https://github.com/ahlsunnah/arabic-expressions/issues).

= Licenses =

Arabic Expressions: GPLv2 or later

KFGQPC Arabic expressions: Copyright (C) 2015 All right reserved to King Fahd Complex For Printing of The Holy Qur'an
> The fonts are generated from [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) font that belong to **King Fahd Complex For Printing of The Holy Qur'an of Madinah in Saudi Arabia**. It is downloadable freely on [their website](http://fonts.qurancomplex.gov.sa/?page_id=486). The screenshots are also taken from their website.

== Installation ==

= Manual Installation =

1. Upload the `arabic-expressions` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

= Composer Installation =

If you are using composer as a package manager you can install using :

1. `composer require ahlsunnah/arabic-expressions`
1. Activate the plugin through the 'Plugins' menu in WordPress or if you are using **wp-cli** : `wp plugin activate arabic-expressions`

== Frequently Asked Questions ==

= Arabic Expressions don't parse the keywords in some place my Theme/Plugin =

Arabic Expressions are supported in most places where user defined text is displayed. However, there may be places in a plugin or theme that are not supported by Arabic Expressions.

In these cases, just apply the filter `arabic_expressions_replace` to the text that should display Arabic Expressions.

For example, you would change the following PHP code:

`<?php echo get_the_author_meta( 'description' ); ?>`

to this code:

`<?php echo apply_filters('arabic_expressions_replace', get_the_author_meta( 'description' )); ?>`

= I have a problem with capital letter expressions, it doesn't work =

You should look in the source code of your page if the `DOCTYPE` is correct. It is due to the use of capital letters in our CSS class names; if your `DOCTYPE` is incorrect, all browser behave like case-insensitive when using CSS class. See : http://stackoverflow.com/a/28556035/1673761

= I have another problem =

If you have a problem, please drop an [issue in GitHub](https://github.com/ahlsunnah/arabic-expressions/issues)

= I want to help =

You can :

* make invocations for me
* correct english mistakes and typos by [forking the project on GitHub](https://github.com/ahlsunnah/arabic-expressions/fork), make your corrections to your fork (using GitHub's editor) and make a pull request.
* help me developing the plugin by [forking the project on GitHub](https://github.com/ahlsunnah/arabic-expressions/fork), push your changes to your fork and make a pull request. (There is a [TODO list here](https://github.com/ahlsunnah/arabic-expressions/blob/master/todo.md))
* make suggestions by opening an [issue in GitHub ](https://github.com/ahlsunnah/arabic-expressions/issues)

== Screenshots ==

1. bs1 : بسم الله الرحمن الرحيم
1. bs2 : بسم الله الرحمن الرحيم
1. bs3 : بسم الله الرحمن الرحيم
1. asmaullah : أسماء الله الحسنى
1. lj : الله
1. tamma : تم بحمد الله
1. qr : قرآن كريم
1. Aa : الله أكبر
1. Jj : جل جلاله
1. Ja : جل وعلا
1. Az : عز وجل
1. St : سبحانه وتعالى
1. Tt : تبارك وتعالى
1. Sawaws : صلى الله عليه وعلى آله وسلم
1. Saws : صلى الله عليه وسلم
1. Rau : رضي الله عنه
1. Raa : رضي الله عنها
1. Raun : رضي الله عنهن
1. Rauma : رضي الله عنهما
1. Raum : رضي الله عنهم
1. Awasws : عليه وعلى آله الصلاة والسلام
1. Asws : عليه الصلاة والسلام
1. Aas : عليها السلام
1. Aims : عليهم السلام
1. Aimas : عليهما السلام
1. As : عليه السلام
1. Ra : رحمها الله
1. Run : رحمهن الله
1. Ru : رحمه الله
1. Ruma : رحمهما الله
1. Rum : رحمهم الله
1. muqaddimah : مقدمة
1. fihris : فهرس
1. fasl : الفصل
1. tamhid : تمهيد
1. tammat : تمت
1. bab : الباب
1. juz : الجزء
1. tahanina : تهانينا
1. aa : الله أكبر
1. az : عز وجل
1. st : سبحانه وتعالى
1. jj : جل جلاله
1. ja : جل وعلا
1. tt : تبارك وتعالى
1. saws : صلى الله عليه وسلم
1. rau : رضي الله عنه
1. raa : رضي الله عنها
1. raum : رضي الله عنهم
1. rauma : رضي الله عنهما
1. raun : رضي الله عنهن
1. asws : عليه الصلاة والسلام
1. as : عليه السلام
1. aas : عليها السلام
1. aims : عليهم السلام
1. aimas : عليهما السلام
1. ru : رحمه الله
1. rum : رحمهم الله
1. ruma : رحمهما الله
1. ra : رحمها الله
1. run : رحمهن الله
1. 7izb : الحزب
1. rubu3 : الربع
1. thumun : الثمن
1. sabt : السبت
1. a7ad : الأحد
1. ithnayn : الاثنين
1. thulatha : الثلاثاء
1. arba3a : الأربعاء
1. khamis : الخميس
1. jumu3a : الجمعة
1. mu7arram : محرم
1. safar : صفر
1. rabi31 : ربيع الأول
1. rabi32 : ربيع الثاني
1. jumada1 : جمادى الأولى
1. jumada2 : جمادى الآخرة
1. rajab : رجب
1. cha3ban : شعبان
1. ramadan : رمضان
1. chawal : شوال
1. dhulqa3da : ذو القعدة
1. dhul7jja : ذو الحجة
1. 3idmubarak : عيد مبارك
1. 3idsa3id : عيد سعيد
1. mu7tawiyat : المحتويات

== Changelog ==

= 2.2 =
* Changed keywords of symbols. Sorry it breaks the texts made with previous versions. You will have to update everything manually.
  * Changed keywords to be abbreviations (shorter for quicker typing)
  * Changed symbol class names to match the new keywords
  * Changed the keywords to be surrounded by "-" to make it more generic.
* Added a [TODO file](https://github.com/ahlsunnah/arabic-expressions/blob/master/todo.md)
* Renamed screenshots

= 2.1.2 =
* Removed screenshots from repository to make the package lighter

= 2.1.1 =
* Some fixes for composer.json
* readme changes

= 2.1.0 =
* Changed plugin name to **Arabic Expressions**, files names, functions names, variables and texts from `arabic symbols` to `arabic expressions`
* Added readme.md for GitHub + included screenshots
* Some changes to readme

= 2.0.0 =
* First release of **Arabic Symbols**. It is a fork of the plugin [Font Emoticons](https://wordpress.org/plugins/font-emoticons/) version 1.4.1.
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

== Upgrade Notice ==

= 2.2 =
* We changed symbols keywords, please check the new keywords in the [readme](https://github.com/ahlsunnah/arabic-expressions/blob/master/readme.md).
