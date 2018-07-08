<?php

namespace XSpeedPay\Base;

/**
 * Class Request
 */
class Request
{
    /**
     * @var PaymentInstrument
     */
    private $paymentInstrument;

    /**
     * @var BillingAddress
     */
    private $billingAddress;

    /**
     * @return PaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->paymentInstrument;
    }

    /**
     * @return BillingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }
}