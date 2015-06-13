<?php

/**
 * Represents information about a single font emoticon.
 */
class FontEmoticonInfo
{
    const EMOTS_BASE_CLASS_NAME = 'wp-font-emots-';

    /**
     * The regex matching this emoticon.
     * @var string
     */
    private $m_regex;

    /**
     * The regex replacement HTML code of this emoticon.
     * @var string
     */
    private $m_htmlCode;

    public function __construct($name, $textRepresentations)
    {
        $this->m_regex = '';
        $is_first    = true;
        foreach ($textRepresentations as $smiley)
        {
            if ($is_first)
            {
                $is_first = false;
            }
            else
            {
                $this->m_regex .= '|';
            }
            $this->m_regex .= preg_quote($smiley, '/');
        }

        // NOTE: We need to use lookahead and lookbehind here (instead of capturing the leading and
        //   trailing whitespace) so that multiple consecutive emoticons are detected correctly (see issue #5).
        // NOTE 2: All HTML tags have been escaped at this point (with "DELIM_CHARS" being the marker).
        $this->m_regex = '/(?<=\s|^|' . FontEmoticonsPlugin::DELIM_CHARS . ')'
                       . '(?:' . $this->m_regex . ')'
                       . '(?=\s|$|' . FontEmoticonsPlugin::DELIM_CHARS . ')/U';

        $this->m_htmlCode = '<span class="' . self::EMOTS_BASE_CLASS_NAME . $name . '"></span>';
    }

    public function replaceTextEmots($postText)
    {
        return preg_replace($this->m_regex, $this->m_htmlCode, $postText);
    }
}
