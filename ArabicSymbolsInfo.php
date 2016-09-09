<?php

/**
 * Represents information about a single symbol.
 */
class ArabicSymbolsInfo
{
    const SYMBOLS_BASE_CLASS_NAME = 'as-';

    /**
     * The regex matching this symbol.
     * @var string
     */
    private $m_regex;

    /**
     * The regex replacement HTML code of this symbol.
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
        //   trailing whitespace) so that multiple consecutive symbols are detected correctly (see issue #5).
        // NOTE 2: All HTML tags have been escaped at this point (with "DELIM_CHARS" being the marker).
        $this->m_regex = '/(?<=\s|^|' . ArabicSymbolsPlugin::DELIM_CHARS . ')'
                       . '(?:' . $this->m_regex . ')'
                       . '(?=\s|$|' . ArabicSymbolsPlugin::DELIM_CHARS . ')/U';

        $this->m_htmlCode = '<span class="' . self::SYMBOLS_BASE_CLASS_NAME . $name . '"></span>';
    }

    public function replaceTextSymbols($postText)
    {
        return preg_replace($this->m_regex, $this->m_htmlCode, $postText);
    }
}
