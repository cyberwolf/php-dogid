#!/usr/bin/env php
<?php

use BSBV\DogID\Http\ErrorResponseException;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use BSBV\DogID\HttplugApiClient;

require __DIR__ . '/../vendor/autoload.php';

$id = $_SERVER['argv'][1];

$apiClient = new HttplugApiClient(
    new Http\Adapter\Guzzle6\Client(),
    new GuzzleMessageFactory()
);

try {
    $dog = $apiClient->identify($id);

    echo 'name: ' . $dog->getName() . PHP_EOL;

    echo 'owner last name: ' . $dog->getOwner()->getLastname() . PHP_EOL;

    foreach ($dog->getOwner()->getContactData() as $contactData) {
        echo $contactData->getContactType() . ': ' . $contactData->getValue() . PHP_EOL;
    }
}
catch (ErrorResponseException $e) {
    echo "Error {$e->getCode()}";
}

