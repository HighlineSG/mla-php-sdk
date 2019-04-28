<?php
namespace Highline\MultiLogin\Api\Operation;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Highline\MultiLogin\Api\Exception\ApiException;
use Highline\MultiLogin\Api\Exception\EmptyResponseException;
use Highline\MultiLogin\Api\Response;
use Highline\MultiLogin\MultiLogin;
use GuzzleHttp\Exception\GuzzleException;

trait Create
{
    /**
     * @return Response
     * @throws GuzzleException
     * @throws ApiException
     * @throws EmptyResponseException
     */
    public function create(): Response
    {
        $uri = MultiLogin::$apiEndpoint . self::OBJECT_NAME;

        $client = new Client();

        $response = $client->request('POST', $uri, [
            RequestOptions::QUERY => [
                'token' => MultiLogin::$token
            ],
            RequestOptions::JSON => $this,
            RequestOptions::HTTP_ERRORS => false
        ]);

        return new Response($response);
    }
}
