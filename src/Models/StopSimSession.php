<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class StopSimSession
 * @property string     simId
 * @property ReturnCode returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class StopSimSession
{
	/*** @return string */
	public function getSimId(): string
	{
		return $this->simId;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}