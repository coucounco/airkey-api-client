<?php


namespace Coucounco\Airkey\Swagger\Client\Factory;


use Coucounco\Airkey\Swagger\Client\Configuration;
use GuzzleHttp\ClientInterface;

class ApiFactory
{

    /**
     * @var Configuration
     */
    private $config;

    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client, Configuration $config)
    {
        $this->client = $client;
        $this->config = $config;
    }

    public function setClient(ClientInterface $client) {
        $this->client = $client;
    }

    public function build($apiClassName) {
        return new $apiClassName($this->client, $this->config);
    }
}