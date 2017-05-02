<?php
namespace XuePay;

use XuePay\Base\GatewayFactory;
define('XuePay_Base_Path', __DIR__);

/**
 * Class XuePay
 * @package XuePay
 */
class XuePay
{
    private static $factory;

    /**
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public static function create($name, $isTestMode = false)
    {
        if (self::$factory === null) {
            return GatewayFactory::create($name, $isTestMode);
        }

        return self::$factory;
    }
} 
