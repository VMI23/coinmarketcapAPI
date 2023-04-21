<?php declare(strict_types=1);

namespace App;

class Crypto
{

    private int $id;
    private string $name;
    private string $symbol;
    private float $totalSupply;
    private int $cmcRank;
    private float $usdPrice;

    /**
     * @param string $id
     * @param string $name
     * @param string $symbol
     * @param string $totalSupply
     * @param string $cmcRank
     * @param int $usdPrice
     */
    public function __construct(
        int $id,
        string $name,
        string $symbol,
        float $totalSupply,
        int $cmcRank,
        float $usdPrice
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->symbol = $symbol;
        $this->totalSupply = $totalSupply;
        $this->cmcRank = $cmcRank;
        $this->usdPrice = $usdPrice;
    }

    public function displayInfo(): string
    {
        return PHP_EOL . "ID: " . $this->id .
            PHP_EOL . "| name: " . $this->name .
            PHP_EOL . "| symbol: " . $this->symbol .
            PHP_EOL . "| Total Supply: " . number_format($this->totalSupply,1) .
            PHP_EOL . "| CMC rank: " . $this->cmcRank .
            PHP_EOL . "| USD price: " . number_format($this->usdPrice,2) . PHP_EOL;
    }


//    /**
//     * @return string
//     */
//    public function getId(): string
//    {
//        return $this->id;
//    }
//
//    /**
//     * @return string
//     */
//    public function getName(): string
//    {
//        return $this->name;
//    }
//
//    /**
//     * @return string
//     */
//    public function getSymbol(): string
//    {
//        return $this->symbol;
//    }
//
//    /**
//     * @return string
//     */
//    public function getTotalSupply(): string
//    {
//        return $this->totalSupply;
//    }
//
//    /**
//     * @return string
//     */
//    public function getCmcRank(): string
//    {
//        return $this->cmcRank;
//    }
//
//    /**
//     * @return int
//     */
//    public function getUsdPrice(): int
//    {
//        return $this->usdPrice;
//    }

}