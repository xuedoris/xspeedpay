<?php

namespace XuePay\Base;

/**
 * Class PaymentCard
 * @package XuePay\Base
 */
class PaymentCard
{
    public $params;

    public function __construct($params = [])
    {
        $this->params = $params;
    }
} 
