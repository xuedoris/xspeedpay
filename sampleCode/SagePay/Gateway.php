<?php
namespace XuePay\SagePay;

use XuePay\Base\AbstractGateway;
use XuePay\Base\GatewayResponse;

/**
 * Class Gateway
 * @package XuePay\AuthorizeDotNet
 */
class Gateway extends AbstractGateway
{
    /**
     * @param bool $isTestMode
     */
    public function __construct($isTestMode = false)
    {
        $this->isTestMode = $isTestMode;
    }

    /**
     * @inheritdoc
     */
    public function authorize()
    {
        $url = $this->isTestMode ? '' : '';
        $request = $this->buildRequestData();
        return $this->sendRequest($url, [], $request);
    }

    /**
     * @inheritdoc
     */
    public function purchase()
    {
        $url = $this->isTestMode ? '' : '';
        $request = $this->buildRequestData();
        return $this->sendRequest($url, [], $request);
    }

    /**
     * @inheritdoc
     */
    public function refund()
    {
        $url = $this->isTestMode ? '' : '';
        $request = $this->buildRequestData();
        return $this->sendRequest($url, [], $request);
    }

    /**
     * @inheritdoc
     */
    public function capture()
    {
        $url = $this->isTestMode ? '' : '';
        $request = $this->buildRequestData();
        return $this->sendRequest($url, [], $request);
    }

    /**
     * @inheritdoc
     */
    public function void()
    {
        $url = $this->isTestMode ? '' : '';
        $request = $this->buildRequestData();
        return $this->sendRequest($url, [], $request);
    }

    private function buildRequestData()
    {
        $data = [];
        $data = ;
        return $data;
    }

    /**
     * @inheritdoc
     */
    public function analyseResponse($response, $statusCode)
    {
        $result = new GatewayResponse($response, $statusCode);
        $result->isSuccess = false;
        $result->response = $response;

        return $result;
    }
} 
