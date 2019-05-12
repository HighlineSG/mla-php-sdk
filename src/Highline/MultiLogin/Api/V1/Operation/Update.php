<?php
namespace Highline\MultiLogin\Api\V1\Operation;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use Highline\MultiLogin\Api\Exception\MissingParameterException;
use Highline\MultiLogin\Api\Utility\ConvertResourceToJson;
use Highline\MultiLogin\Api\V1\Response;
use Highline\MultiLogin\MultiLogin;
use Highline\MultiLogin\Api\Exception\ApiException;
use Highline\MultiLogin\Api\Exception\EmptyResponseException;
use GuzzleHttp\Exception\GuzzleException;

trait Update
{
    /**
     * @return Response
     * @throws GuzzleException
     * @throws ApiException
     * @throws EmptyResponseException
     * @throws MissingParameterException
     */
    public function update(): Response
    {
        if ($this->id === NULL) {
            throw new MissingParameterException();
        }

        $uri = MultiLogin::$apiEndpoint . 'v1/' . self::OBJECT_NAME . '/update';

        $client = new Client();

        $response = $client->request('POST', $uri, [
            RequestOptions::QUERY => [
                'token' => MultiLogin::$token,
                self::OBJECT_NAME . 'Id' => $this->id
            ],
            RequestOptions::JSON => $this,
            RequestOptions::HTTP_ERRORS => false
        ]);

        return new Response($response);
    }
}
