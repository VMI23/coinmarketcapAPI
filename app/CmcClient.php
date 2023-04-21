<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;

class CmcClient
{
    private Client $client;
    private array $cryptos;
    private int $limit;


    public function __construct(?string $apiKey, ?int $limit = 10)
    {
        $this->limit = $limit;
        $this->client = new Client([
            'base_uri' => 'https://pro-api.coinmarketcap.com/v1/',
            'headers' => [
                'X-CMC_PRO_API_KEY' => $apiKey,
                'Accept' => 'application/json',
            ],
        ]);
    }

    public function displayCryptos(): string
    {
        $string = "";
        $this->fetch();
        $cryptos = $this->cryptos;
        foreach ($cryptos as $crypto) {
            $string .= $crypto->displayInfo();
        }

        return $string;
    }


    public function fetch(): void
    {
        $response = $this->client->request('GET', 'cryptocurrency/listings/latest', [
            'query' => [
                'limit' => (int)$this->limit,
            ],
        ]);

        $currencies = json_decode($response->getBody()->getContents());

        foreach ($currencies->data as $currency) {
            $this->cryptos[(string)$currency->id] = new Crypto(
                $currency->id,
                $currency->name,
                $currency->symbol,
                $currency->total_supply,
                $currency->cmc_rank,
                $currency->quote->USD->price
            );
        }
    }


}