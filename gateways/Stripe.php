<?php

namespace XSpeedPay\Gateways;

use GuzzleHttp\Client;
use XSpeedPay\Base\BaseOperations;
use XSpeedPay\Base\Request;

/**
 * Class Stripe
 */
class Stripe implements BaseOperations
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @inheritdoc
     */
    public function authorize(Request $request)
    {
        // TODO: Implement authorize() method.
    }

    /**
     * @inheritdoc
     */
    public function purchase(Request $request)
    {
        // TODO: Implement purchase() method.
    }

    /**
     * @inheritdoc
     */
    public function void(Request $request)
    {
        // TODO: Implement void() method.
    }

    /**
     * @inheritdoc
     */
    public function refund(Request $request)
    {
        // TODO: Implement refund() method.
    }

    /**
     * @inheritdoc
     */
    public function capture(Request $request)
    {
        // TODO: Implement capture() method.
    }
}