<?php

require_once(dirname(__FILE__) . '/ArabicExpressionsInfo.php');

/**
 * Main plugin class.
 */
class ArabicExpressionsPlugin
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
     * @var ArabicExpressionsInfo[]
     */
    private $expressions;

    private function __construct()
    {
        # Adding some characters (here: "@@") to the delimiters gives us the ability to distinguish them both in the markup
        # text and also prevents the misinterpretation of real MD5 hashes that might be contained in the markup text.
        $this->SECTION_MASKING_START_DELIM = self::DELIM_CHARS . md5('%%%') . '@';
        $this->SECTION_MASKING_END_DELIM   = '@' . md5('%%%') . self::DELIM_CHARS;

        $this->expressions = array(
            new ArabicExpressionsInfo('basmallah', array('basmallah1')),
            new ArabicExpressionsInfo('basmallah2', array('basmallah2')),
            new ArabicExpressionsInfo('basmallah3', array('basmallah3')),
            new ArabicExpressionsInfo('asmaullah', array('asmaullah')),
            new ArabicExpressionsInfo('allah', array('allah1')),
            new ArabicExpressionsInfo('tamma', array('tamma1')),
            new ArabicExpressionsInfo('quran', array('quran1')),
            new ArabicExpressionsInfo('allahuakbar', array('allahuakbar')),
            new ArabicExpressionsInfo('jallajalaaluhu', array('jallajalaaluhu')),
            new ArabicExpressionsInfo('jallawa3ala', array('jallawa3ala')),
            new ArabicExpressionsInfo('3azzawajalla', array('3azzawajalla')),
            new ArabicExpressionsInfo('sub7anah', array('sub7anah')),
            new ArabicExpressionsInfo('tabaraka', array('tabaraka')),
            new ArabicExpressionsInfo('sallallahu3alayh2', array('sallallahu3alayh2')),
            new ArabicExpressionsInfo('sallallahu3alayh', array('sallallahu3alayh')),
            new ArabicExpressionsInfo('radiyallahu3anhu', array('radiyallahu3anhu')),
            new ArabicExpressionsInfo('radiyallahu3anha', array('radiyallahu3anha')),
            new ArabicExpressionsInfo('radiyallahu3anhunna', array('radiyallahu3anhunna')),
            new ArabicExpressionsInfo('radiyallahu3anhuma', array('radiyallahu3anhuma')),
            new ArabicExpressionsInfo('radiyallahu3anhum', array('radiyallahu3anhum')),
            new ArabicExpressionsInfo('sallallahu3alayh4', array('sallallahu3alayh4')),
            new ArabicExpressionsInfo('sallallahu3alayh3', array('sallallahu3alayh3')),
            new ArabicExpressionsInfo('3alayhassalam', array('3alayhassalam')),
            new ArabicExpressionsInfo('3alayhimussalam', array('3alayhimussalam')),
            new ArabicExpressionsInfo('3alayhimassalam', array('3alayhimassalam')),
            new ArabicExpressionsInfo('3alayhissalam', array('3alayhissalam')),
            new ArabicExpressionsInfo('ra7imahallah', array('ra7imahallah')),
            new ArabicExpressionsInfo('ra7imahunnallah', array('ra7imahunnallah')),
            new ArabicExpressionsInfo('ra7imahullah', array('ra7imahullah')),
            new ArabicExpressionsInfo('ra7imahumallah', array('ra7imahumallah')),
            new ArabicExpressionsInfo('ra7imahumullah', array('ra7imahumullah')),
            new ArabicExpressionsInfo('muqaddimah', array('muqaddimah1')),
            new ArabicExpressionsInfo('fihris', array('fihris1')),
            new ArabicExpressionsInfo('fasl', array('fasl1')),
            new ArabicExpressionsInfo('tamhid', array('tamhid1')),
            new ArabicExpressionsInfo('tammat', array('tammat1')),
            new ArabicExpressionsInfo('bab', array('bab1')),
            new ArabicExpressionsInfo('juz', array('juz1')),
            new ArabicExpressionsInfo('tahanina', array('tahanina1')),
            new ArabicExpressionsInfo('allahuakbar2', array('allahuakbar2')),
            new ArabicExpressionsInfo('3azzawajalla2', array('3azzawajalla2')),
            new ArabicExpressionsInfo('sub7anah2', array('sub7anah2')),
            new ArabicExpressionsInfo('jallajalaaluhu2', array('jallajalaaluhu2')),
            new ArabicExpressionsInfo('jallawa3ala2', array('jallawa3ala2')),
            new ArabicExpressionsInfo('tabaraka2', array('tabaraka2')),
            new ArabicExpressionsInfo('sallallahu3alayh5', array('sallallahu3alayh5')),
            new ArabicExpressionsInfo('radiyallahu3anhu2', array('radiyallahu3anhu2')),
            new ArabicExpressionsInfo('radiyallahu3anha2', array('radiyallahu3anha2')),
            new ArabicExpressionsInfo('radiyallahu3anhum2', array('radiyallahu3anhum2')),
            new ArabicExpressionsInfo('radiyallahu3anhuma2', array('radiyallahu3anhuma2')),
            new ArabicExpressionsInfo('radiyallahu3anhunna2', array('radiyallahu3anhunna2')),
            new ArabicExpressionsInfo('sallallahu3alayh6', array('sallallahu3alayh6')),
            new ArabicExpressionsInfo('3alayhissalam2', array('3alayhissalam2')),
            new ArabicExpressionsInfo('3alayhassalam2', array('3alayhassalam2')),
            new ArabicExpressionsInfo('3alayhimussalam2', array('3alayhimussalam2')),
            new ArabicExpressionsInfo('3alayhimassalam2', array('3alayhimassalam2')),
            new ArabicExpressionsInfo('ra7imahullah2', array('ra7imahullah2')),
            new ArabicExpressionsInfo('ra7imahumullah2', array('ra7imahumullah2')),
            new ArabicExpressionsInfo('ra7imahumallah2', array('ra7imahumallah2')),
            new ArabicExpressionsInfo('ra7imahallah2', array('ra7imahallah2')),
            new ArabicExpressionsInfo('ra7imahunnallah2', array('ra7imahunnallah2')),
            new ArabicExpressionsInfo('7izb', array('7izb1')),
            new ArabicExpressionsInfo('rubu3', array('rubu3')),
            new ArabicExpressionsInfo('thumun', array('thumun1')),
            new ArabicExpressionsInfo('sabt', array('sabt1')),
            new ArabicExpressionsInfo('a7ad', array('a7ad1')),
            new ArabicExpressionsInfo('ithnayn', array('ithnayn1')),
            new ArabicExpressionsInfo('thulatha', array('thulatha1')),
            new ArabicExpressionsInfo('arba3a', array('arba3a1')),
            new ArabicExpressionsInfo('khamis', array('khamis1')),
            new ArabicExpressionsInfo('jumu3a', array('jumu3a1')),
            new ArabicExpressionsInfo('mu7arram', array('mu7arram1')),
            new ArabicExpressionsInfo('safar', array('safar1')),
            new ArabicExpressionsInfo('rabi31', array('rabi31')),
            new ArabicExpressionsInfo('rabi32', array('rabi32')),
            new ArabicExpressionsInfo('jumada1', array('jumada1')),
            new ArabicExpressionsInfo('jumada2', array('jumada2')),
            new ArabicExpressionsInfo('rajab', array('rajab1')),
            new ArabicExpressionsInfo('cha3ban', array('cha3ban1')),
            new ArabicExpressionsInfo('ramadan', array('ramadan1')),
            new ArabicExpressionsInfo('chawal', array('chawal1')),
            new ArabicExpressionsInfo('dhulqa3da', array('dhulqa3da1')),
            new ArabicExpressionsInfo('dhul7jja', array('dhul7jja1')),
            new ArabicExpressionsInfo('3idmubarak', array('3idmubarak')),
            new ArabicExpressionsInfo('3idsa3id', array('3idsa3id')),
            new ArabicExpressionsInfo('mu7tawiyat', array('mu7tawiyat')),
        );


        if (!is_admin())
        {
            $replaceExpressionCallback = array($this, 'replace_expressions');

            # Common Wordpress filters
            add_filter('the_content', $replaceExpressionCallback, 500);
            add_filter('the_excerpt', $replaceExpressionCallback, 500);
            add_filter('get_comment_text', $replaceExpressionCallback, 500);
            add_filter('get_comment_excerpt', $replaceExpressionCallback, 500);

            add_filter('widget_text', $replaceExpressionCallback, 500);

            # Custom Plugin Filter
            # Can be used by theme/plugin authors to replace expressions in not supported places.
            add_filter('arabic_expressions_replace', $replaceExpressionCallback, 500);

            # bbpress filters
            add_filter('bbp_get_topic_content', $replaceExpressionCallback, 500);
            add_filter('bbp_get_reply_content', $replaceExpressionCallback, 500);

            add_action('wp_print_styles', array($this, 'enqueue_stylesheets_callback'));
        }
    }

    public static function init()
    {
        static $instance = null;
        if ($instance === null)
        {
            $instance = new ArabicExpressionsPlugin();
        }
    }

    public function enqueue_stylesheets_callback()
    {
        wp_register_style('kfgqpc-arabic-symbols', plugins_url('/css/kfgqpc-arabic-symbols.css', __FILE__));
        wp_enqueue_style('kfgqpc-arabic-symbols');
    }

    public function replace_expressions($content)
    {
        $content = $this->mask_content($content);
        foreach ($this->expressions as $expression)
        {
            $content = $expression->replaceTextexpressions($content);
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
        # spaces to enable expression detection. Also, surround HTML comments with spaces.
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
