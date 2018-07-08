<?php

namespace XSpeedPay;

use XSpeedPay\Base\GatewayFactory;

class XSpeedPay
{
    private $gateway;

    public function __construct(string $gateway)
    {
        $this->gateway = new $gateway;
    }
}