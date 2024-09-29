<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class ApnListItem
 * @property string apnName
 * @property string staticIpAddress
 * @package VodafoneNZRestApiClient\Models
 */
class ApnListItem
{
	/*** @return string */
	public function getApnName(): string
	{
		return $this->apnName;
	}

	/*** @return string */
	public function getStaticIpAddress(): string
	{
		return $this->staticIpAddress;
	}
}