<?php
namespace Highline\MultiLogin\Api\V1\Model;

class Profile
{
    const OBJECT_NAME = 'profile';

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $browserType;

    /**
     * @var string
     */
    public $proxyHost;

    /**
     * @var int
     */
    public $proxyPort;

    /**
     * @var string
     */
    public $proxyUser;

    /**
     * @var string
     */
    public $proxyPass;

    /**
     * @var string
     */
    public $proxyType;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var string
     */
    public $userAgent;

    /**
     * @var bool
     */
    public $disablePlugins;

    /**
     * @var bool
     */
    public $disableFlashPlugin;

    /**
     * @var string
     */
    public $customExtensionFileNames;

    /**
     * @var string
     */
    public $canvasDefType;

    /**
     * @var bool
     */
    public $maskFonts;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $doNotTrack;

    /**
     * @var int
     */
    public $hardwareConcurrency;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $buildID;

    /**
     * @var string
     */
    public $langHdr;

    /**
     * @var int
     */
    public $screenHeight;

    /**
     * @var int
     */
    public $screenWidth;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var bool
     */
    public $timeZoneFillOnStart;

    /**
     * @var string
     */
    public $startUrl;

    /**
     * @var bool
     */
    public $forbidConcurrentExecution;

    /**
     * @var Audio
     */
    public $audio;

    /**
     * @var array
     */
    public $dns;

    /**
     * @var Geolocation
     */
    public $geolocation;

    /**
     * @var MediaDevices
     */
    public $mediaDevices;

    /**
     * @var Webgl
     */
    public $webgl;

    /**
     * @var WebRtc
     */
    public $webRtc;

    /**
     * @var bool
     */
    public $generateZeroFingerprintsData;
}
