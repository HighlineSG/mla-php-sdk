<?php
namespace Highline\MultiLogin\Api\V2\Operation;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Exception\GuzzleException;
use Highline\MultiLogin\Api\Exception\ApiException;
use Highline\MultiLogin\Api\Exception\EmptyResponseException;
use Highline\MultiLogin\Api\V2\Response;
use Highline\MultiLogin\MultiLogin;

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
        $uri = MultiLogin::$apiEndpoint . 'v2/' . self::OBJECT_NAME;

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
