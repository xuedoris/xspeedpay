<?php
namespace XuePay\Base;

/**
 * Class GatewayResponse
 * @package XuePay\Base
 */
class GatewayResponse
{
    public $isSuccess;
    public $response;
    public $responseMessage;
    public $authCode;
    public $cvvResponseCode;
    public $cvvResponseMessage;
    public $processorTransactionId;
    public $statusCode;

    public function __construct($response, $statusCode)
    {
        $this->response = $response;
        $this->statusCode = $statusCode;
    }
}
