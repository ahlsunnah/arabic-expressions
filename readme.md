# Arabic Expressions #

[بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/1-basmallah1.jpg)

## Description ##

This WordPress plugin adds [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) to WordPress and provides a simple way to add the expressions to you posts and pages.

### How to use ? ###

Just insert the keyword of the arabic expression that you want in your post or page and enjoy !

> Example : `bs3`

The Available expressions can be viewed in the <a href="#user-content-screenshots">Screenshots</a> section.

### Notes ###

* Expression keyword must be surrounded with spaces characters; e.g. the expression keyword in `-sallallahu3alayh-` won't be replaced.
* Expressions keywords won't be replaced in HTML tags nor inside of `<pre>` or `<code>` blocks.

This plugin is a fork of [Font Emoticons](https://wordpress.org/plugins/font-emoticons/)

### Licenses ###

Arabic Expressions: GPLv2 or later

KFGQPC Arabic expressions: Copyright (C) 2015 All right reserved to King Fahd Complex For Printing of The Holy Qur'an
> The fonts are generated from [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) font that belong to **King Fahd Complex For Printing of The Holy Qur'an of Madinah in Saudi Arabia**. It is downloadable freely on [their website](http://fonts.qurancomplex.gov.sa/?page_id=486). The screenshots are also taken from their website.

## Installation ##

### Manual Installation ###

1. Upload the `arabic-expressions` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

### Composer Installation ###

If you are using composer as a package manager you can install using :

1. `composer require ahlsunnah/arabic-expressions`
1. Activate the plugin through the 'Plugins' menu in WordPress or if you are using **wp-cli** : `wp plugin activate arabic-expressions`

## Frequently Asked Questions ##

### Arabic Expressions don't parse the keywords in some place my Theme/Plugin ###

Arabic Expressions are supported in most places where user defined text is displayed. However, there may be places in a plugin or theme that are not supported by Arabic Expressions.

In these cases, just apply the filter `arabic_expressions_replace` to the text that should display Arabic Expressions.

For example, you would change the following PHP code:

`<?php echo get_the_author_meta( 'description' ); ?>`

to this code:

`<?php echo apply_filters('arabic_expressions_replace', get_the_author_meta( 'description' )); ?>`

### I have a problem with capital letter expressions, it doesn't work ###

You should look in the source code of your page if the `DOCTYPE` is correct. It is due to the use of capital letters in our CSS class names; if your `DOCTYPE` is incorrect, all browser behave like case-insensitive when using CSS class. See : http://stackoverflow.com/a/28556035/1673761

### I have another problem ###

If you have a problem, please drop an [issue in GitHub](https://github.com/ahlsunnah/arabic-expressions/issues)

### I want to help ###

You can :

* make invocations for me
* correct english mistakes and typos by [forking the project on GitHub](https://github.com/ahlsunnah/arabic-expressions/fork), make your corrections to your fork (using GitHub's editor) and make a pull request.
* help me developing the plugin by [forking the project on GitHub](https://github.com/ahlsunnah/arabic-expressions/fork), push your changes to your fork and make a pull request. (There is a [TODO list here](https://github.com/ahlsunnah/arabic-expressions/blob/master/todo.md))
* make suggestions by opening an [issue in GitHub ](https://github.com/ahlsunnah/arabic-expressions/issues)

## Screenshots ##

n  | keyword | text | screenshots
---| ------- | ---- | ----------
1 | -bs1- | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/1.jpg)
2 | -bs2- | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/2.jpg)
3 | -bs3- | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/3.jpg)
4 | -asmaullah- | أسماء الله الحسنى | ![أسماء الله الحسنى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/4.jpg)
5 | -lj- | الله | ![الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/5.jpg)
6 | -tamma- | تم بحمد الله | ![تم بحمد الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/6.jpg)
7 | -qr- | قرآن كريم | ![قرآن كريم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/7.jpg)
8 | -Aa- | الله أكبر | ![الله أكبر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/8.jpg)
9 | -Jj- | جل جلاله | ![جل جلاله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/9.jpg)
10 | -Ja- | جل وعلا | ![جل وعلا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/10.jpg)
11 | -Az- | عز وجل | ![عز وجل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/11.jpg)
12 | -St- | سبحانه وتعالى | ![سبحانه وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/12.jpg)
13 | -Tt- | تبارك وتعالى | ![تبارك وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/13.jpg)
14 | -Sawaws- | صلى الله عليه وعلى آله وسلم | ![صلى الله عليه وعلى آله وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/14.jpg)
15 | -Saws- | صلى الله عليه وسلم | ![صلى الله عليه وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/15.jpg)
16 | -Rau- | رضي الله عنه | ![رضي الله عنه](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/16.jpg)
17 | -Raa- | رضي الله عنها | ![رضي الله عنها](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/17.jpg)
18 | -Raun- | رضي الله عنهن | ![رضي الله عنهن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/18.jpg)
19 | -Rauma- | رضي الله عنهما | ![رضي الله عنهما](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/19.jpg)
20 | -Raum- | رضي الله عنهم | ![رضي الله عنهم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/20.jpg)
21 | -Awasws- | عليه وعلى آله الصلاة والسلام | ![عليه وعلى آله الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/21.jpg)
22 | -Asws- | عليه الصلاة والسلام | ![عليه الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/22.jpg)
23 | -Aas- | عليها السلام | ![عليها السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/23.jpg)
24 | -Aims- | عليهم السلام | ![عليهم السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/24.jpg)
25 | -Aimas- | عليهما السلام | ![عليهما السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/25.jpg)
26 | -As- | عليه السلام | ![عليه السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/26.jpg)
27 | -Ra- | رحمها الله | ![رحمها الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/27.jpg)
28 | -Run- | رحمهن الله | ![رحمهن الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/28.jpg)
29 | -Ru- | رحمه الله | ![رحمه الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/29.jpg)
30 | -Ruma- | رحمهما الله | ![رحمهما الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/30.jpg)
31 | -Rum- | رحمهم الله | ![رحمهم الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/31.jpg)
32 | -muqaddimah- | مقدمة | ![مقدمة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/32.jpg)
33 | -fihris- | فهرس | ![فهرس](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/33.jpg)
34 | -fasl- | الفصل | ![الفصل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/34.jpg)
35 | -tamhid- | تمهيد | ![تمهيد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/35.jpg)
36 | -tammat- | تمت | ![تمت](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/36.jpg)
37 | -bab- | الباب | ![الباب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/37.jpg)
38 | -juz- | الجزء | ![الجزء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/38.jpg)
39 | -tahanina- | تهانينا | ![تهانينا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/39.jpg)
40 | -aa- | الله أكبر | ![الله أكبر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/40.jpg)
41 | -az- | عز وجل | ![عز وجل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/41.jpg)
42 | -st- | سبحانه وتعالى | ![سبحانه وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/42.jpg)
43 | -jj- | جل جلاله | ![جل جلاله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/43.jpg)
44 | -ja- | جل وعلا | ![جل وعلا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/44.jpg)
45 | -tt- | تبارك وتعالى | ![تبارك وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/45.jpg)
46 | -saws- | صلى الله عليه وسلم | ![صلى الله عليه وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/46.jpg)
47 | -rau- | رضي الله عنه | ![رضي الله عنه](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/47.jpg)
48 | -raa- | رضي الله عنها | ![رضي الله عنها](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/48.jpg)
49 | -raum- | رضي الله عنهم | ![رضي الله عنهم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/49.jpg)
50 | -rauma- | رضي الله عنهما | ![رضي الله عنهما](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/50.jpg)
51 | -raun- | رضي الله عنهن | ![رضي الله عنهن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/51.jpg)
52 | -asws- | عليه الصلاة والسلام | ![عليه الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/52.jpg)
53 | -as- | عليه السلام | ![عليه السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/53.jpg)
54 | -aas- | عليها السلام | ![عليها السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/54.jpg)
55 | -aims- | عليهم السلام | ![عليهم السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/55.jpg)
56 | -aimas- | عليهما السلام | ![عليهما السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/56.jpg)
57 | -ru- | رحمه الله | ![رحمه الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/57.jpg)
58 | -rum- | رحمهم الله | ![رحمهم الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/58.jpg)
59 | -ruma- | رحمهما الله | ![رحمهما الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/59.jpg)
60 | -ra- | رحمها الله | ![رحمها الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/60.jpg)
61 | -run- | رحمهن الله | ![رحمهن الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/61.jpg)
62 | -7izb- | الحزب | ![الحزب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/62.jpg)
63 | -rubu3- | الربع | ![الربع](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/63.jpg)
64 | -thumun- | الثمن | ![الثمن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/64.jpg)
65 | -sabt- | السبت | ![السبت](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/65.jpg)
66 | -a7ad- | الأحد | ![الأحد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/66.jpg)
67 | -ithnayn- | الاثنين | ![الاثنين](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/67.jpg)
68 | -thulatha- | الثلاثاء | ![الثلاثاء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/68.jpg)
69 | -arba3a- | الأربعاء | ![الأربعاء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/69.jpg)
70 | -khamis- | الخميس | ![الخميس](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/70.jpg)
71 | -jumu3a- | الجمعة | ![الجمعة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/71.jpg)
72 | -mu7arram- | محرم | ![محرم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/72.jpg)
73 | -safar- | صفر | ![صفر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/73.jpg)
74 | -rabi31- | ربيع الأول | ![ربيع الأول](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/74.jpg)
75 | -rabi32- | ربيع الثاني | ![ربيع الثاني](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/75.jpg)
76 | -jumada1- | جمادى الأولى | ![جمادى الأولى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/76.jpg)
77 | -jumada2- | جمادى الآخرة | ![جمادى الآخرة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/77.jpg)
78 | -rajab- | رجب | ![رجب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/78.jpg)
79 | -cha3ban- | شعبان | ![شعبان](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/79.jpg)
80 | -ramadan- | رمضان | ![رمضان](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/80.jpg)
81 | -chawal- | شوال | ![شوال](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/81.jpg)
82 | -dhulqa3da- | ذو القعدة | ![ذو القعدة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/82.jpg)
83 | -dhul7jja- | ذو الحجة | ![ذو الحجة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/83.jpg)
84 | -3idmubarak- | عيد مبارك | ![عيد مبارك](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/84.jpg)
85 | -3idsa3id- | عيد سعيد | ![عيد سعيد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/85.jpg)
86 | -mu7tawiyat- | المحتويات | ![المحتويات](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/86.jpg)

## Changelog ##

### 2.2 ###
* Changed keywords of symbols. Sorry it breaks the texts mades with previous versions. You will have to update everything manually.
  * Changed keywords to be abreviations (shorter for quicker typing)
  * Changed symbol class names to match the new kewords
  * Changed the keywords to be surrounded by "-" to make it more generic.
* Added a [TODO file](https://github.com/ahlsunnah/arabic-expressions/blob/master/todo.md)
* Renamed screenshots

### 2.1.2 ###
* Removed screenshots from repository to make the package lighter

### 2.1.1 ###
* Some fixes for composer.json
* readme changes

### 2.1.0 ###
* Changed plugin name to **Arabic Expressions**
* Changed files names, functions names, variables and texts from `arabic symbols` to `arabic expressions`
* Added readme.md for GitHub + included screenshots
* Some changes to readme

### 2.0.0 ###
* First release of **Arabic Symbols**. It is a fork of the plugin [Font Emoticons](https://wordpress.org/plugins/font-emoticons/) version 1.4.1.
* Changes in this first release :
  * Replaced [Font Emoticons](https://wordpress.org/plugins/font-emoticons/)'s fonts and css files by [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) font generated with [Fontello](http://fontello.com/)
  * Changed plugin name, files names, functions names, variables and texts from `font emoticon` to `arabic symbols`
  * Changed symbols keywords names
  * Remove unused code
  * Add composer.json to make it available for installation with composer as a WordPress plugin
  * Added text license to the project
  * Modified readme.txt intensively

### 1.4.1 ###
* Feature: Added general purpose filter called `wp_font_emots_replace`. This filter can be used to replace emoticons in places not supported by this plugin.

### 1.4.0 ###
* Feature: Implemented rudimentary bbpress support. I don't use bbpress, so some parts may still no display emoticons correctly. (issue #10)
* Feature: Emoticons are now also replace in the text sidebar widget.
* Fix: `emoticons.css` no longer gets an unnecessary `?v=` parameter attached (Wordpress does this automatically on its own); also made the style's name more unique so that it's less likely to conflict with other plugins.
* Fix: Replaced usage of internal constant `WP_PLUGIN_URL` with `plugins_url()`

### 1.3.1 ###
* Fix: Self closing span (`<span/>`) seems to be invalid in some cases. Replaced it with regular `<span></span>` (issue #8)

### 1.3 ###
* Feature: New emoticon "squint": `|)` or `:squint:`
* Feature: Added some general purpose icons like `<3` (heart) or `:thumbsdown:` (`:thumbsup:` got changed to icon from emoticon)
* Change: PHP 5.3 is now required
* Change: "devil" and "eek" got more text representations; "smile" now also supports the Australian version `(-:`
* Change: Made font and css classes more unique so that they don't interfer with other icon fonts (issue #7)
* Fix: Multiple consecutive emoticons are now parsed correctly (issue #5); emoticons surrounded by HTML tags (like `<li>:)</li>`) are now parsed correctly.
* Fix: Wider emoticons now flow correctly with surrounding text (no longer overlap it) (issue #4)

### 1.2 ###
* Emoticons are now supported in comments and excerpts. (issue #1)

### 1.1 ###
* Emoticons are no longer replaced in URLs. Instead they now require surrounding white space.
* Emoticons at the beginning and the end of posts are recognized now.

### 1.0 ###
* First release.
