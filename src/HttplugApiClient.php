<?php

namespace BSBV\DogID;

use Exception;
use Http\Client\Exception as ClientException;
use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Symfony\Component\Serializer\Serializer;
use BSBV\DogID\Model\Dog;
use BSBV\DogID\Http\ErrorResponseException;
use BSBV\DogID\Serializer\SerializerFactory;

class HttplugApiClient implements ApiClient
{
    /**
     * @var string
     */
    private $baseUrl = ApiClient::BASE_URL;

    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * @var RequestFactory
     */
    private $requestFactory;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(
      HttpClient $httpClient,
      RequestFactory $requestFactory
    ) {
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;

        $this->serializer = (new SerializerFactory())->createSerializer();
    }

    /**
     * @return Dog
     */
    public function identify(string $id): Dog
    {
        $url = $this->baseUrl.$id;

        $request = $this->requestFactory->createRequest('GET', $url);

        try {
            $response = $this->httpClient->sendRequest($request);
        } catch (ClientException $e) {

        } catch (Exception $e) {

        }

        if (200 !== $response->getStatusCode()) {
            throw new ErrorResponseException(
              'Received a response from DogID, indicating an error',
              $response->getStatusCode()
            );
        }

        $body = (string)$response->getBody();

        $dog = $this->serializer->deserialize(
          $body,
          Dog::class,
          'json'
        );

        return $dog;
    }
}
