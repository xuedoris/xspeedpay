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
     * @param array $param: Expected keys: amount,currency,paymentInstrument,billingAddress
     */
    public function __construct(array $param)
    {
        $this->amount = $param['amount'];
        $this->currency = $param['currency'];
        $this->paymentInstrument = $param['payment'];
        $this->billingAddress = $param['billingAddress'];
    }

    /**
     * @return amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /**
     * @return currency
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