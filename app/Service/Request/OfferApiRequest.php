<?php

namespace App\Service\Request;

use \Illuminate\Http\Request;
use Route;

class OfferApiRequest
{
    /**
     * @var RequestInterface
     */
    protected $client;

    /**
     * OfferApiRequest constructor.
     * @param RequestInterface $client
     */
    public function __construct(RequestInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return mixed
     */
    public function getOffers()
    {
        $request = Request::create('api/data', 'GET', []);
        $response = json_decode(Route::dispatch($request)->getContent(), true);

        //  $response = $this->client->request('GET', 'http://test-task.loc:8080/api/data');
        return $response;
    }

    /**
     * @return mixed
     */
    public function getCountriesCodes()
    {
        return $countries = $this->client->request('GET', 'http://country.io/iso3.json');
    }

}
