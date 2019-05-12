<?php
namespace Highline\MultiLogin\Api\V2\Model\Profile;

class WebRTC
{
    CONST MODE_REAL = 'REAL';
    CONST MODE_BLOCK = 'BLOCK';
    CONST MODE_FAKE = 'FAKE';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $fillBasedOnExternalIp;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var array
     */
    public $localIps;
}
