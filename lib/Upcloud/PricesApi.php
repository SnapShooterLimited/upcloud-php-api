<?php
/**
 * PricesApi
 * PHP version 5
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 */


namespace Upcloud\ApiClient\Upcloud;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Upcloud\ApiClient\ApiException;
use Upcloud\ApiClient\Configuration;
use Upcloud\ApiClient\HeaderSelector;
use Upcloud\ApiClient\ObjectSerializer;

/**
 * PricesApi Class Doc Comment
 *
 * @category Class
 * @package  Upcloud\ApiClient
 */
class PricesApi
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
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation listPrices
     *
     * List prices
     *
     * @throws \Upcloud\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Upcloud\ApiClient\Model\PriceListResponse
     */
    public function listPrices()
    {
        list($response) = $this->listPricesWithHttpInfo();
        return $response;
    }

    /**
     * Operation listPricesWithHttpInfo
     *
     * List prices
     *
     * @throws \Upcloud\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Upcloud\ApiClient\Model\PriceListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listPricesWithHttpInfo()
    {
        $returnType = '\Upcloud\ApiClient\Model\PriceListResponse';
        $request = $this->listPricesRequest();

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Upcloud\ApiClient\Model\PriceListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listPricesAsync
     *
     * List prices
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPricesAsync()
    {
        return $this->listPricesAsyncWithHttpInfo()->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation listPricesAsyncWithHttpInfo
     *
     * List prices
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listPricesAsyncWithHttpInfo()
    {
        $returnType = '\Upcloud\ApiClient\Model\PriceListResponse';
        $request = $this->listPricesRequest();

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
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
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'listPrices'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listPricesRequest()
    {

        $resourcePath = '/price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;




        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
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
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams); // for HTTP post (form)
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

}
