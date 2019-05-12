<?php
namespace Highline\MultiLogin\Api\V1;

use GuzzleHttp\Psr7\Response as GuzzleHttpResponse;
use Highline\MultiLogin\Api\Exception\ApiException;
use Highline\MultiLogin\Api\Exception\EmptyResponseException;

class Response
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $value;

    /**
     * Response constructor.
     * @param GuzzleHttpResponse $response
     * @throws EmptyResponseException
     * @throws ApiException
     */
    public function __construct(GuzzleHttpResponse $response)
    {
        $contents = $response->getBody()->getContents();

        if (empty($contents)) {
            throw new EmptyResponseException();
        }

        $contents = json_decode($contents, true);

        if ($response->getStatusCode() !== 200) {
            throw new ApiException($contents['status'] . ' ' . $contents['value']);
        }

        if (isset($contents['data'])) {
            $this->data = $contents['data'];
        } else {
            $this->data = $contents;
        }

        if (isset($contents['status'])) {
            $this->status = $contents['status'];
        }

        if (isset($contents['value'])) {
            $this->value = $contents['value'];
        }
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
