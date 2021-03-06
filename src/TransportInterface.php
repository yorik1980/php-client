<?php

namespace Covery\Client;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface TransportInterface
{
    const DEFAULT_HOST = "covery.maxpay.com";
    const DEFAULT_SCHEME = "https";

    /**
     * Sends request
     *
     * @param RequestInterface $request
     * @return ResponseInterface
     */
    public function send(RequestInterface $request);
}
