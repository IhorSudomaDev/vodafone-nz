<?php

namespace VodafoneNZRestApiClient\Models\Abstracts;

/**
 * Class ConnectivitySession
 * @property string|NULL sessionCellId
 * @property string|NULL mcc
 * @property string|NULL mnc
 * @property string|NULL radioTechnology
 * @package VodafoneNZRestApiClient\Models\Abstracts
 */
abstract class ConnectivitySession
{
	/*** @return string|NULL */
	public function getSessionCellId(): ?string
	{
		return $this->sessionCellId ?? NULL;
	}

	/*** @return string|NULL */
	public function getMcc(): ?string
	{
		return $this->mcc ?? NULL;
	}

	/*** @return string|NULL */
	public function getMnc(): ?string
	{
		return $this->mnc ?? NULL;
	}

	/*** @return string|NULL */
	public function getRadioTechnology(): ?string
	{
		return $this->radioTechnology ?? NULL;
	}
}