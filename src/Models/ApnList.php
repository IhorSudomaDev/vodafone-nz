<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class ApnList
 * @property ApnListItem apnListItem
 * @package VodafoneNZRestApiClient\Models
 */
class ApnList
{
	/*** @return ApnListItem */
	public function getApnListItem(): ApnListItem
	{
		return $this->apnListItem;
	}
}