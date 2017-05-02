<?php
namespace XuePay\Base;
use Exception;

/**
 * Class GatewayFactory
 * @package XuePay\Base
 */
class GatewayFactory
{
    public static function create($name, $isTestMode)
    {
        $class = Helper::getGatewayClassName($name);
        if ($class === null) {
            throw new Exception('Gateway ' . $name . ' is not supported');
        }
        return new $class($isTestMode);
    }
} 
