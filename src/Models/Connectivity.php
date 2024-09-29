<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class Connectivity
 * @property string|NULL sessionCellId
 * @property string      mcc
 * @property string      mnc
 * @property string|NULL bearer
 * @package VodafoneNZRestApiClient\Models
 */
class Connectivity
{
	/*** @return string|NULL */
	public function getSessionCellId(): ?string
	{
		return $this->sessionCellId ?? NULL;
	}

	/*** @return string */
	public function getMcc(): string
	{
		return $this->mcc;
	}

	/*** @return string */
	public function getMnc(): string
	{
		return $this->mnc;
	}

	/*** @return string|NULL */
	public function getBearer(): ?string
	{
		return $this->bearer ?? NULL;
	}
}