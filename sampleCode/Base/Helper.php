<?php
namespace XuePay\Base;

/**
 * Class Helper
 * @package XuePay\Base
 */
class Helper
{
    /**
     * Return gateway class name if supported, otherwise null
     * @param string $name
     * @return string|null
     */
    public static function getGatewayClassName($name)
    {
        $gateways = self::getSupportedGateways();
        return isset($gateways[$name]) ? $gateways[$name] : null;
    }

    /**
     * Get all supported gateways
     */
    public static function getSupportedGateways()
    {
        return [
            'AuthorizeDotNet' => '\XuePay\AuthorizeDotNet\Gateway',
        ];
    }
}
