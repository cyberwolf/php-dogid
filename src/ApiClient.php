<?php

namespace BSBV\DogID;

use BSBV\DogID\Model\Dog;

interface ApiClient
{
    const BASE_URL = 'https://www.dogid.be/dogid-animalws/';

    public function identify(string $id): Dog;
}
