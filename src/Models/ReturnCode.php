<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class ReturnCode
 * @property string majorReturnCode
 * @property string minorReturnCode
 * @package VodafoneNZRestApiClient\Models
 */
class ReturnCode
{
	/*** @return string */
	public function getMajorReturnCode(): string
	{
		return $this->majorReturnCode;
	}

	/*** @return string */
	public function getMinorReturnCode(): string
	{
		return $this->minorReturnCode;
	}
}