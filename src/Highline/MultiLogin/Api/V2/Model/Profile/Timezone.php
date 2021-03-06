<?php
namespace Highline\MultiLogin\Api\V2\Model\Profile;

class Timezone
{
    CONST MODE_REAL = 'REAL';
    CONST MODE_FAKE = 'FAKE';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $fillBasedOnExternalIp;

    /**
     * @var string
     */
    public $zoneId;
}
