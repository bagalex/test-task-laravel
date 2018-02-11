<?php

namespace App\Service\Request;

interface RequestInterface
{
    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @return mixed
     */
    public function request(string $method, string $url, array $data = []);
}
