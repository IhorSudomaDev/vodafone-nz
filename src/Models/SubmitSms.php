<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SubmitSms
 * @property string     deviceId
 * @property string     messageReference
 * @property ReturnCode returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class SubmitSms
{
	/*** @return string */
	public function getDeviceId(): string
	{
		return $this->deviceId;
	}

	/*** @return string */
	public function getMessageReference(): string
	{
		return $this->messageReference;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}