<?php declare(strict_types=1);

require "vendor/autoload.php";

use App\CmcClient;
use GuzzleHttp\Client;

$apiKey = '6fd5f6bb-4b67-4782-977d-aa92a8759b1f';
$limit = readline("Enter how many coins to list: ");

$listOfCryptos = new CmcClient($apiKey,(int)$limit);
echo $listOfCryptos->displayCryptos();