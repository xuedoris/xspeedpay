<?php

namespace XSpeedPay\Base;

/**
 * Class Response
 */
class Response
{
    /**
     * @var string
     */
    private $result;
    
    /**
     * @var string
     */
    private $code;
    
    /**
     * @var string
     */
    private $message;
    
    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }
    
    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}