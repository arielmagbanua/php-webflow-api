<?php

declare(strict_types=1);

namespace ArielMagbanua\PhpWebflowApi;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * The API class for the Webflow API
 *
 * @package ArielMagbanua\PhpWebflowApi
 * @author Ariel Magbanua <ariel@arielmagbanua.com>
 */
abstract class Api
{
    /**
     * The base URL for the Webflow API
     *
     * @var string
     */
    protected string $apiBaseUrl = 'https://api.webflow.com';

    /**
     * The HTTP client
     *
     * @var Client|null
     */
    protected ?Client $httpClient = null;

    /**
     * The headers for the API requests
     *
     * @var array
     */
    protected ?array $headers = [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ];

    /**
     * Create a request
     *
     * @param string $method The HTTP method
     * @param string $uri The URI
     * @param array|null $body The body
     * @return array|null
     */
    protected function sendRequest(string $method, string $uri, ?array $body = null): ?array
    {
        if (!$this->httpClient) {
            return null; // configured client
        }

        $request = new Request(
            method: $method,
            uri: $uri,
            body: json_encode($body),
        );

        $response = $this->httpClient->send($request);

        // get the response body contents
        $contents = $response->getBody()->getContents();

        // check if the response is successful
        if ($response->getStatusCode() !== 200) {
            throw new Exception('Failed to send request: ' . $contents);
        }

        return json_decode($contents, true);
    }
}
