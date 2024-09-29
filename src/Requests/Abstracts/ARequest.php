<?php

namespace VodafoneNZRestApiClient\Requests\Abstracts;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use RuntimeException;
use Throwable;
use VodafoneNZRestApiClient\Authorization\Authorization;
use VodafoneNZRestApiClient\Exceptions\AuthorizationException;
use VodafoneNZRestApiClient\Exceptions\ForbiddenException;
use VodafoneNZRestApiClient\Exceptions\NotFoundException;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class ARequest
 * @package VodafoneNZRestApiClient\Requests\Abstracts
 */
class ARequest
{
	/*** @var Authorization */
	protected Authorization $authorization;
	/*** @return string */
	protected string $httpMethod;
	/*** @return string */
	protected string $apiRoute;
	/*** @var string */
	protected string $responseClass;
	/*** @var array */
	protected array $requestParameters;
	/*** @var array */
	protected array $queryParameters = [];

	/*** @param Authorization $authorization */
	public function __construct(Authorization $authorization)
	{
		$this->authorization = $authorization;
	}

	/**
	 * @return mixed
	 * @throws Throwable
	 */
	public function send()
	{
		if ($this->httpMethod === HttpMethod::GET) {
			$jsonData = '';
			$data     = $this->requestParameters;
		} else {
			$jsonData = json_encode($this->requestParameters, JSON_THROW_ON_ERROR);
			$data     = $this->queryParameters;
		}
		try {
			$client        = new Client();
			$requestResult = $client->request(
				$this->httpMethod,
				$this->apiRoute,
				[
					'headers' => [
						'accept'        => 'application/json',
						'content-type'  => 'application/json',
						'Authorization' => 'Bearer ' . $this->authorization->getToken()->getAccessToken(),
					],
					'query'   => $data,
					'body'    => $jsonData,
				]
			);
			switch ($requestResult->getStatusCode()) {
				case 200:
					$response = json_decode($requestResult->getBody()->getContents(), FALSE, 512, JSON_THROW_ON_ERROR);
					return (new $this->responseClass($response));
				case 201:
				case 204:
					return TRUE;
				default:
					throw new RuntimeException('Status Code: ' . $requestResult->getStatusCode());
			}
		} catch (RequestException $e) {
			switch ($e->getCode()) {
				case 401:
					throw new AuthorizationException();
				case 403:
					throw new ForbiddenException();
				case 404:
					throw new NotFoundException();
				case 429:
				case 500:
				default:
					throw new RuntimeException($e->getMessage());
			}
		} catch (Throwable $e) {
			throw new RuntimeException($e->getMessage());
		}
	}
}