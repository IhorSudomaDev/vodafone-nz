<?php

namespace VodafoneNZRestApiClient\Requests\Network\Sim;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Network\Sim\GetSimDetailsResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSimDetailsRequest
 * @package VodafoneNZRestApiClient\Requests\Network\Sim
 */
class GetSimDetailsRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::GET;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_NETWORK_V2 . 'sim';
	/*** @var string */
	protected string $responseClass = GetSimDetailsResponse::class;

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->requestParameters = [
			'simId'     => $iccid,
			'simIdType' => 'ICCID',
		];
		return $this;
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->requestParameters = [
			'simId'     => $imsi,
			'simIdType' => 'IMSI',
		];
		return $this;
	}
}