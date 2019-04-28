<?php
namespace Highline\MultiLogin\Model;

use Highline\MultiLogin\Api\Operation\Create;

class Profile
{
    const OBJECT_NAME = 'profile';

    const BROWSER_MIMIC = 'mimic';
    const BROWSER_STEALTHFOX = 'stealthfox';

    const OS_LINUX = 'lin';
    const OS_MAC = 'mac';
    const OS_WINDOWS = 'win';

    use Create;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notes;

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
