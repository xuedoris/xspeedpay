<?php
namespace XSpeedPay\Base;
use RuntimeException;

/**
 * Class GatewayFactory
 */
class GatewayFactory
{
    public static function create($name, $isTestMode)
    {
        $class = Helper::getGatewayClassName($name);
        if ($class === null) {
            throw new RuntimeException('Gateway ' . $name . ' is not supported');
        }
        if (!class_exists($class)) {
            throw new RuntimeException("Class '$class' not found");
        }
        return new $class($isTestMode);
    }
} 
