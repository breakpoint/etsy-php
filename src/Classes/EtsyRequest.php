<?php

namespace breakpoint\etsy\Classes;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Psr\Http\Message\ResponseInterface;

/**
 * Represents a request to the Etsy api.
 *
 * Class EtsyRequest
 * @package breakpoint\etsy
 */
class EtsyRequest {

    // uri constants
    const V2_URI = 'https://openapi.etsy.com/v2/';
    const V3_URI = 'https://openapi.etsy.com/v3/';

    // client and config
    private array $config;
    private Client $client;

    // request settings
    private string $endpoint = self::V2_URI;
    private bool $raw = false;
    private array $fields = [];
    private array $associations = [];

    /**
     * EtsyRequest constructor.
     *
     * @param array $config ['keystring' => api_key, 'secret' => secret, 'token_access' => token_access, 'token_secret' => token_secret]
     * @throws \Exception
     */
    public function __construct(array $config) {

        // absolutely must have key string / api key
        if (false === array_key_exists('keystring', $config)) {
            throw new \Exception('Etsy-PHP: Missing keystring.');
        }

        // store config
        $this->config = $config;

        // use V2 endpoint by default
        $this->v2();
    }

    /**
     * Helper function to use the V2 endpoint.
     */
    protected function v2() {

        // store endpoint using
        $this->endpoint = self::V2_URI;

        // setup standard client when no oauth values
        if (null === $this->config['token_access'] || null === $this->config['token_secret']) {
            $this->client = new Client(['base_uri' => self::V2_URI]);

        // use oauth client
        } else {
            $stack = HandlerStack::create();

            $middleware = new Oauth1([
                'consumer_key' => $this->config['keystring'],
                'consumer_secret' => $this->config['secret'],
                'token' => $this->config['token_access'],
                'token_secret' => $this->config['token_secret'],
            ]);
            $stack->push($middleware);

            $this->client = new Client([
                'base_uri' => self::V2_URI,
                'handler' => $stack,
                'auth' => 'oauth',
            ]);
        }

        return $this;
    }

    /**
     * Helper function to use the V3 endpoint.
     *
     * @return $this
     */
    protected function v3() {

        // store endpoint using
        $this->endpoint = self::V3_URI;

        // setup client
        $this->client = new Client(['base_uri' => self::V3_URI]);

        return $this;
    }

    /**
     * Helper function to confirm oauth credentials have been set for authenticated routes.
     *
     * @throws \Exception
     */
    protected function oauth() {
        if (null === $this->config['token_access'] || null === $this->config['token_secret']) {
            throw new \Exception("Etsy-PHP: OAuth missing token_access or token_secret.");
        }
        return $this;
    }

    /**
     * Returns the raw response from Etsy.
     */
    public function raw() {
        $this->raw = true;
        return $this;
    }

    /**
     * Which fields you would like to be returned.
     *
     * @param array $fields
     * @return $this
     */
    public function fields(array $fields = []): EtsyRequest {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Which associations you would like to be returned.
     *
     * @param array $associations
     * @return $this
     */
    public function associations(array $associations = []): EtsyRequest {
        $this->associations = $associations;
        return $this;
    }

    /**
     * Constructs the options array for this request.
     *
     * @param array $parameters
     * @param bool $data
     * @return array
     */
    private function buildGuzzleOptions(array $parameters, array $data = []): array {

        // include parameters
        $options['query'] = $parameters;

        // using v3 endpoint
        if ($this->endpoint === self::V3_URI) {
            $options['headers'] = ['x-api-key' => $this->config['keystring']];
        } else {

            // using oauth
            if (isset($this->config['token_access'], $this->config['token_secret'])) {
                $options['auth'] = 'oauth';

            // appends api_key
            } else {
                $options['query']['api_key'] = $this->config['keystring'];
            }
        }

        // fields
        if (count($this->fields) > 0) {
            $options['query']['fields'] = implode(',', $this->fields);
        }

        // associations
        if (count($this->associations) > 0) {
            $options['query']['includes'] = $this->prepareAssociations($this->associations);
        }

        // prepare file
        if ($file = $this->prepareFile($data)) {
            $options['multipart'] = $file;
        } else {
            $options['form_params'] = $data;
        }

        return $options;
    }

    /**
     * Constructs the path for this request by replacing :parameters.
     *
     * @param string $path
     * @param array $parameters
     * @return string
     * @throws \Exception
     */
    private function buildPath(string $path, array $parameters = []) {

        // make sure path does not start with /; will ignore v2/ in base uri
        if (substr($path, 0, 1) == '/') {
            $path = substr($path, 1);
        }

        // replace :parameters with value
        foreach ($parameters as $key => $value) {

            // required url parameters
            if (strpos($path, ":$key") > 0) {

                // replace
                $path = str_replace(":$key", $value, $path);

                // remove from query parameters
                unset($parameters[$key]);
            }
        }

        // required parameter is missing
        if (strpos($path, ':') > 0) {
            throw new \Exception('Etsy-PHP: Required parameter is missing.');
        }

        return $path;
    }

    /**
     * Builds form parameter for files.
     * Reference: gentor/etsy-php-laravel
     *
     * @param $data
     * @return array[]|false
     */
    private function prepareFile($data) {
        if (!isset($data['image']) && !isset($data['file'])) {
            return false;
        }

        $key = isset($data['image']) ? 'image' : 'file';

        return [[
            'name' => $key,
            'contents' => fopen($data[$key], 'r')
        ]];
    }

    /**
     * Builds a query string for the given associations.
     * Reference: gentor/etsy-php-laravel
     *
     * @param $associations
     * @return string
     */
    private function prepareAssociations($associations): string {
        $includes = [];
        foreach ($associations as $key => $value) {
            if (is_array($value)) {
                $includes[] = $this->buildAssociation($key, $value);
            } else {
                $includes[] = $value;
            }
        }

        return implode(',', $includes);
    }

    /**
     * Generates a string representing a single association.
     * Reference: gentor/etsy-php-laravel
     *
     * @param $string
     * @param $config
     * @return mixed|string
     */
    private function buildAssociation($string, $config) {

        // confirm is array
        if (isset($config['select']) && is_array($config['select'])) {
            $string .= "(" . implode(',', $config['select']) . ")";
        }
        if (isset($config['scope'])) {
            $string .= ':' . $config['scope'];
        }
        if (isset($config['limit'])) {
            $string .= ':' . $config['limit'];
        }
        if (isset($config['offset'])) {
            $string .= ':' . $config['offset'];
        }
        if (isset($config['associations'])) {
            $string .= '/' . $this->prepareAssociations($config['associations']);
        }

        return $string;
    }

    /**
     * Helper function for GET requests.
     *
     * @param $path
     * @param array $parameters
     * @return EtsyObject|EtsyResults|ResponseInterface
     * @throws \Exception
     */
    protected function get($path, array $parameters = []) {
        return $this->request($path, 'GET', $parameters, []);
    }

    /**
     * Helper function for POST requests.
     *
     * @param $path
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    protected function post($path, array $parameters = [], array $data = []) {
        return $this->request($path, 'POST', $parameters, $data);
    }

    /**
     * Helper function for PATCH requests.
     *
     * @param $path
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    protected function patch($path, array $parameters = [], array $data = []) {
        return $this->request($path, 'PATCH', $parameters, $data);
    }

    /**
     * Helper function for DELETE requests.
     *
     * @param $path
     * @param array $parameters
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    protected function delete($path, array $parameters = []) {
        return $this->request($path, 'DELETE', $parameters);
    }

    /**
     * Helper function for PUT requests.
     *
     * @param $path
     * @param array $parameters
     * @param array $data
     * @return bool|ResponseInterface
     * @throws \Exception
     */
    protected function put($path, array $parameters = [], array $data = []) {
        return $this->request($path, 'PUT', $parameters, $data);
    }


    /** @noinspection PhpInconsistentReturnPointsInspection */
    protected function requestObject(string $method, string $path, array $parameters = [], array $data = []) {

        try {

            // perform request
            $response = $this->client->request($method, $this->buildPath($path, $parameters), $this->buildGuzzleOptions($parameters, $data));

            // decode and store contents
            $contents = json_decode($response->getBody()->getContents(), true);

            // always return an array of results
            return $this->raw ? $response : (isset($contents['results'][0]) ? new EtsyObject($contents['results'][0]) : null);

        } catch (ClientException $e) {
            $this->handleExeption($e);
        }
    }

    /** @noinspection PhpInconsistentReturnPointsInspection */
    protected function requestCollection(string $method, string $path, array $parameters = [], array $data = []) {

        try {

            // perform request
            $response = $this->client->request($method, $this->buildPath($path, $parameters), $this->buildGuzzleOptions($parameters, $data));

            // decode and store contents
            $contents = json_decode($response->getBody()->getContents(), true);

            // always return an array of results
            return $this->raw ? $response : new EtsyResults($contents);

        } catch (ClientException $e) {
            $this->handleExeption($e);
        }
    }

    /** @noinspection PhpInconsistentReturnPointsInspection */
    protected function requestBool(string $method, string $path, array $parameters = [], array $data = []) {

        try {

            // perform request
            $response = $this->client->request($method, $this->buildPath($path, $parameters), $this->buildGuzzleOptions($parameters, $data));

            return $this->raw ? $response : in_array($response->getStatusCode(), [200, 201]);

        } catch (ClientException $e) {
            $this->handleExeption($e);
        }
    }

    /**
     * Helper function to rethrow exception with more meaningful message.
     *
     * @param \Exception $exception
     * @return null
     * @throws \Exception
     */
    private function handleExeption(\Exception $exception) {

        switch ($exception->getCode()) {
            case 400:
                throw new \Exception('Etsy-PHP: 400 Bad Request; check your request parameters.');
            case 403:
                throw new \Exception('Etsy-PHP: Authenticated required for this method or credentials are missing.');
            case 404:
                return null; // nothing found
            case 500:
                throw new \Exception('Etsy-PHP: 500 Server Error; please try again.');
            case 503:
                throw new \Exception('Etsy-PHP: 503 Service Unavailable; please try again later.');
        }

        throw new \Exception("Etsy-PHP: An unknown error has occurred.");
    }



    /**
     * Performs the request.
     *
     * @param $path
     * @param string $method
     * @param array $parameters
     * @param array $data
     * @return bool|EtsyResults|ResponseInterface|null
     * @throws \Exception
     */
    protected function request($path, $method = 'GET', array $parameters = [], array $data = []) {


        try {
            $response = $this->client->request($method, $this->buildPath($path, $parameters), $this->buildGuzzleOptions($parameters, $data));

            // wants raw response
            if ($this->raw) {
                return $response;
            }

            return $this->raw ? $response : $this->response($response, $method === 'GET');

        } catch (ClientException $e) {

            switch ($e->getCode()) {
                case 400:
                    throw new \Exception('Etsy-PHP: 400 Bad Request; check your request parameters.');
                case 403:
                    throw new \Exception('Etsy-PHP: Authenticated required for this method or credentials are missing.');
                case 404:
                    return null; // nothing found
                case 500:
                    throw new \Exception('Etsy-PHP: 500 Server Error; please try again.');
                case 503:
                    throw new \Exception('Etsy-PHP: 503 Service Unavailable; please try again later.');

            }
        }

        throw new \Exception("Etsy-PHP: An unknown error has occurred.");
    }

    private function response(ResponseInterface $response, $get = false) {

        // expecting results
        if ($get) {

            // decode and store contents
            $contents = json_decode($response->getBody()->getContents(), true);

            // not found
            if ($response->getStatusCode() == 404) {
                return null;
            }


            // always return an array of results
            return new EtsyResults($contents);
        }

        return in_array($response->getStatusCode(), [200, 201]);
    }
}