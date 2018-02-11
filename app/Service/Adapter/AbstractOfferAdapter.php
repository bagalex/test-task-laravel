<?php

namespace App\Service\Adapter;

abstract class AbstractOfferAdapter implements OfferAdapterInterface
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var string
     */
    protected $applicationId;

    /**
     * @var integer
     */
    protected $payout;

    /**
     * @var array
     */
    protected $countries = [];

    /**
     * @var string
     */
    protected $platform;

    /**
     * AbstractOfferAdapter constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->setData($data);
        $this->setApplicationId();
        $this->setPayout();
        $this->setPlatform();
        $this->setCountries();
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getApplicationId(): string
    {
        return $this->applicationId;
    }

    /**
     * @return int
     */
    public function getPayout(): int
    {
        return $this->payout;
    }

    /**
     * @return array
     */
    public function getCountries(): array
    {
        return $this->countries;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'application_id' => $this->getApplicationId(),
            'payout' => $this->getPayout(),
            'countries' => $this->getCountries(),
            'platform' => $this->getPlatform(),
        ];
    }
}
