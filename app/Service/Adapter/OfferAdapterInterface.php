<?php

namespace App\Service\Adapter;

interface OfferAdapterInterface
{

    public function setData(array $data);

    public function setApplicationId();

    public function setPayout();

    public function setCountries();

    public function setPlatform();

    /**
     * @return string
     */
    public function getApplicationId(): string;

    /**
     * @return int
     */
    public function getPayout(): int;

    /**
     * @return array
     */
    public function getCountries(): array;

    /**
     * @return string
     */
    public function getPlatform(): string;

    /**
     * @return array
     */
    public function toArray(): array;

}
