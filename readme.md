# Arabic Expressions #

## بسم الله الرحمن الرحيم ##

## Description ##

This WordPress plugin adds [KFGQPC Arabic Symbols](http://fonts.qurancomplex.gov.sa/?page_id=486) to WordPress and provides a simple way to add the expressions to you posts and pages.

### How to use ? ###

Just insert the keyword of the arabic expression that you want in your post or page and enjoy !

> Example : `basmallah3`

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

## Screenshots ##

n  | keyword | text | screenshots
---| ------- | ---- | ----------
1 | `basmallah1` | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/1-basmallah1.jpg)
2 | `basmallah2` | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/2-basmallah2.jpg)
3 | `basmallah3` | بسم الله الرحمن الرحيم | ![بسم الله الرحمن الرحيم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/3-basmallah3.jpg)
4 | `asmaullah` | أسماء الله الحسنى | ![أسماء الله الحسنى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/4-asmaullah.jpg)
5 | `allah1` | الله | ![الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/5-allah1.jpg)
6 | `tamma1` | تم بحمد الله | ![تم بحمد الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/6-tamma1.jpg)
7 | `quran1` | قرآن كريم | ![قرآن كريم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/7-quran1.jpg)
8 | `allahuakbar` | الله أكبر | ![الله أكبر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/8-allahuakbar.jpg)
9 | `jallajalaaluhu` | جل جلاله | ![جل جلاله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/9-jallajalaaluhu.jpg)
10 | `jallawa3ala` | جل وعلا | ![جل وعلا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/10-jallawa3ala.jpg)
11 | `3azzawajalla` | عز وجل | ![عز وجل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/11-3azzawajalla.jpg)
12 | `sub7anah` | سبحانه وتعالى | ![سبحانه وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/12-sub7anah.jpg)
13 | `tabaraka` | تبارك وتعالى | ![تبارك وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/13-tabaraka.jpg)
14 | `sallallahu3alayh2` | صلى الله عليه وعلى آله وسلم | ![صلى الله عليه وعلى آله وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/14-sallallahu3alayh2.jpg)
15 | `sallallahu3alayh` | صلى الله عليه وسلم | ![صلى الله عليه وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/15-sallallahu3alayh.jpg)
16 | `radiyallahu3anhu` | رضي الله عنه | ![رضي الله عنه](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/16-radiyallahu3anhu.jpg)
17 | `radiyallahu3anha` | رضي الله عنها | ![رضي الله عنها](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/17-radiyallahu3anha.jpg)
18 | `radiyallahu3anhunna` | رضي الله عنهن | ![رضي الله عنهن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/18-radiyallahu3anhunna.jpg)
19 | `radiyallahu3anhuma` | رضي الله عنهما | ![رضي الله عنهما](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/19-radiyallahu3anhuma.jpg)
20 | `radiyallahu3anhum` | رضي الله عنهم | ![رضي الله عنهم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/20-radiyallahu3anhum.jpg)
21 | `sallallahu3alayh4` | عليه وعلى آله الصلاة والسلام | ![عليه وعلى آله الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/21-sallallahu3alayh4.jpg)
22 | `sallallahu3alayh3` | عليه الصلاة والسلام | ![عليه الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/22-sallallahu3alayh3.jpg)
23 | `3alayhassalam` | عليها السلام | ![عليها السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/23-3alayhassalam.jpg)
24 | `3alayhimussalam` | عليهم السلام | ![عليهم السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/24-3alayhimussalam.jpg)
25 | `3alayhimassalam` | عليهما السلام | ![عليهما السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/25-3alayhimassalam.jpg)
26 | `3alayhissalam` | عليه السلام | ![عليه السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/26-3alayhissalam.jpg)
27 | `ra7imahallah` | رحمها الله | ![رحمها الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/27-ra7imahallah.jpg)
28 | `ra7imahunnallah` | رحمهن الله | ![رحمهن الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/28-ra7imahunnallah.jpg)
29 | `ra7imahullah` | رحمه الله | ![رحمه الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/29-ra7imahullah.jpg)
30 | `ra7imahumallah` | رحمهما الله | ![رحمهما الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/30-ra7imahumallah.jpg)
31 | `ra7imahumullah` | رحمهم الله | ![رحمهم الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/31-ra7imahumullah.jpg)
32 | `muqaddimah1` | مقدمة | ![مقدمة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/32-muqaddimah1.jpg)
33 | `fihris1` | فهرس | ![فهرس](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/33-fihris1.jpg)
34 | `fasl1` | الفصل | ![الفصل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/34-fasl1.jpg)
35 | `tamhid1` | تمهيد | ![تمهيد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/35-tamhid1.jpg)
36 | `tammat1` | تمت | ![تمت](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/36-tammat1.jpg)
37 | `bab1` | الباب | ![الباب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/37-bab1.jpg)
38 | `juz1` | الجزء | ![الجزء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/38-juz1.jpg)
39 | `tahanina1` | تهانينا | ![تهانينا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/39-tahanina1.jpg)
40 | `allahuakbar2` | الله أكبر | ![الله أكبر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/40-allahuakbar2.jpg)
41 | `3azzawajalla2` | عز وجل | ![عز وجل](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/41-3azzawajalla2.jpg)
42 | `sub7anah2` | سبحانه وتعالى | ![سبحانه وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/42-sub7anah2.jpg)
43 | `jallajalaaluhu2` | جل جلاله | ![جل جلاله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/43-jallajalaaluhu2.jpg)
44 | `jallawa3ala2` | جل وعلا | ![جل وعلا](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/44-jallawa3ala2.jpg)
45 | `tabaraka2` | تبارك وتعالى | ![تبارك وتعالى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/45-tabaraka2.jpg)
46 | `sallallahu3alayh5` | صلى الله عليه وسلم | ![صلى الله عليه وسلم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/46-sallallahu3alayh5.jpg)
47 | `radiyallahu3anhu2` | رضي الله عنه | ![رضي الله عنه](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/47-radiyallahu3anhu2.jpg)
48 | `radiyallahu3anha2` | رضي الله عنها | ![رضي الله عنها](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/48-radiyallahu3anha2.jpg)
49 | `radiyallahu3anhum2` | رضي الله عنهم | ![رضي الله عنهم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/49-radiyallahu3anhum2.jpg)
50 | `radiyallahu3anhuma2` | رضي الله عنهما | ![رضي الله عنهما](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/50-radiyallahu3anhuma2.jpg)
51 | `radiyallahu3anhunna2` | رضي الله عنهن | ![رضي الله عنهن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/51-radiyallahu3anhunna2.jpg)
52 | `sallallahu3alayh6` | عليه الصلاة والسلام | ![عليه الصلاة والسلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/52-sallallahu3alayh6.jpg)
53 | `3alayhissalam2` | عليه السلام | ![عليه السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/53-3alayhissalam2.jpg)
54 | `3alayhassalam2` | عليها السلام | ![عليها السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/54-3alayhassalam2.jpg)
55 | `3alayhimussalam2` | عليهم السلام | ![عليهم السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/55-3alayhimussalam2.jpg)
56 | `3alayhimassalam2` | عليهما السلام | ![عليهما السلام](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/56-3alayhimassalam2.jpg)
57 | `ra7imahullah2` | رحمه الله | ![رحمه الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/57-ra7imahullah2.jpg)
58 | `ra7imahumullah2` | رحمهم الله | ![رحمهم الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/58-ra7imahumullah2.jpg)
59 | `ra7imahumallah2` | رحمهما الله | ![رحمهما الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/59-ra7imahumallah2.jpg)
60 | `ra7imahallah2` | رحمها الله | ![رحمها الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/60-ra7imahallah2.jpg)
61 | `ra7imahunnallah2` | رحمهن الله | ![رحمهن الله](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/61-ra7imahunnallah2.jpg)
62 | `7izb1` | الحزب | ![الحزب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/62-7izb1.jpg)
63 | `rubu3` | الربع | ![الربع](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/63-rubu3.jpg)
64 | `thumun1` | الثمن | ![الثمن](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/64-thumun1.jpg)
65 | `sabt1` | السبت | ![السبت](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/65-sabt1.jpg)
66 | `a7ad1` | الأحد | ![الأحد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/66-a7ad1.jpg)
67 | `ithnayn1` | الاثنين | ![الاثنين](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/67-ithnayn1.jpg)
68 | `thulatha1` | الثلاثاء | ![الثلاثاء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/68-thulatha1.jpg)
69 | `arba3a1` | الأربعاء | ![الأربعاء](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/69-arba3a1.jpg)
70 | `khamis1` | الخميس | ![الخميس](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/70-khamis1.jpg)
71 | `jumu3a1` | الجمعة | ![الجمعة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/71-jumu3a1.jpg)
72 | `mu7arram1` | محرم | ![محرم](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/72-mu7arram1.jpg)
73 | `safar1` | صفر | ![صفر](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/73-safar1.jpg)
74 | `rabi31` | ربيع الأول | ![ربيع الأول](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/74-rabi31.jpg)
75 | `rabi32` | ربيع الثاني | ![ربيع الثاني](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/75-rabi32.jpg)
76 | `jumada1` | جمادى الأولى | ![جمادى الأولى](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/76-jumada1.jpg)
77 | `jumada2` | جمادى الآخرة | ![جمادى الآخرة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/77-jumada2.jpg)
78 | `rajab1` | رجب | ![رجب](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/78-rajab1.jpg)
79 | `cha3ban1` | شعبان | ![شعبان](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/79-cha3ban1.jpg)
80 | `ramadan1` | رمضان | ![رمضان](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/80-ramadan1.jpg)
81 | `chawal1` | شوال | ![شوال](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/81-chawal1.jpg)
82 | `dhulqa3da1` | ذو القعدة | ![ذو القعدة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/82-dhulqa3da1.jpg)
83 | `dhul7jja1` | ذو الحجة | ![ذو الحجة](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/83-dhul7jja1.jpg)
84 | `3idmubarak` | عيد مبارك | ![عيد مبارك](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/84-3idmubarak.jpg)
85 | `3idsa3id` | عيد سعيد | ![عيد سعيد](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/85-3idsa3id.jpg)
86 | `mu7tawiyat` | المحتويات | ![المحتويات](https://raw.githubusercontent.com/ahlsunnah/arabic-expressions/gh-pages/screenshots/86-mu7tawiyat.jpg)

## Changelog ##

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
