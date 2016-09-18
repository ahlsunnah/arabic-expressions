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
            new ArabicExpressionsInfo('bs1', array('-bs1-')),
            new ArabicExpressionsInfo('bs2', array('-bs2-')),
            new ArabicExpressionsInfo('bs3', array('-bs3-')),
            new ArabicExpressionsInfo('asmaullah', array('-asmaullah-')),
            new ArabicExpressionsInfo('lj', array('-lj-')),
            new ArabicExpressionsInfo('tamma', array('-tamma-')),
            new ArabicExpressionsInfo('qr', array('-qr-')),
            new ArabicExpressionsInfo('Aa', array('-Aa-')),
            new ArabicExpressionsInfo('Jj', array('-Jj-')),
            new ArabicExpressionsInfo('Ja', array('-Ja-')),
            new ArabicExpressionsInfo('Az', array('-Az-')),
            new ArabicExpressionsInfo('St', array('-St-')),
            new ArabicExpressionsInfo('Tt', array('-Tt-')),
            new ArabicExpressionsInfo('Sawaws', array('-Sawaws-')),
            new ArabicExpressionsInfo('Saws', array('-Saws-')),
            new ArabicExpressionsInfo('Rau', array('-Rau-')),
            new ArabicExpressionsInfo('Raa', array('-Raa-')),
            new ArabicExpressionsInfo('Raun', array('-Raun-')),
            new ArabicExpressionsInfo('Rauma', array('-Rauma-')),
            new ArabicExpressionsInfo('Raum', array('-Raum-')),
            new ArabicExpressionsInfo('Awasws', array('-Awasws-')),
            new ArabicExpressionsInfo('Asws', array('-Asws-')),
            new ArabicExpressionsInfo('Aas', array('-Aas-')),
            new ArabicExpressionsInfo('Aims', array('-Aims-')),
            new ArabicExpressionsInfo('Aimas', array('-Aimas-')),
            new ArabicExpressionsInfo('As', array('-As-')),
            new ArabicExpressionsInfo('Ra', array('-Ra-')),
            new ArabicExpressionsInfo('Run', array('-Run-')),
            new ArabicExpressionsInfo('Ru', array('-Ru-')),
            new ArabicExpressionsInfo('Ruma', array('-Ruma-')),
            new ArabicExpressionsInfo('Rum', array('-Rum-')),
            new ArabicExpressionsInfo('muqaddimah', array('-muqaddimah-')),
            new ArabicExpressionsInfo('fihris', array('-fihris-')),
            new ArabicExpressionsInfo('fasl', array('-fasl-')),
            new ArabicExpressionsInfo('tamhid', array('-tamhid-')),
            new ArabicExpressionsInfo('tammat', array('-tammat-')),
            new ArabicExpressionsInfo('bab', array('-bab-')),
            new ArabicExpressionsInfo('juz', array('-juz-')),
            new ArabicExpressionsInfo('tahanina', array('-tahanina-')),
            new ArabicExpressionsInfo('aa', array('-aa-')),
            new ArabicExpressionsInfo('az', array('-az-')),
            new ArabicExpressionsInfo('st', array('-st-')),
            new ArabicExpressionsInfo('jj', array('-jj-')),
            new ArabicExpressionsInfo('ja', array('-ja-')),
            new ArabicExpressionsInfo('tt', array('-tt-')),
            new ArabicExpressionsInfo('saws', array('-saws-')),
            new ArabicExpressionsInfo('rau', array('-rau-')),
            new ArabicExpressionsInfo('raa', array('-raa-')),
            new ArabicExpressionsInfo('raum', array('-raum-')),
            new ArabicExpressionsInfo('rauma', array('-rauma-')),
            new ArabicExpressionsInfo('raun', array('-raun-')),
            new ArabicExpressionsInfo('asws', array('-asws-')),
            new ArabicExpressionsInfo('as', array('-as-')),
            new ArabicExpressionsInfo('aas', array('-aas-')),
            new ArabicExpressionsInfo('aims', array('-aims-')),
            new ArabicExpressionsInfo('aimas', array('-aimas-')),
            new ArabicExpressionsInfo('ru', array('-ru-')),
            new ArabicExpressionsInfo('rum', array('-rum-')),
            new ArabicExpressionsInfo('ruma', array('-ruma-')),
            new ArabicExpressionsInfo('ra', array('-ra-')),
            new ArabicExpressionsInfo('run', array('-run-')),
            new ArabicExpressionsInfo('7izb', array('-7izb-')),
            new ArabicExpressionsInfo('rubu3', array('-rubu3-')),
            new ArabicExpressionsInfo('thumun', array('-thumun-')),
            new ArabicExpressionsInfo('sabt', array('-sabt-')),
            new ArabicExpressionsInfo('a7ad', array('-a7ad-')),
            new ArabicExpressionsInfo('ithnayn', array('-ithnayn-')),
            new ArabicExpressionsInfo('thulatha', array('-thulatha-')),
            new ArabicExpressionsInfo('arba3a', array('-arba3a-')),
            new ArabicExpressionsInfo('khamis', array('-khamis-')),
            new ArabicExpressionsInfo('jumu3a', array('-jumu3a-')),
            new ArabicExpressionsInfo('mu7arram', array('-mu7arram-')),
            new ArabicExpressionsInfo('safar', array('-safar-')),
            new ArabicExpressionsInfo('rabi31', array('-rabi31-')),
            new ArabicExpressionsInfo('rabi32', array('-rabi32-')),
            new ArabicExpressionsInfo('jumada1', array('-jumada1-')),
            new ArabicExpressionsInfo('jumada2', array('-jumada2-')),
            new ArabicExpressionsInfo('rajab', array('-rajab-')),
            new ArabicExpressionsInfo('cha3ban', array('-cha3ban-')),
            new ArabicExpressionsInfo('ramadan', array('-ramadan-')),
            new ArabicExpressionsInfo('chawal', array('-chawal-')),
            new ArabicExpressionsInfo('dhulqa3da', array('-dhulqa3da-')),
            new ArabicExpressionsInfo('dhul7jja', array('-dhul7jja-')),
            new ArabicExpressionsInfo('3idmubarak', array('-3idmubarak-')),
            new ArabicExpressionsInfo('3idsa3id', array('-3idsa3id-')),
            new ArabicExpressionsInfo('mu7tawiyat', array('-mu7tawiyat-')),
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
        $content = preg_replace_callback(
            '=' . $this->SECTION_MASKING_START_DELIM . '(\d+)' . $this->SECTION_MASKING_END_DELIM . '=U',
            array($this, 'unmask_content_replace_callback'),
            $content
        );
        $this->placeholders = array();

        return $content;
    }

    public function unmask_content_replace_callback($matches)
    {
        $id = intval($matches[1]);

        return $this->placeholders[$id];
    }
}
