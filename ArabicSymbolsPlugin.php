<?php

require_once(dirname(__FILE__) . '/ArabicSymbolsInfo.php');

/**
 * Main plugin class.
 */
class ArabicSymbolsPlugin
{
    const VERSION = '1.4.1';

    // Should be unique enough to not usually appear in a text and must not have any meaning in regex.
    const DELIM_CHARS = '@@';

    /**
     * Identifies the beginning of a masked text section. Text sections are masked by surrounding an id with this and
     * {@link $SECTION_MASKING_END_DELIM}.
     * @var string
     * @see encode_placeholder()
     */
    private $SECTION_MASKING_START_DELIM;
    /**
     * Identifies the end of a masked text section. Text sections are masked by surrounding an id with this and
     * {@link $SECTION_MASKING_START_DELIM}.
     * @var string
     * @see encode_placeholder()
     */
    private $SECTION_MASKING_END_DELIM;

    private $placeholders;

    /**
     * @var ArabicSymbolsInfo[]
     */
    private $symbols;

    private function __construct()
    {
        # Adding some characters (here: "@@") to the delimiters gives us the ability to distinguish them both in the markup
        # text and also prevents the misinterpretation of real MD5 hashes that might be contained in the markup text.
        $this->SECTION_MASKING_START_DELIM = self::DELIM_CHARS . md5('%%%') . '@';
        $this->SECTION_MASKING_END_DELIM   = '@' . md5('%%%') . self::DELIM_CHARS;

        $this->symbols = array(
            new ArabicSymbolsInfo('basmallah', array('basmallah1')),
            new ArabicSymbolsInfo('basmallah2', array('basmallah2')),
            new ArabicSymbolsInfo('basmallah3', array('basmallah3')),
            new ArabicSymbolsInfo('asmaullah', array('asmaullah')),
            new ArabicSymbolsInfo('allah', array('allah1')),
            new ArabicSymbolsInfo('tamma', array('tamma1')),
            new ArabicSymbolsInfo('quran', array('quran1')),
            new ArabicSymbolsInfo('allahuakbar', array('allahuakbar')),
            new ArabicSymbolsInfo('jallajalaaluhu', array('jallajalaaluhu')),
            new ArabicSymbolsInfo('jallawa3ala', array('jallawa3ala')),
            new ArabicSymbolsInfo('3azzawajalla', array('3azzawajalla')),
            new ArabicSymbolsInfo('sub7anah', array('sub7anah')),
            new ArabicSymbolsInfo('tabaraka', array('tabaraka')),
            new ArabicSymbolsInfo('sallallahu3alayh2', array('sallallahu3alayh2')),
            new ArabicSymbolsInfo('sallallahu3alayh', array('sallallahu3alayh')),
            new ArabicSymbolsInfo('radiyallahu3anhu', array('radiyallahu3anhu')),
            new ArabicSymbolsInfo('radiyallahu3anha', array('radiyallahu3anha')),
            new ArabicSymbolsInfo('radiyallahu3anhunna', array('radiyallahu3anhunna')),
            new ArabicSymbolsInfo('radiyallahu3anhuma', array('radiyallahu3anhuma')),
            new ArabicSymbolsInfo('radiyallahu3anhum', array('radiyallahu3anhum')),
            new ArabicSymbolsInfo('sallallahu3alayh4', array('sallallahu3alayh4')),
            new ArabicSymbolsInfo('sallallahu3alayh3', array('sallallahu3alayh3')),
            new ArabicSymbolsInfo('3alayhassalam', array('3alayhassalam')),
            new ArabicSymbolsInfo('3alayhimussalam', array('3alayhimussalam')),
            new ArabicSymbolsInfo('3alayhimassalam', array('3alayhimassalam')),
            new ArabicSymbolsInfo('3alayhissalam', array('3alayhissalam')),
            new ArabicSymbolsInfo('ra7imahallah', array('ra7imahallah')),
            new ArabicSymbolsInfo('ra7imahunnallah', array('ra7imahunnallah')),
            new ArabicSymbolsInfo('ra7imahullah', array('ra7imahullah')),
            new ArabicSymbolsInfo('ra7imahumallah', array('ra7imahumallah')),
            new ArabicSymbolsInfo('ra7imahumullah', array('ra7imahumullah')),
            new ArabicSymbolsInfo('muqaddimah', array('muqaddimah1')),
            new ArabicSymbolsInfo('fihris', array('fihris1')),
            new ArabicSymbolsInfo('fasl', array('fasl1')),
            new ArabicSymbolsInfo('tamhid', array('tamhid1')),
            new ArabicSymbolsInfo('tammat', array('tammat1')),
            new ArabicSymbolsInfo('bab', array('bab1')),
            new ArabicSymbolsInfo('juz', array('juz1')),
            new ArabicSymbolsInfo('tahanina', array('tahanina1')),
            new ArabicSymbolsInfo('allahuakbar2', array('allahuakbar2')),
            new ArabicSymbolsInfo('3azzawajalla2', array('3azzawajalla2')),
            new ArabicSymbolsInfo('sub7anah2', array('sub7anah2')),
            new ArabicSymbolsInfo('jallajalaaluhu2', array('jallajalaaluhu2')),
            new ArabicSymbolsInfo('jallawa3ala2', array('jallawa3ala2')),
            new ArabicSymbolsInfo('tabaraka2', array('tabaraka2')),
            new ArabicSymbolsInfo('sallallahu3alayh5', array('sallallahu3alayh5')),
            new ArabicSymbolsInfo('radiyallahu3anhu2', array('radiyallahu3anhu2')),
            new ArabicSymbolsInfo('radiyallahu3anha2', array('radiyallahu3anha2')),
            new ArabicSymbolsInfo('radiyallahu3anhum2', array('radiyallahu3anhum2')),
            new ArabicSymbolsInfo('radiyallahu3anhuma2', array('radiyallahu3anhuma2')),
            new ArabicSymbolsInfo('radiyallahu3anhunna2', array('radiyallahu3anhunna2')),
            new ArabicSymbolsInfo('sallallahu3alayh6', array('sallallahu3alayh6')),
            new ArabicSymbolsInfo('3alayhissalam2', array('3alayhissalam2')),
            new ArabicSymbolsInfo('3alayhassalam2', array('3alayhassalam2')),
            new ArabicSymbolsInfo('3alayhimussalam2', array('3alayhimussalam2')),
            new ArabicSymbolsInfo('3alayhimassalam2', array('3alayhimassalam2')),
            new ArabicSymbolsInfo('ra7imahullah2', array('ra7imahullah2')),
            new ArabicSymbolsInfo('ra7imahumullah2', array('ra7imahumullah2')),
            new ArabicSymbolsInfo('ra7imahumallah2', array('ra7imahumallah2')),
            new ArabicSymbolsInfo('ra7imahallah2', array('ra7imahallah2')),
            new ArabicSymbolsInfo('ra7imahunnallah2', array('ra7imahunnallah2')),
            new ArabicSymbolsInfo('7izb', array('7izb1')),
            new ArabicSymbolsInfo('rubu3', array('rubu3')),
            new ArabicSymbolsInfo('thumun', array('thumun1')),
            new ArabicSymbolsInfo('sabt', array('sabt1')),
            new ArabicSymbolsInfo('a7ad', array('a7ad1')),
            new ArabicSymbolsInfo('ithnayn', array('ithnayn1')),
            new ArabicSymbolsInfo('thulatha', array('thulatha1')),
            new ArabicSymbolsInfo('arba3a', array('arba3a1')),
            new ArabicSymbolsInfo('khamis', array('khamis1')),
            new ArabicSymbolsInfo('jumu3a', array('jumu3a1')),
            new ArabicSymbolsInfo('mu7arram', array('mu7arram1')),
            new ArabicSymbolsInfo('safar', array('safar1')),
            new ArabicSymbolsInfo('rabi31', array('rabi31')),
            new ArabicSymbolsInfo('rabi32', array('rabi32')),
            new ArabicSymbolsInfo('jumada1', array('jumada1')),
            new ArabicSymbolsInfo('jumada2', array('jumada2')),
            new ArabicSymbolsInfo('rajab', array('rajab1')),
            new ArabicSymbolsInfo('cha3ban', array('cha3ban1')),
            new ArabicSymbolsInfo('ramadan', array('ramadan1')),
            new ArabicSymbolsInfo('chawal', array('chawal1')),
            new ArabicSymbolsInfo('dhulqa3da', array('dhulqa3da1')),
            new ArabicSymbolsInfo('dhul7jja', array('dhul7jja1')),
            new ArabicSymbolsInfo('3idmubarak', array('3idmubarak')),
            new ArabicSymbolsInfo('3idsa3id', array('3idsa3id')),
            new ArabicSymbolsInfo('mu7tawiyat', array('mu7tawiyat')),
        );


        if (!is_admin())
        {
            $replaceSymbolCallback = array($this, 'replace_symbols');

            # Common Wordpress filters
            add_filter('the_content', $replaceSymbolCallback, 500);
            add_filter('the_excerpt', $replaceSymbolCallback, 500);
            add_filter('get_comment_text', $replaceSymbolCallback, 500);
            add_filter('get_comment_excerpt', $replaceSymbolCallback, 500);

            add_filter('widget_text', $replaceSymbolCallback, 500);

            # Custom Plugin Filter
            # Can be used by theme/plugin authors to replace symbolicons in not supported places.
            add_filter('arabic_symbols_replace', $replaceSymbolCallback, 500);

            # bbpress filters
            add_filter('bbp_get_topic_content', $replaceSymbolCallback, 500);
            add_filter('bbp_get_reply_content', $replaceSymbolCallback, 500);

            add_action('wp_print_styles', array($this, 'enqueue_stylesheets_callback'));
        }
    }

    public static function init()
    {
        static $instance = null;
        if ($instance === null)
        {
            $instance = new ArabicSymbolsPlugin();
        }
    }

    public function enqueue_stylesheets_callback()
    {
        wp_register_style('kfgqpc-arabic-symbols', plugins_url('/css/kfgqpc-arabic-symbols.css', __FILE__));
        wp_enqueue_style('kfgqpc-arabic-symbols');
    }

    public function replace_symbols($content)
    {
        $content = $this->mask_content($content);
        foreach ($this->symbols as $symbol)
        {
            $content = $symbol->replaceTextsymbols($content);
        }
        $content = $this->unmask_content($content);
        return $content;
    }

    private function mask_content($content)
    {
        # Reset placeholders array
        $this->placeholders = array();

        # Mask all code blocks and HTML tags
        # NOTE: Make sure that <3 is not matched.
        return preg_replace_callback('=(?:<pre(?: .+)?>.*</pre>)|(?:<code(?: .+)?>.*</code>)|(?:<[^<]+>)=isU',
                                     array($this, 'mask_content_replace_callback'),
                                     $content);
    }

    public function mask_content_replace_callback($matches)
    {
        $matched_text         = $matches[0];
        $id                   = count($this->placeholders);
        $this->placeholders[] = $matched_text;
        $ret                  = $this->SECTION_MASKING_START_DELIM . $id . $this->SECTION_MASKING_END_DELIM;

        # At this stage, line break characters have already been replaced with <p> and <br> elements. Surround them with
        # spaces to enable symbol detection. Also, surround HTML comments with spaces.
        #
        # NOTE: At the moment I can't imagine a reason where adding white space around those element would cause any
        #  trouble. I might be wrong though.
        #
        # NOTE 2: The first regexp must match <p>, </p> as well as <br />.
        if (preg_match('#^<[/]?(?:p|br)\s*(?:/\s*)?>$#iU', $matched_text) || preg_match('/<!--.*-->/sU', $matched_text))
        {
            $ret = ' ' . $ret . ' ';
        }

        return $ret;
    }

    private function unmask_content($content)
    {
        $content = preg_replace_callback('=' . $this->SECTION_MASKING_START_DELIM . '(\d+)' . $this->SECTION_MASKING_END_DELIM . '=U',
                                         array($this, 'unmask_content_replace_callback'),
                                         $content);
        $this->placeholders = array();

        return $content;
    }

    public function unmask_content_replace_callback($matches)
    {
        $id = intval($matches[1]);

        return $this->placeholders[$id];
    }
}
