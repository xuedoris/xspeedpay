<?php

namespace XSpeedPay\Base;

class BillingAddress
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->data['email'];
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->data['firstName'];
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->data['lastName'];
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->data['address'];
    }

    /**
     * @return string
     */
    public function getAddress2(): string
    {
        return $this->data['address2'];
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->data['city'];
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->data['postalCode'];
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->data['country'];
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->data['phone'];
    }
}