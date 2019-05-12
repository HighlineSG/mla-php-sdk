<?php
namespace Highline\MultiLogin\Api\V1\Model;

class WebRtc
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $fillOnStart;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var array
     */
    public $localIps;
}
