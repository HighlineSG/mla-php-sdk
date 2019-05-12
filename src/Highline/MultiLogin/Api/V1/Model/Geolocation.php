<?php
namespace Highline\MultiLogin\Api\V1\Model;

class Geolocation
{
    /**
     * @var string
     */
    public $permitType;

    /**
     * @var bool
     */
    public $fillOnStart;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var int
     */
    public $accuracy;
}
