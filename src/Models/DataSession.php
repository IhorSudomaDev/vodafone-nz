<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class DataSession
 * @property string                        apnName
 * @property string                        state
 * @property string                        sessionIPAddress
 * @property string                        sessionStartTimestamp
 * @property string|NULL                   sessionTerminatedTimestamp
 * @property string|NULL                   sessionLastUpdateTimestamp
 * @property string                        sessionId
 * @property int                           sessionBytesIn
 * @property int                           sessionBytesOut
 * @property string                        stopStatus
 * @property string|NULL                   stopFailureReason
 * @property ConnectivitySessionStart|NULL connectivitySessionStart
 * @property ConnectivitySessionEnd|NULL   connectivitySessionEnd
 * @package VodafoneNZRestApiClient\Models
 */
class DataSession
{
	/*** @return string */
	public function getApnName(): string
	{
		return $this->apnName;
	}

	/*** @return string */
	public function getState(): string
	{
		return $this->state;
	}

	/*** @return string */
	public function getSessionIPAddress(): string
	{
		return $this->sessionIPAddress;
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

	/*** @return string|NULL */
	public function getSessionLastUpdateTimestamp(): ?string
	{
		return $this->sessionLastUpdateTimestamp ?? NULL;
	}

	/*** @return string */
	public function getSessionId(): string
	{
		return $this->sessionId;
	}

	/*** @return int */
	public function getSessionBytesIn(): int
	{
		return $this->sessionBytesIn;
	}

	/*** @return int */
	public function getSessionBytesOut(): int
	{
		return $this->sessionBytesOut;
	}

	/*** @return string */
	public function getStopStatus(): string
	{
		return $this->stopStatus;
	}

	/*** @return string|NULL */
	public function getStopFailureReason(): ?string
	{
		return $this->stopFailureReason ?? NULL;
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