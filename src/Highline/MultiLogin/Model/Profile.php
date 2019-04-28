<?php
namespace Highline\MultiLogin\Model;

use Highline\MultiLogin\Api\Operation\Create;

class Profile
{
    const OBJECT_NAME = 'profile';

    use Create;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $browser;

    /**
     * @var string
     */
    public $os;

    /**
     * @var array
     */
    public $network;
}
