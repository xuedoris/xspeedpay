<?php
use PHPUnit\Framework\TestCase;
use XSpeedPay\XSpeedPay;

class testBase extends TestCase
{
    public function testFirst()
    {
        XSpeedPay::create('NMI');
        $this->assertTrue(true);
    }
}