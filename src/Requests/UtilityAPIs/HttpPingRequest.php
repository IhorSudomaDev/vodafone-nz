<?php

namespace VodafoneNZRestApiClient\Requests\UtilityAPIs;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\UtilityAPIs\HttpPingResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class HttpPingRequest
 * @package VodafoneNZRestApiClient\Requests\UtilityAPIs
 */
class HttpPingRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::GET;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_UTILITY_V1 . 'httpPing';
	/*** @var string */
	protected string $responseClass = HttpPingResponse::class;
	/*** @var array|string[] */
	protected array $requestParameters = ['echo' => 'Echo'];
}