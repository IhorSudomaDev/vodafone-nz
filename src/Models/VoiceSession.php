<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class VoiceSession
 * @property string            state
 * @property string            sessionStartTimestamp
 * @property string|NULL       sessionTerminatedTimestamp
 * @property string            otherParty
 * @property string|NULL       stopStatus
 * @property string|NULL       stopFailureReason
 * @property Connectivity|NULL connectivity
 * @package VodafoneNZRestApiClient\Models
 */
class VoiceSession
{
	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string */
	public function getSessionStartTimestamp(): string
	{
		return $this->sessionStartTimestamp;
	}

	/*** @return string|NULL */
	public function getSessionTerminatedTimestamp(): ?string
	{
		return $this->sessionTerminatedTimestamp ?? NULL;
	}

	/*** @return string */
	public function getOtherParty(): string
	{
		return $this->otherParty;
	}

	/*** @return string|NULL */
	public function getStopStatus(): ?string
	{
		return $this->stopStatus ?? NULL;
	}

	/*** @return string|NULL */
	public function getStopFailureReason(): ?string
	{
		return $this->stopFailureReason ?? NULL;
	}

	/*** @return Connectivity|NULL */
	public function getConnectivity(): ?Connectivity
	{
		return $this->connectivity ?? NULL;
	}
}