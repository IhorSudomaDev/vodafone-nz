<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SmsLastUsage
 * @property string|NULL lastSmsMoStatus
 * @property string|NULL lastSmsMoTimestamp
 * @property string|NULL lastSmsMtStatus
 * @property string|NULL lastSmsMtStatusTimestamp
 * @property string|NULL bearerMT
 * @property string|NULL bearerMO
 * @package VodafoneNZRestApiClient\Models
 */
class SmsLastUsage
{
	/*** @return string|NULL */
	public function getLastSmsMoStatus(): ?string
	{
		return $this->lastSmsMoStatus ?? NULL;
	}

	/*** @return string|NULL */
	public function getLastSmsMoTimestamp(): ?string
	{
		return $this->lastSmsMoTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getLastSmsMtStatus(): ?string
	{
		return $this->lastSmsMtStatus ?? NULL;
	}

	/*** @return string|NULL */
	public function getLastSmsMtStatusTimestamp(): ?string
	{
		return $this->lastSmsMtStatusTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getBearerMT(): ?string
	{
		return $this->bearerMT ?? NULL;
	}

	/*** @return string|NULL */
	public function getBearerMO(): ?string
	{
		return $this->bearerMO ?? NULL;
	}
}