<?php

namespace XSpeedPay\Base;

use UnexpectedValueException;

class Country
{
    private const COUNTRIES = [
        'USA' => [
            'name' => 'United Stated of American',
            'iso2' => 'US',
        ],
        'CAN' => [
            'name' => 'Canada',
            'iso2' => 'CA',
        ],
        'CHN' => [
            'name' => 'China',
            'iso2' => 'CN',
        ],
    ];

    /**
     * @var string
     */
    private $iso3;

    public function __construct(string $iso3)
    {
        if (!isset(self::COUNTRIES[$iso3])) {
            throw new UnexpectedValueException('Country not in the list.');
        }

        $this->iso3 = $iso3;
    }

    /**
     * @return string
     */
    public function getIso3(): string
    {
        return $this->iso3;
    }

    /**
     * @return string
     */
    public function getIso2(): string
    {
        return self::COUNTRIES[$this->getIso3()]['iso2'];
    }
}