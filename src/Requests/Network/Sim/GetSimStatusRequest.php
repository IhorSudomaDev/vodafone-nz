<?php

namespace VodafoneNZRestApiClient\Requests\Network\Sim;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Network\Sim\GetSimStatusResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSimStatusRequest
 * @package VodafoneNZRestApiClient\Requests\Network\Sim
 */
class GetSimStatusRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::POST;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_NETWORK_V1 . 'sim/status';
	/*** @var string */
	protected string $responseClass = GetSimStatusResponse::class;

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->requestParameters['getSIMStatusRequest'] = ['simId' => $iccid, 'simIdType' => 'ICCID'];
		return $this;
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->requestParameters['getSIMStatusRequest'] = ['simId' => $imsi, 'simIdType' => 'IMSI'];
		return $this;
	}

	/**
	 * @param string $msisdn
	 * @return $this
	 */
	public function withMsisdn(string $msisdn): self
	{
		$this->requestParameters['getSIMStatusRequest'] = ['simId' => $msisdn, 'simIdType' => 'MSISDN'];
		return $this;
	}

	/**
	 * @param string $eId
	 * @return $this
	 */
	public function withEId(string $eId): self
	{
		$this->requestParameters['getSIMStatusRequest'] = ['simId' => $eId, 'simIdType' => 'eID'];
		return $this;
	}

	/**
	 * @param bool $value
	 * @return $this
	 */
	public function withForceRegistrationStatusRefresh(bool $value): self
	{
		$this->requestParameters['getSIMStatusRequest']['forceRegistrationStatusRefresh'] = $value;
		return $this;
	}
}