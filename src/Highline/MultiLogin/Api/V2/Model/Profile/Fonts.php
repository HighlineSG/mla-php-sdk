<?php
namespace Highline\MultiLogin\Api\V2\Model\Profile;

class Fonts
{
    CONST MODE_REAL = 'REAL';
    CONST MODE_FAKE = 'FAKE';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $maskGlyphs;

    /**
     * @var array
     */
    public $families;
}
