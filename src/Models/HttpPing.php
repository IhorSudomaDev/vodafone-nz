<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class HttpPing
 * @property string     echo
 * @property ReturnCode returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class HttpPing
{
	/*** @return string */
	public function getEcho(): string
	{
		return $this->echo;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}