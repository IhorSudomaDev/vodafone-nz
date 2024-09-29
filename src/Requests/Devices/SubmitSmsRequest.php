<?php

namespace VodafoneNZRestApiClient\Requests\Devices;

use VodafoneNZRestApiClient\Authorization\Authorization;
use VodafoneNZRestApiClient\Requests\Abstracts\ARequest;
use VodafoneNZRestApiClient\Responses\Devices\SubmitSmsResponse;
use VodafoneNZRestApiClient\ValueObjects\ApiRoute;
use VodafoneNZRestApiClient\ValueObjects\HttpMethod;

/**
 * Class SubmitSmsRequest
 * @package VodafoneNZRestApiClient\Requests\Devices
 */
class SubmitSmsRequest extends ARequest
{
	/*** @var string */
	protected string $httpMethod = HttpMethod::POST;
	/*** @var string */
	protected string $responseClass = SubmitSmsResponse::class;

	/**
	 * @param Authorization $authorization
	 * @param string        $messageData
	 */
	public function __construct(Authorization $authorization, string $messageData)
	{
		parent::__construct($authorization);
		$this->queryParameters                               = ['action' => 'submitsms'];
		$this->requestParameters['submitSMS']['messageType'] = 'Text';
		$this->requestParameters['submitSMS']['messageData'] = base64_encode($messageData);
	}

	/**
	 * @param string $deviceId
	 * @return $this
	 */
	public function withDeviceId(string $deviceId): self
	{
		$this->apiRoute                                   = ApiRoute::BASE_URI_DEVICES_V1 . $deviceId;
		$this->requestParameters['submitSMS']['deviceId'] = $deviceId;
		return $this;
	}

	/**
	 * @param string $sourceId
	 * @return $this
	 */
	public function withSourceId(string $sourceId): self
	{
		$this->requestParameters['submitSMS']['sourceId'] = $sourceId;
		return $this;
	}

	/**
	 * @param string $messageUdh
	 * @return $this
	 */
	public function withMessageUdh(string $messageUdh): self
	{
		$this->requestParameters['submitSMS']['messageUDH'] = $messageUdh;
		return $this;
	}

	/**
	 * @param string $priority
	 * @return $this
	 */
	public function withPriority(string $priority): self
	{
		$this->requestParameters['submitSMS']['priority'] = $priority;
		return $this;
	}

	/**
	 * @param string $validityPeriod
	 * @return $this
	 */
	public function withValidityPeriod(string $validityPeriod): self
	{
		$this->requestParameters['submitSMS']['validityPeriod'] = $validityPeriod;
		return $this;
	}

	/**
	 * @param string $replaceIfPresent
	 * @return $this
	 */
	public function withReplaceIfPresent(string $replaceIfPresent): self
	{
		$this->requestParameters['submitSMS']['replaceIfPresent'] = $replaceIfPresent;
		return $this;
	}

	/**
	 * @param int $dataCodingScheme
	 * @return $this
	 */
	public function withDataCodingScheme(int $dataCodingScheme): self
	{
		$this->requestParameters['submitSMS']['dataCodingScheme'] = $dataCodingScheme;
		return $this;
	}
}