<?php

namespace VodafoneNZRestApiClient\Models;

/**
 * Class SimUsage
 * @property string       IMSI
 * @property string       MSISDN
 * @property string       ICCID
 * @property string|NULL  IMEI
 * @property string|NULL  eID
 * @property string       customerId
 * @property string       customerName
 * @property string       parentId
 * @property string       parentName
 * @property int          matchedResults
 * @property SessionScope SessionScope
 * @property ReturnCode   returnCode
 * @package VodafoneNZRestApiClient\Models
 */
class SimUsage
{
	/*** @return string */
	public function getIMSI(): string
	{
		return $this->IMSI;
	}

	/*** @return string */
	public function getMSISDN(): string
	{
		return $this->MSISDN;
	}

	/*** @return string */
	public function getICCID(): string
	{
		return $this->ICCID;
	}

	/*** @return string|NULL */
	public function getIMEI(): ?string
	{
		return $this->IMEI ?? NULL;
	}

	/*** @return string|NULL */
	public function getEID(): ?string
	{
		return $this->eID ?? NULL;
	}

	/*** @return string */
	public function getCustomerId(): string
	{
		return $this->customerId;
	}

	/*** @return string */
	public function getCustomerName(): string
	{
		return $this->customerName;
	}

	/*** @return string */
	public function getParentId(): string
	{
		return $this->parentId;
	}

	/*** @return string */
	public function getParentName(): string
	{
		return $this->parentName;
	}

	/*** @return int */
	public function getMatchedResults(): int
	{
		return $this->matchedResults;
	}

	/*** @return SessionScope */
	public function getSessionScope(): SessionScope
	{
		return $this->SessionScope;
	}

	/*** @param SessionScope $SessionScope */
	public function setSessionScope(SessionScope $SessionScope): void
	{
		$this->SessionScope = $SessionScope;
	}

	/*** @return ReturnCode */
	public function getReturnCode(): ReturnCode
	{
		return $this->returnCode;
	}
}