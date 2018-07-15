<?php

namespace XSpeedPay\Base;

use UnexpectedValueException;

class Currency
{
    private const CURRENCIES = [
        'EUR' => [
            'name' => 'Euro',
            'num' => 978,
        ],
        'CAD' => [
            'name' => 'Canadian',
            'num' => 124,
        ],
        'USD' => [
            '' => '',
            'num' => 840,
        ],
    ];

    /**
     * @var string|string
     */
    private $code;

    /**
     * @param string $code
     */
    public function __construct(string $code)
    {
        if (!isset(self::CURRENCIES[$code])) {
            throw new UnexpectedValueException('Currency not in the list');
        }

        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return self::CURRENCIES[$this->code]['num'];
    }
}