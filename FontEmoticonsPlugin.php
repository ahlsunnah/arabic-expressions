<?php

require_once(dirname(__FILE__) . '/FontEmoticonInfo.php');

/**
 * Main plugin class.
 */
class FontEmoticonsPlugin
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
     * @var FontEmoticonInfo[]
     */
    private $emots;

    private function __construct()
    {
        # Adding some characters (here: "@@") to the delimiters gives us the ability to distinguish them both in the markup
        # text and also prevents the misinterpretation of real MD5 hashes that might be contained in the markup text.
        $this->SECTION_MASKING_START_DELIM = self::DELIM_CHARS . md5('%%%') . '@';
        $this->SECTION_MASKING_END_DELIM   = '@' . md5('%%%') . self::DELIM_CHARS;

        # See: http://codex.wordpress.org/Using_Smilies#What_Text_Do_I_Type_to_Make_Smileys.3F
        $this->emots = array(
            #
            # Emots
            #
            new FontEmoticonInfo('emo-happy', array(':)', ':-)', '(-:', '(:', ':smile:')),
            new FontEmoticonInfo('emo-unhappy', array(':(', ':-(', ':sad:')),
            new FontEmoticonInfo('emo-wink', array(';)', ';-)', ':wink:')),
            new FontEmoticonInfo('emo-tongue', array(':P', ':-P', ':razz:')),
            new FontEmoticonInfo('emo-sleep', array('-.-', '-_-', ':sleep:')),
            new FontEmoticonInfo('emo-devil', array('>:)', '>:-)', ':devil:', ':twisted:')),
            new FontEmoticonInfo('emo-surprised', array(':o', ':-o', ':O', ':-O', ':eek:', '8O', '8o', '8-O', '8-o', ':shock:')),
            new FontEmoticonInfo('emo-coffee', array(':coffee:')),
            new FontEmoticonInfo('emo-sunglasses', array('8)', '8-)', 'B)', 'B-)', ':cool:')),
            new FontEmoticonInfo('emo-displeased', array(':/', ':-/')),
            new FontEmoticonInfo('emo-beer', array(':beer:')),
            new FontEmoticonInfo('emo-grin', array(':D', ':-D', ':grin:')),
            # No real icon for "mad" available yet. Use the same as angry.
            new FontEmoticonInfo('emo-angry', array('x(', 'x-(', 'X(', 'X-(', ':angry:', ':x', ':-x', ':mad:')),
            new FontEmoticonInfo('emo-saint', array('O:)', '0:)', 'o:)', 'O:-)', '0:-)', 'o:-)', ':saint:')),
            new FontEmoticonInfo('emo-cry', array(":'(", ":'-(", ':cry:')),
            new FontEmoticonInfo('emo-shoot', array(':shoot:')),
            new FontEmoticonInfo('emo-squint', array('|)', ':squint:')),
            new FontEmoticonInfo('emo-laugh', array('^^', '^_^', ':lol:')),

            #
            # General purpose icons
            #
            new FontEmoticonInfo('thumbs-up', array(':thumbs:', ':thumbsup:')),
            new FontEmoticonInfo('thumbs-down', array(':thumbsdown:')),
            new FontEmoticonInfo('heart', array('<3', '&lt;3', ':heart:')),
            new FontEmoticonInfo('star', array(':star:')),
            new FontEmoticonInfo('ok', array('(/)')),
            new FontEmoticonInfo('cancel', array('(x)', '(X)')),
            new FontEmoticonInfo('plus-circled', array('(+)')),
            new FontEmoticonInfo('minus-circled', array('(-)')),
            new FontEmoticonInfo('help-circled', array('(?)')),
            new FontEmoticonInfo('info-circled', array('(i)')),
        );

        # Disable Wordpress' own smileys
        update_option('use_smilies', 0);

        if (!is_admin())
        {
            $replaceEmotCallback = array($this, 'replace_emots');

            # Common Wordpress filters
            add_filter('the_content', $replaceEmotCallback, 500);
            add_filter('the_excerpt', $replaceEmotCallback, 500);
            add_filter('get_comment_text', $replaceEmotCallback, 500);
            add_filter('get_comment_excerpt', $replaceEmotCallback, 500);

            add_filter('widget_text', $replaceEmotCallback, 500);

            # Custom Plugin Filter
            # Can be used by theme/plugin authors to replace emoticons in not supported places.
            add_filter('wp_font_emots_replace', $replaceEmotCallback, 500);

            # bbpress filters
            add_filter('bbp_get_topic_content', $replaceEmotCallback, 500);
            add_filter('bbp_get_reply_content', $replaceEmotCallback, 500);

            add_action('wp_print_styles', array($this, 'enqueue_stylesheets_callback'));
        }
    }

    public static function init()
    {
        static $instance = null;
        if ($instance === null)
        {
            $instance = new FontEmoticonsPlugin();
        }
    }

    public function enqueue_stylesheets_callback()
    {
        wp_register_style('wp-font-emoticons', plugins_url('emoticons.css', __FILE__));
        wp_enqueue_style('wp-font-emoticons');
    }

    public function replace_emots($content)
    {
        $content = $this->mask_content($content);

        foreach ($this->emots as $emot)
        {
            $content = $emot->replaceTextEmots($content);
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
        # spaces to enable emoticon detection. Also, surround HTML comments with spaces.
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
