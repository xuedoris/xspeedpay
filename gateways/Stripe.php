<?php

namespace XSpeedPay\Gateways;

use GuzzleHttp\Client;
use XSpeedPay\Base\BaseOperations;
use XSpeedPay\Base\Request;
use XSpeedPay\Base\Response;

/**
 * Class Stripe
 */
class Stripe implements BaseOperations
{
    private const URL = 'https://api.stripe.com/v1/';

    /**
     * @var string
     */
    private $apiKey;
    
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
     * @param string $key
     */
    public function setApiKey(string $key)
    {
        $this->apiKey = $key;
    }

    /**
     * @inheritdoc
     */
    public function authorize(Request $request): Response
    {
        // TODO: Implement authorize() method.
    }

    /**
     * @inheritdoc
     * curl https://api.stripe.com/v1/charges \
        -u sk_test_BQokikJOvBiI2HlWgH4olfQ2: \
        -d amount=2000 \
        -d currency=usd \
        -d source=tok_mastercard \
        -d description="Charge for lily.robinson@example.com"
     */
    public function purchase(Request $request): Response
    {
        $finalURL = self::URL . 'charges \\';
        $finalURL .= '-u ' . $this->apiKey . ': \\';
        $finalURL .= '-d ' . $request->getAmount() . ' \\';
        $finalURL .= '-d ' . $request->getCurrency()->getCode() . ' \\';
        echo $finalURL;
    }

    /**
     * @inheritdoc
     */
    public function void(Request $request): Response
    {
        // TODO: Implement void() method.
    }

    /**
     * @inheritdoc
     */
    public function refund(Request $request): Response
    {
        // TODO: Implement refund() method.
    }

    /**
     * @inheritdoc
     */
    public function capture(Request $request): Response
    {
        // TODO: Implement capture() method.
    }
}