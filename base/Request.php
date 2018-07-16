<?php

namespace XSpeedPay\Base;

/**
 * Class Request
 */
class Request
{
    /**
     * @var int
     */
    private $amount;
    
    /**
     * @var string
     */
    private $currency;

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
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * @return PaymentInstrument
     */
    public function getCurrency()
    {
        return $this->$currency;
    }
    
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