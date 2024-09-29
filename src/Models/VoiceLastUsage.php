<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class VoiceLastUsage
 * @property string|NULL                   sessionStartTimestamp
 * @property string|NULL                   sessionTerminatedTimestamp
 * @property ConnectivitySessionStart|NULL connectivitySessionStart
 * @package VodafoneNZRestApiClient\Models
 */
class VoiceLastUsage
{
	/*** @return string|NULL */
	public function getSessionStartTimestamp(): ?string
	{
		return $this->sessionStartTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getSessionTerminatedTimestamp(): ?string
	{
		return $this->sessionTerminatedTimestamp ?? NULL;
	}

	/*** @return ConnectivitySessionStart|NULL */
	public function getConnectivitySessionStart(): ?ConnectivitySessionStart
	{
		return $this->connectivitySessionStart ?? NULL;
	}
}