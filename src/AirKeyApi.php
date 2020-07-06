<?php
namespace Coucounco\Airkey\Swagger\Client;

use Coucounco\Airkey\Swagger\Client\Api\AreasApi;
use Coucounco\Airkey\Swagger\Client\Api\LocksApi;
use Coucounco\Airkey\Swagger\Client\Api\MediaApi;
use Coucounco\Airkey\Swagger\Client\Api\PersonsApi;
use Coucounco\Airkey\Swagger\Client\Api\PublicMgmtApi;
use Coucounco\Airkey\Swagger\Client\Api\SendAKeyApi;
use Coucounco\Airkey\Swagger\Client\Factory\ApiFactory;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class AirKeyApi
{

    private $factory;

    public function __construct()
    {
        // Configure API key authorization: X-API-Key
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('X-API-Key', config('airkey.key'))
            ->setHost(config('airkey.endpoint'));
        $client = new Client();
        $this->factory = new ApiFactory($client, $config);
    }

    public function mockClient(ClientInterface $client) {
        $this->factory->setClient($client);
    }

    public function personsApi() {
        return $this->factory->build(PersonsApi::class);
    }

    public function mediaApi() {
        return $this->factory->build(MediaApi::class);
    }

    public function areasApi() {
        return $this->factory->build(AreasApi::class);
    }

    public function locksApi() {
        return $this->factory->build(LocksApi::class);
    }

    public function sendKeyApi() {
        return $this->factory->build(SendAKeyApi::class);
    }

    public function publicMgmtApi() {
        return $this->factory->build(PublicMgmtApi::class);
    }
}