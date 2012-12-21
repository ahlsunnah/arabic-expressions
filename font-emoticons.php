<?php
/*
Plugin Name: Font Emoticons
Plugin URI:
Description: Replace the standard WP Smileys with font icons.
Version: 1.0.0
Author: Sebastian Krysmanski
Author URI: http://manski.net
*/

class FontEmoticonInfo {
  private $name;
  private $text_reps;

  public function __construct($name, $text_reps) {
    $this->name = $name;
    $this->text_reps = $text_reps;
  }

  public function insert_emots($post_text) {
    $code = '<span class="icon-emo-'.$this->name.'"/>';
    return str_replace($this->text_reps, $code, $post_text);
  }
}

class FontEmoticons {
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

  private $emots;

  private function __construct() {
    # Adding some characters (here: "@@") to the delimiters gives us the ability to distinguish them both in the markup
    # text and also prevents the misinterpretation of real MD5 hashes that might be contained in the markup text.
    #
    # NOTE: The additional character(s) (@) must neither have a meaning in BlogText (so that it's not parsed by
    #   accident) nor must it have a meaning in a regular expression (again so that it's not parsed by accident).
    $this->SECTION_MASKING_START_DELIM = '@@'.md5('%%%');
    $this->SECTION_MASKING_END_DELIM = md5('%%%').'@@';

    # See: http://codex.wordpress.org/Using_Smilies#What_Text_Do_I_Type_to_Make_Smileys.3F
    $this->emots = array(
      new FontEmoticonInfo('happy', array(':)', ':-)', ':smile:')),
      new FontEmoticonInfo('unhappy', array(':(', ':-(', ':sad:')),
      new FontEmoticonInfo('wink2', array(';)', ';-)', ':wink:')),
      new FontEmoticonInfo('tongue', array(':P', ':-P', ':razz:')),
      new FontEmoticonInfo('sleep', array('-.-', '-_-', ':sleep:')),
      new FontEmoticonInfo('thumbsup', array(':thumbs:', ':thumbsup:')),
      new FontEmoticonInfo('devil', array(':devil:', ':twisted:')),
      new FontEmoticonInfo('surprised', array(':o', ':-o', ':eek:', '8O', '8o', '8-O', '8-o', ':shock:')),
      new FontEmoticonInfo('coffee', array(':coffee:')),
      new FontEmoticonInfo('sunglasses', array('8)', '8-)', 'B)', 'B-)', ':cool:')),
      new FontEmoticonInfo('displeased', array(':/', ':-/')),
      new FontEmoticonInfo('beer', array(':beer:')),
      new FontEmoticonInfo('grin', array(':D', ':-D', ':grin:')),
      # No real icon for "mad" available yet. Use the same as angry.
      new FontEmoticonInfo('angry', array('x(', 'x-(', 'X(', 'X-(', ':angry:', ':x', ':-x', ':mad:')),
      new FontEmoticonInfo('saint', array('O:)', '0:)', 'o:)', 'O:-)', '0:-)', 'o:-)', ':saint:')),
      new FontEmoticonInfo('cry', array(":'(", ":'-(", ':cry:')),
      new FontEmoticonInfo('shoot', array(':shoot:')),
      new FontEmoticonInfo('laugh', array('^^', '^_^', ':lol:'))
    );

    # Disable Wordpress' own smileys
    update_option('use_smilies', 0);

    add_filter('the_content', array($this, 'replace_emots'), 500);
    if (!is_admin()) {
      add_action('wp_print_styles', array($this, 'enqueue_stylesheets_callback'));
    }

  }

  public static function init() {
    static $instance = null;
    if ($instance === null) {
      $instance = new FontEmoticons();
    }
  }

  public function enqueue_stylesheets_callback() {
    wp_register_style('emoticons', WP_PLUGIN_URL.'/font-emoticons/emoticons.css');
    wp_enqueue_style('emoticons');
  }

  public function replace_emots($content) {
    $content = $this->mask_content($content);

    foreach ($this->emots as $emot) {
      $content = $emot->insert_emots($content);
    }

    $content = $this->unmask_content($content);

    return $content;
  }

  private function mask_content($content) {
    # Reset placeholders array
    $this->placeholders = array();
    # Mask all code blocks and HTML tags
    return preg_replace_callback('=<pre(?: .+)?>.*</pre>|<code(?: .+)?>.*</code>|<.+>=isU', array($this, 'mask_content_replace_callback'), $content);
  }

  public function mask_content_replace_callback($matches) {
    $id = count($this->placeholders);
    $this->placeholders[] = $matches[0];
    return $this->SECTION_MASKING_START_DELIM.$id.$this->SECTION_MASKING_END_DELIM;
  }

  private function unmask_content($content) {
    $content = preg_replace_callback('='.$this->SECTION_MASKING_START_DELIM.'(\d+)'.$this->SECTION_MASKING_END_DELIM.'=U', array($this, 'unmask_content_replace_callback'), $content);
    $this->placeholders = array();
    return $content;
  }

  public function unmask_content_replace_callback($matches) {
    $id =  intval($matches[1]);
    return $this->placeholders[$id];
  }
}

FontEmoticons::init();

register_deactivation_hook(__FILE__, 'fe_plugin_deactivated');
function fe_plugin_deactivated() {
  # Re-enable Wordpress smileys
  update_option('use_smilies', 1);
}