<?php
namespace XSpeedPay;

use XSpeedPay\Base\GatewayFactory;

class XSpeedPay
{
    private static $factory;

    /**
     * Create a payment gateway instance
     * @param $name
     * @return mixed
     */
    public static function create($name, $isTestMode = false)
    {
        if (self::$factory === null) {
            return GatewayFactory::create($name, $isTestMode);
        }

        return self::$factory;
    }
}