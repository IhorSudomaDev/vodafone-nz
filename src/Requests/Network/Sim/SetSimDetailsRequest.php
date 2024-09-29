<?php

namespace VodafoneNZRestApiClient\Requests\Network\Sim;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Network\Sim\SetSimDetailsResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class SetSimDetailsRequest
 * @package VodafoneNZRestApiClient\Requests\Network\Sim
 */
class SetSimDetailsRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::PUT;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_NETWORK_V2 . 'sim';
	/*** @var string */
	protected string $responseClass = SetSimDetailsResponse::class;
	/*** @var array|NULL[] */
	protected array $requestParameters = [
		'setSimDetailsv2' => [
			'simId'     => NULL,
			'simIdType' => NULL,
		],
	];

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->requestParameters['setSimDetailsv2']['simId']     = $iccid;
		$this->requestParameters['setSimDetailsv2']['simIdType'] = 'ICCID';
		return $this;
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->requestParameters['setSimDetailsv2']['simId']     = $imsi;
		$this->requestParameters['setSimDetailsv2']['simIdType'] = 'IMSI';
		return $this;
	}

	/**
	 * @param string $state
	 * @return $this
	 */
	public function changeState(string $state): self
	{
		$this->requestParameters['setSimDetailsv2']['state'] = $state;
		return $this;
	}
}