<?php

namespace App\Service\Adapter;

class IdOfferAdapter extends AbstractOfferAdapter
{
    /**
     * @var integer
     */
    protected $rates = 500;

    public function setApplicationId()
    {
        $this->applicationId = $this->data['id'];
    }

    public function setPayout()
    {
        $this->payout = $this->data['points'] / $this->rates;

    }

    public function setCountries()
    {
        $this->countries[] = $this->data['country'];
    }

    public function setPlatform()
    {
        $this->platform = $this->data['platform'];
    }

}
