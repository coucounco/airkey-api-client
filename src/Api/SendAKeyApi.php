<?php
/**
 * SendAKeyApi
 * PHP version 5
 *
 * @category Class
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVVA AirKey Cloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v18.0.4
 * Contact: office-wien@evva.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.41
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Coucounco\Airkey\Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Coucounco\Airkey\Swagger\Client\ApiException;
use Coucounco\Airkey\Swagger\Client\Configuration;
use Coucounco\Airkey\Swagger\Client\HeaderSelector;
use Coucounco\Airkey\Swagger\Client\ObjectSerializer;

/**
 * SendAKeyApi Class Doc Comment
 *
 * @category Class
 * @package  Coucounco\Airkey\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendAKeyApi
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
     * Operation sendAKey
     *
     * Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/send-a-key/sms\" instead.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse
     */
    public function sendAKey($body)
    {
        list($response) = $this->sendAKeyWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation sendAKeyWithHttpInfo
     *
     * Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/send-a-key/sms\" instead.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendAKeyWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyRequest($body);

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
                        '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendAKeyAsync
     *
     * Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/send-a-key/sms\" instead.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyAsync($body)
    {
        return $this->sendAKeyAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendAKeyAsyncWithHttpInfo
     *
     * Deprecated/Legacy: This resource will be removed in future versions. Please use resource \"/v1/send-a-key/sms\" instead.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyAsyncWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyRequest($body);

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
     * Create request for operation 'sendAKey'
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendAKeyRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling sendAKey'
            );
        }

        $resourcePath = '/v1/send-a-key';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendAKeyViaMail
     *
     * Sends a registration code via email and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeyMailRequest $body Send-A-Key via email request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse
     */
    public function sendAKeyViaMail($body)
    {
        list($response) = $this->sendAKeyViaMailWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation sendAKeyViaMailWithHttpInfo
     *
     * Sends a registration code via email and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeyMailRequest $body Send-A-Key via email request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendAKeyViaMailWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyViaMailRequest($body);

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
                        '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendAKeyViaMailAsync
     *
     * Sends a registration code via email and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeyMailRequest $body Send-A-Key via email request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyViaMailAsync($body)
    {
        return $this->sendAKeyViaMailAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendAKeyViaMailAsyncWithHttpInfo
     *
     * Sends a registration code via email and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeyMailRequest $body Send-A-Key via email request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyViaMailAsyncWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyViaMailRequest($body);

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
     * Create request for operation 'sendAKeyViaMail'
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeyMailRequest $body Send-A-Key via email request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendAKeyViaMailRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling sendAKeyViaMail'
            );
        }

        $resourcePath = '/v1/send-a-key/mail';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation sendAKeyViaSms
     *
     * Sends a registration code to the phone and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse
     */
    public function sendAKeyViaSms($body)
    {
        list($response) = $this->sendAKeyViaSmsWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation sendAKeyViaSmsWithHttpInfo
     *
     * Sends a registration code to the phone and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \Coucounco\Airkey\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function sendAKeyViaSmsWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyViaSmsRequest($body);

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
                        '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sendAKeyViaSmsAsync
     *
     * Sends a registration code to the phone and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyViaSmsAsync($body)
    {
        return $this->sendAKeyViaSmsAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sendAKeyViaSmsAsyncWithHttpInfo
     *
     * Sends a registration code to the phone and creates all necessary prerequisites if needed.
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAKeyViaSmsAsyncWithHttpInfo($body)
    {
        $returnType = '\Coucounco\Airkey\Swagger\Client\Model\SendAKeyResponse';
        $request = $this->sendAKeyViaSmsRequest($body);

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
     * Create request for operation 'sendAKeyViaSms'
     *
     * @param  \Coucounco\Airkey\Swagger\Client\Model\SendAKeySmsRequest $body Send-A-Key via SMS request wrapper (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sendAKeyViaSmsRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling sendAKeyViaSms'
            );
        }

        $resourcePath = '/v1/send-a-key/sms';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
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
