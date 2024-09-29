<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class DataSession
 * @property string|NULL                   apnName
 * @property string|NULL                   sessionIPAddress
 * @property string|NULL                   sessionStartTimestamp
 * @property string|NULL                   sessionTerminatedTimestamp
 * @property string|NULL                   sessionId
 * @property int|NULL                      sessionBytesIn
 * @property int|NULL                      sessionBytesOut
 * @property ConnectivitySessionStart|NULL connectivitySessionStart
 * @property ConnectivitySessionEnd|NULL   connectivitySessionEnd
 * @package VodafoneNZRestApiClient\Models
 */
class DataLastUsage
{
	/*** @return string|NULL */
	public function getSessionTerminatedTimestamp(): ?string
	{
		return $this->sessionTerminatedTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getApnName(): ?string
	{
		return $this->apnName ?? NULL;
	}

	/*** @return string|NULL */
	public function getSessionIPAddress(): ?string
	{
		return $this->sessionIPAddress ?? NULL;
	}

	/*** @return string|NULL */
	public function getSessionStartTimestamp(): ?string
	{
		return $this->sessionStartTimestamp ?? NULL;
	}

	/*** @return string|NULL */
	public function getSessionId(): ?string
	{
		return $this->sessionId ?? NULL;
	}

	/*** @return int|NULL */
	public function getSessionBytesIn(): ?int
	{
		return $this->sessionBytesIn ?? NULL;
	}

	/*** @return int|NULL */
	public function getSessionBytesOut(): ?int
	{
		return $this->sessionBytesOut ?? NULL;
	}

	/*** @return ConnectivitySessionStart|NULL */
	public function getConnectivitySessionStart(): ?ConnectivitySessionStart
	{
		return $this->connectivitySessionStart ?? NULL;
	}

	/*** @return ConnectivitySessionEnd|NULL */
	public function getConnectivitySessionEnd(): ?ConnectivitySessionEnd
	{
		return $this->connectivitySessionEnd ?? NULL;
	}
}