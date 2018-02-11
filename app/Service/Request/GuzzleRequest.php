<?php

namespace App\Service\Request;

use GuzzleHttp\Client;

class GuzzleRequest implements RequestInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * GuzzleService constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @return mixed
     */
    public function request(string $method, string $url, array $data = [])
    {
        $request = $this->client->request($method, $url, $data);

        return json_decode($request->getBody()->getContents(), true);
    }

}
