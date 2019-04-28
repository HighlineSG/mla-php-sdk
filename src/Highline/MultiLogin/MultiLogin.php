<?php
namespace Highline\MultiLogin;

class MultiLogin
{
    /**
     * @var string
     */
    public static $token;

    /**
     * @var string
     */
    public static $apiEndpoint = 'https://api.multiloginapp.com/v2/';

    /**
     * @return string
     */
    public static function getToken(): string
    {
        return self::$token;
    }

    /**
     * @param string $token
     */
    public static function setToken(string $token)
    {
        self::$token = $token;
    }

    /**
     * @return string
     */
    public static function getApiEndpoint(): string
    {
        return self::$apiEndpoint;
    }
}
