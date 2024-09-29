<?php

namespace VodafoneNZRestApiClient;

use VodafoneNZRestApiClient\Authorization\Authorization;
use VodafoneNZRestApiClient\Requests\Devices\GetSmsCommunicationOverviewRequest;
use VodafoneNZRestApiClient\Requests\Network\Sim\GetSimDetailsRequest;
use VodafoneNZRestApiClient\Requests\Network\Sim\GetSimStatusRequest;
use VodafoneNZRestApiClient\Requests\Network\Sim\GetSimUsageRequest;
use VodafoneNZRestApiClient\Requests\Network\Sim\SetSimDetailsRequest;
use VodafoneNZRestApiClient\Requests\Network\Sim\StopSimSessionRequest;
use VodafoneNZRestApiClient\Requests\Devices\SubmitSmsRequest;
use VodafoneNZRestApiClient\Requests\UtilityAPIs\HttpPingRequest;

/**
 * Class VodafoneNZApiClient
 * @package VodafoneNZRestApiClient
 */
class VodafoneNZApiClient
{
	/*** @var Authorization */
	private Authorization $authorization;

	/*** @param Authorization $authorization */
	public function __construct(Authorization $authorization)
	{
		$this->setAuthorization($authorization);
	}

	/*** @return Authorization */
	public function getAuthorization(): Authorization
	{
		return $this->authorization;
	}

	/*** @param Authorization $authorization */
	public function setAuthorization(Authorization $authorization): void
	{
		$this->authorization = $authorization;
	}

	/*** @return GetSimDetailsRequest */
	public function getSimDetails(): GetSimDetailsRequest
	{
		return new GetSimDetailsRequest($this->getAuthorization());
	}

	/**
	 * @param string $startDate
	 * @param string $serviceFilter
	 * @return GetSimUsageRequest
	 */
	public function getSimUsage(string $startDate, string $serviceFilter): GetSimUsageRequest
	{
		return new GetSimUsageRequest($this->getAuthorization(), $startDate, $serviceFilter);
	}

	/*** @return GetSimStatusRequest */
	public function getSimStatus(): GetSimStatusRequest
	{
		return new GetSimStatusRequest($this->getAuthorization());
	}

	/*** @return SetSimDetailsRequest */
	public function setSimDetails(): SetSimDetailsRequest
	{
		return new SetSimDetailsRequest($this->getAuthorization());
	}

	/**
	 * @param string $message
	 * @return SubmitSmsRequest
	 */
	public function submitSms(string $message): SubmitSmsRequest
	{
		return new SubmitSmsRequest($this->getAuthorization(), $message);
	}

	/*** @return GetSmsCommunicationOverviewRequest */
	public function getSmsCommunicationOverview(): GetSmsCommunicationOverviewRequest
	{
		return new GetSmsCommunicationOverviewRequest($this->getAuthorization());
	}

	/*** @return StopSimSessionRequest */
	public function stopSimSession(): StopSimSessionRequest
	{
		return new StopSimSessionRequest($this->getAuthorization());
	}

	/*** @return HttpPingRequest */
	public function httpPing(): HttpPingRequest
	{
		return new HttpPingRequest($this->getAuthorization());
	}
}