<?php

namespace App\Service\Adapter;

class UidOfferAdapter extends AbstractOfferAdapter
{

    public function setApplicationId()
    {
        $this->applicationId = $this->data['uid'];
    }

    public function setPayout()
    {
        $this->payout = $this->data['payout']['amount'];
    }

    public function setCountries()
    {
        $this->countries = $this->data['countries'];
    }

    public function setPlatform()
    {
        $this->platform = $this->data['platform'];
    }

    /**
     * @param array $formats
     */
    public function transformCountriesFormat(array $formats)
    {
        $countries = [];

        foreach ($this->countries as $country) {
            if (in_array($country, $formats)) {
                $countries[] = array_search($country, $formats);
            }
        }

        $this->countries = $countries;
    }

}
