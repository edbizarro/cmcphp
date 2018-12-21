<?php

namespace Edbizarro\Cmc;

use GuzzleHttp\Client as GuzzleClient;

/**
 * Class CMCPhp.
 */
class Market
{
    /**
     * @var GuzzleClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $apiUrl = 'https://api.coinmarketcap.com/v1/';

    /**
     * CMCPhp constructor.
     *
     * @param GuzzleClient|null $client
     */
    public function __construct(GuzzleClient $client = null)
    {
        $this->client = $client ?? new GuzzleClient();
    }

    /**
     * @param array ...$params
     *
     * @return string
     */
    public function ticker(...$params): string
    {
        list($coin, $limit, $start, $convert) = $params;

        if (is_numeric($coin)) {
            return $this->call("ticker/?limit=$coin&start=$limit&convert=$start");
        }

        if ($coin !== null) {
            return $this->call("ticker/$coin/?limit=$limit&start=$start&convert=$convert");
        }

        return $this->call("ticker/?limit=$limit&start=$start&convert=$convert");
    }

    /**
     * @param $convert
     *
     * @return string
     */
    public function global($convert): string
    {
        return $this->call("global/?convert=$convert");
    }

    /**
     * @param string $endPoint
     *
     * @return string
     */
    protected function call(string $endPoint): string
    {
        return $this->client->get($this->apiUrl.$endPoint)
            ->getBody()
            ->getContents();
    }
}
