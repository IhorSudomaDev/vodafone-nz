<?php

namespace VodafoneNZRestApiClient\Requests\Network\Sim;

use InvalidArgumentException;
use VodafoneNZRestApiClient\Authorization\Authorization;
use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Network\Sim\GetSimUsageResponse;
use VodafoneNZRestApiClient\Traits\WithPagination;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;
use VodafoneNZRestApiClient\ValueObjects\ServiceFilter;

/**
 * Class GetSimDetailsRequest
 * @package VodafoneNZRestApiClient\Requests\Network\Sim
 */
class GetSimUsageRequest extends ARequest
{
	use WithPagination;

	/*** @var string */
	protected string $httpMethod = HttpMethod::GET;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_NETWORK_V1 . 'sim/usage';
	/*** @var string */
	protected string $responseClass = GetSimUsageResponse::class;
	/*** @var array|NULL[] */
	protected array $requestParameters = [
		'simId'     => NULL,
		'simIdType' => NULL,
	];

	/**
	 * @param Authorization $authorization
	 * @param string        $startDate
	 * @param string        $serviceFilter
	 */
	public function __construct(Authorization $authorization, string $startDate, string $serviceFilter)
	{
		parent::__construct($authorization);
		$this->requestParameters['startDate'] = $startDate;
		if ( ! in_array($serviceFilter, ServiceFilter::getList())) {
			throw new InvalidArgumentException("Service Filter '$serviceFilter' is not a valid service filter");
		}
		$this->requestParameters['serviceFilter'] = $serviceFilter;
	}

	/**
	 * @param string $iccid
	 * @return $this
	 */
	public function withIccid(string $iccid): self
	{
		$this->requestParameters['simId']     = $iccid;
		$this->requestParameters['simIdType'] = 'ICCID';
		return $this;
	}

	/**
	 * @param string $imsi
	 * @return $this
	 */
	public function withImsi(string $imsi): self
	{
		$this->requestParameters['simId']     = $imsi;
		$this->requestParameters['simIdType'] = 'IMSI';
		return $this;
	}

	/**
	 * @param string $msisdn
	 * @return $this
	 */
	public function withMsisdn(string $msisdn): self
	{
		$this->requestParameters['simId']     = $msisdn;
		$this->requestParameters['simIdType'] = 'MSISDN';
		return $this;
	}

	/**
	 * @param string $eId
	 * @return $this
	 */
	public function withEId(string $eId): self
	{
		$this->requestParameters['simId']     = $eId;
		$this->requestParameters['simIdType'] = 'eID';
		return $this;
	}

	/**
	 * @param string $endDate
	 * @return $this
	 */
	public function withEndDate(string $endDate): self
	{
		$this->requestParameters['endDate'] = $endDate;
		return $this;
	}
}