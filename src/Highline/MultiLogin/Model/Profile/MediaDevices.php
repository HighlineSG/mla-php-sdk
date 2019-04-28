<?php
namespace Highline\MultiLogin\Model\Profile;

class MediaDevices
{
    CONST MODE_REAL = 'REAL';
    CONST MODE_FAKE = 'FAKE';

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $videoInputs;

    /**
     * @var int
     */
    public $audioInputs;

    /**
     * @var int
     */
    public $audioOutputs;
}
