<?php
/**
 * SystemProtocolApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVVA AirKey Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v14.40.2
 * Contact: office-wien@evva.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * SystemProtocolApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemProtocolApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getSystemProtocol
     *
     * Gets system protocol.
     *
     * @param  int $offset Offset for paging (optional)
     * @param  int $limit Limit of result size (optional)
     * @param  int $id Filter events by unique protocol entry identifier (optional)
     * @param  int $lock_id Filter events by unique lock id (optional)
     * @param  int $medium_id Filter events by unique medium id (optional)
     * @param  string $event Filter events by event type (optional)
     * @param  int $user_id Filter events by unique administrator user identifier (optional)
     * @param  string $administrator Filter events by name of administrator (optional)
     * @param  string $from Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $to Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $language Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations (optional, default to de-DE)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SystemProtocolPagingList
     */
    public function getSystemProtocol($offset = null, $limit = null, $id = null, $lock_id = null, $medium_id = null, $event = null, $user_id = null, $administrator = null, $from = null, $to = null, $language = 'de-DE')
    {
        list($response) = $this->getSystemProtocolWithHttpInfo($offset, $limit, $id, $lock_id, $medium_id, $event, $user_id, $administrator, $from, $to, $language);
        return $response;
    }

    /**
     * Operation getSystemProtocolWithHttpInfo
     *
     * Gets system protocol.
     *
     * @param  int $offset Offset for paging (optional)
     * @param  int $limit Limit of result size (optional)
     * @param  int $id Filter events by unique protocol entry identifier (optional)
     * @param  int $lock_id Filter events by unique lock id (optional)
     * @param  int $medium_id Filter events by unique medium id (optional)
     * @param  string $event Filter events by event type (optional)
     * @param  int $user_id Filter events by unique administrator user identifier (optional)
     * @param  string $administrator Filter events by name of administrator (optional)
     * @param  string $from Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $to Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $language Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations (optional, default to de-DE)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SystemProtocolPagingList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSystemProtocolWithHttpInfo($offset = null, $limit = null, $id = null, $lock_id = null, $medium_id = null, $event = null, $user_id = null, $administrator = null, $from = null, $to = null, $language = 'de-DE')
    {
        $returnType = '\Swagger\Client\Model\SystemProtocolPagingList';
        $request = $this->getSystemProtocolRequest($offset, $limit, $id, $lock_id, $medium_id, $event, $user_id, $administrator, $from, $to, $language);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SystemProtocolPagingList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSystemProtocolAsync
     *
     * Gets system protocol.
     *
     * @param  int $offset Offset for paging (optional)
     * @param  int $limit Limit of result size (optional)
     * @param  int $id Filter events by unique protocol entry identifier (optional)
     * @param  int $lock_id Filter events by unique lock id (optional)
     * @param  int $medium_id Filter events by unique medium id (optional)
     * @param  string $event Filter events by event type (optional)
     * @param  int $user_id Filter events by unique administrator user identifier (optional)
     * @param  string $administrator Filter events by name of administrator (optional)
     * @param  string $from Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $to Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $language Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations (optional, default to de-DE)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSystemProtocolAsync($offset = null, $limit = null, $id = null, $lock_id = null, $medium_id = null, $event = null, $user_id = null, $administrator = null, $from = null, $to = null, $language = 'de-DE')
    {
        return $this->getSystemProtocolAsyncWithHttpInfo($offset, $limit, $id, $lock_id, $medium_id, $event, $user_id, $administrator, $from, $to, $language)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSystemProtocolAsyncWithHttpInfo
     *
     * Gets system protocol.
     *
     * @param  int $offset Offset for paging (optional)
     * @param  int $limit Limit of result size (optional)
     * @param  int $id Filter events by unique protocol entry identifier (optional)
     * @param  int $lock_id Filter events by unique lock id (optional)
     * @param  int $medium_id Filter events by unique medium id (optional)
     * @param  string $event Filter events by event type (optional)
     * @param  int $user_id Filter events by unique administrator user identifier (optional)
     * @param  string $administrator Filter events by name of administrator (optional)
     * @param  string $from Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $to Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $language Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations (optional, default to de-DE)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSystemProtocolAsyncWithHttpInfo($offset = null, $limit = null, $id = null, $lock_id = null, $medium_id = null, $event = null, $user_id = null, $administrator = null, $from = null, $to = null, $language = 'de-DE')
    {
        $returnType = '\Swagger\Client\Model\SystemProtocolPagingList';
        $request = $this->getSystemProtocolRequest($offset, $limit, $id, $lock_id, $medium_id, $event, $user_id, $administrator, $from, $to, $language);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getSystemProtocol'
     *
     * @param  int $offset Offset for paging (optional)
     * @param  int $limit Limit of result size (optional)
     * @param  int $id Filter events by unique protocol entry identifier (optional)
     * @param  int $lock_id Filter events by unique lock id (optional)
     * @param  int $medium_id Filter events by unique medium id (optional)
     * @param  string $event Filter events by event type (optional)
     * @param  int $user_id Filter events by unique administrator user identifier (optional)
     * @param  string $administrator Filter events by name of administrator (optional)
     * @param  string $from Timestamp from when the protocols need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $to Timestamp until when the protocol need to be considered (ISO 8601-format compliant date with time in UTC, milliseconds precision: yyyy-mm-ddThh:mm:ss.SSSZ) (optional)
     * @param  string $language Language codes as a comma-separated list of IETF (bcp47) language tags (e.g. de-DE, en-UK) or \&quot;all\&quot; for all possible languages used for translations (optional, default to de-DE)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSystemProtocolRequest($offset = null, $limit = null, $id = null, $lock_id = null, $medium_id = null, $event = null, $user_id = null, $administrator = null, $from = null, $to = null, $language = 'de-DE')
    {
        if ($offset !== null && $offset < 0) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling SystemProtocolApi.getSystemProtocol, must be bigger than or equal to 0.');
        }

        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling SystemProtocolApi.getSystemProtocol, must be bigger than or equal to 1.');
        }


        $resourcePath = '/v1/system-protocol';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($lock_id !== null) {
            $queryParams['lockId'] = ObjectSerializer::toQueryValue($lock_id);
        }
        // query params
        if ($medium_id !== null) {
            $queryParams['mediumId'] = ObjectSerializer::toQueryValue($medium_id);
        }
        // query params
        if ($event !== null) {
            $queryParams['event'] = ObjectSerializer::toQueryValue($event);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['userId'] = ObjectSerializer::toQueryValue($user_id);
        }
        // query params
        if ($administrator !== null) {
            $queryParams['administrator'] = ObjectSerializer::toQueryValue($administrator);
        }
        // query params
        if ($from !== null) {
            $queryParams['from'] = ObjectSerializer::toQueryValue($from);
        }
        // query params
        if ($to !== null) {
            $queryParams['to'] = ObjectSerializer::toQueryValue($to);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-Key');
        if ($apiKey !== null) {
            $headers['X-API-Key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
