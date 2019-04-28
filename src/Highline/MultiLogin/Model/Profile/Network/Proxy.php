<?php
namespace Highline\MultiLogin\Model\Profile\Network;

class Proxy
{
    const TYPE_NONE = 'NONE';
    const TYPE_HTTP = 'HTTP';
    const TYPE_SOCKS = 'SOCKS';

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;
}
