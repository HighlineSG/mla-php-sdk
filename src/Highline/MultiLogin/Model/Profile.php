<?php
namespace Highline\MultiLogin\Model;

use Highline\MultiLogin\Api\Operation\Create;
use Highline\MultiLogin\Model\Profile\AudioContext;
use Highline\MultiLogin\Model\Profile\Canvas;
use Highline\MultiLogin\Model\Profile\Fonts;
use Highline\MultiLogin\Model\Profile\Geolocation;
use Highline\MultiLogin\Model\Profile\MediaDevices;
use Highline\MultiLogin\Model\Profile\Navigator;
use Highline\MultiLogin\Model\Profile\Plugins;
use Highline\MultiLogin\Model\Profile\Storage;
use Highline\MultiLogin\Model\Profile\Timezone;
use Highline\MultiLogin\Model\Profile\WebRTC;

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
     * @var Navigator
     */
    public $navigator;

    /**
     * @var Plugins
     */
    public $plugins;

    /**
     * @var Storage
     */
    public $storage;

    /**
     * @var array
     */
    public $network;

    /**
     * @var Timezone
     */
    public $timezone;

    /**
     * @var Geolocation
     */
    public $geolocation;

    /**
     * @var AudioContext
     */
    public $audioContext;

    /**
     * @var Canvas
     */
    public $canvas;

    /**
     * @var Fonts
     */
    public $fonts;

    /**
     * @var MediaDevices
     */
    public $mediaDevices;

    /**
     * @var WebRTC
     */
    public $webRTC;
}
