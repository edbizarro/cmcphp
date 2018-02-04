<?php

namespace Edbizarro\Cmc;

use GuzzleHttp\Client as GuzzleClient;

class CMCPhp
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * CMCPhp constructor.
     *
     * @param GuzzleClient|null $client
     */
    public function __construct (GuzzleClient $client = null)
    {
        $this->client = $client;
    }
}
