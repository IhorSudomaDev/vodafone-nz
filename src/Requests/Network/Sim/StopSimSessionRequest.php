<?php

namespace VodafoneNZRestApiClient\Requests\Network\Sim;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Network\Sim\StopSimSessionResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class StopSimSessionRequest
 * @package VodafoneNZRestApiClient\Requests\Network\Sim
 */
class StopSimSessionRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::POST;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_NETWORK_V1 . 'sim/stopSession';
	/*** @var string */
	protected string $responseClass = StopSimSessionResponse::class;

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->requestParameters['stopSIMSessionRequest']['simId']     = $iccid;
		$this->requestParameters['stopSIMSessionRequest']['simIdType'] = 'ICCID';
		return $this;
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->requestParameters['stopSIMSessionRequest']['simId']     = $imsi;
		$this->requestParameters['stopSIMSessionRequest']['simIdType'] = 'IMSI';
		return $this;
	}

	/**
	 * @param string $msisdn
	 * @return $this
	 */
	public function withMsisdn(string $msisdn): self
	{
		$this->requestParameters['stopSIMSessionRequest']['simId']     = $msisdn;
		$this->requestParameters['stopSIMSessionRequest']['simIdType'] = 'MSISDN';
		return $this;
	}

	/**
	 * @param string $eId
	 * @return $this
	 */
	public function withEId(string $eId): self
	{
		$this->requestParameters['stopSIMSessionRequest']['simId']     = $eId;
		$this->requestParameters['stopSIMSessionRequest']['simIdType'] = 'eID';
		return $this;
	}
}