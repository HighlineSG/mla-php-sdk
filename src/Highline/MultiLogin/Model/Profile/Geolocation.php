<?php
namespace Highline\MultiLogin\Model\Profile;

class Geolocation
{
    CONST MODE_PROMPT = 'PROMPT';
    CONST MODE_BLOCK = 'BLOCK';
    CONST MODE_ALLOW = 'ALLOW';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $fillBasedOnExternalIp;

    /**
     * @var double
     */
    public $lat;

    /**
     * @var double
     */
    public $lng;

    /**
     * @var int
     */
    public $accuracy;
}
