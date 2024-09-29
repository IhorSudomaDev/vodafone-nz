<?php

namespace VodafoneNZRestApiClient\Requests\Devices;

use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Devices\GetSmsCommunicationOverviewResponse;
use VodafoneNZRestApiClient\Traits\WithPagination;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class GetSmsCommunicationOverviewRequest
 * @package VodafoneNZRestApiClient\Requests\Devices
 */
class GetSmsCommunicationOverviewRequest extends ARequest
{
	use WithPagination;

	/*** @var string */
	protected string $httpMethod = HttpMethod::GET;
	/*** @var string */
	protected string $apiRoute = ApiRoute::BASE_URI_DEVICES_V1 . 'smsCommunicationOverview';
	/*** @var string */
	protected string $responseClass = GetSmsCommunicationOverviewResponse::class;
	/*** @var array */
	protected array $requestParameters = [];

	/**
	 * @param string $selectedImsi
	 * @return $this
	 */
	public function withSelectedImsi(string $selectedImsi): self
	{
		$this->requestParameters['selectedImsi'] = $selectedImsi;
		return $this;
	}

	/**
	 * @param string $startDate
	 * @return $this
	 */
	public function withStartDate(string $startDate): self
	{
		$this->requestParameters['startDate'] = $startDate;
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